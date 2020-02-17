<?php


namespace App\Repositories;


use App\Models\Automobile;
use Carbon\Carbon;

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

    public function newAutomobiles()
    {
        return $this->model->where('created_at', '>', Carbon::now()->subHour())->get();
    }

    public function searchAutomobiles()
    {
        return $this->model->select('automobiles.*');
    }

    public function paginate()
    {
        return $this->model->paginate(15);
    }
}
