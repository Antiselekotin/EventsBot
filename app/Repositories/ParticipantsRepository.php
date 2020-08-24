<?php

namespace App\Repositories;


use App\Models\Participants as Model;

class ParticipantsRepository extends CoreRepository
{
    protected function getModelClass()
    {
        return Model::class;
    }

    public function getAllWithPaginate($count = 15)
    {
        $column = ['id', 'name', 'artist', 'day', 'country', 'city', 'info', 'time'];
        return $this->startCondition()->select($column)->paginate($count);
    }

    /**
     * @param int $id
     */
    public function getEdit($id)
    {

        return $this->startCondition()
            ->select('*')
            ->where('id', '=', $id)
            ->with(['links:id,participant_id,button_name,link'])
            ->first();
     }
}
