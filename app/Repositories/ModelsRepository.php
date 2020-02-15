<?php


namespace App\Repositories;


use App\Models\Models;

class ModelsRepository extends BaseRepository
{
    public function getModel()
    {
        return Models::getModel();
    }
}
