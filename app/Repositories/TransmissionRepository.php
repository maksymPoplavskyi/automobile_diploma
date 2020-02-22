<?php


namespace App\Repositories;


use App\Models\Transmission;

class TransmissionRepository extends BaseRepository
{
    public function getModel()
    {
        return Transmission::getModel();
    }
}
