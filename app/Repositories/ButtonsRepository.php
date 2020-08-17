<?php

namespace App\Repositories;

use App\Models\Buttons as Model;

class ButtonsRepository extends CoreRepository
{
    protected function getModelClass()
    {
        return Model::class;
    }
}
