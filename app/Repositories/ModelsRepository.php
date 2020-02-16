<?php


namespace App\Repositories;


use App\Models\Models;

class ModelsRepository extends BaseRepository
{
    public function getModel()
    {
        return Models::getModel();
    }

    public function getByBrandId(int $brand_id)
    {
        return $this->model->whereBrandId($brand_id)->get();
    }
}
