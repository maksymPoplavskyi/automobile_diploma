<?php


namespace App\Repositories;


use App\Models\Helper;

class HelperRepository extends BaseRepository
{
    public function getModel()
    {
        return Helper::getModel();
    }
}
