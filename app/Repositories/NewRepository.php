<?php


namespace App\Repositories;


use App\Models\News;

class NewRepository extends BaseRepository
{
    public function getModel()
    {
        return News::getModel();
    }
}
