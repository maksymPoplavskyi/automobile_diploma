<?php


namespace App\Repositories;


use App\Models\Damage;

class DamageRepository extends BaseRepository
{
    public function getModel()
    {
        return Damage::getModel();
    }
}
