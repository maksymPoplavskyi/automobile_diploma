<?php


namespace App\Repositories;


use App\Models\Automobile;

class AutomobileRepository extends BaseRepository
{
    public function getModel()
    {
        return Automobile::getModel();
    }

    public function selectedAuto($id)
    {
        return $this->model->whereId($id)->first();
    }
}
