<?php


namespace App\Repositories;


use App\Models\Brand;

class BrandRepository extends BaseRepository
{
    public function getModel()
    {
        return Brand::getModel();
    }
}
