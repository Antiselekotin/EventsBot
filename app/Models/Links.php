<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Links extends Model
{
    protected $fillable = [
        'button_name',
        'link',
        'participant_id'
    ];
}
