<?php


namespace App\Repositories;


use App\Models\Additional;

class AdditionalRepository extends BaseRepository
{
    public function getModel()
    {
        return Additional::getModel();
    }
}
