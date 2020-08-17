<?php

namespace App\Repositories;

use App\Models\Links as Model;

class LinksRepository extends CoreRepository
{
    protected function getModelClass()
    {
        return Model::class;
    }

    public function getToAddLink($id) {
        return $this->startCondition()->where('id', '=', $id)->first();
    }

    /** @return Model */
    public function getEdit($id)
    {
        return $this->startCondition()->where('id', '=', $id)->first();
    }
}
