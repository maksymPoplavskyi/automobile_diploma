<?php


namespace App\Repositories;


use App\Models\Driver_unit;

class DriverUnitRepository extends BaseRepository
{
    public function getModel()
    {
        return Driver_unit::getModel();
    }
}
