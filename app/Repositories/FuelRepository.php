<?php


namespace App\Repositories;


use App\Models\Fuel;

class FuelRepository extends BaseRepository
{
    public function getModel()
    {
        return Fuel::getModel();
    }
}
