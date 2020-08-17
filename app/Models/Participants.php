<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Links;

class Participants extends Model
{
    protected $fillable = ['name', 'artist', 'day', 'country', 'city', 'info', 'time'];

    public function links()
    {
        return $this->hasMany(Links::class, 'participant_id');
    }

    public function getRoleAttribute()
    {
        return $this->artist ? 'Артист' : 'Организатор';
    }
}
