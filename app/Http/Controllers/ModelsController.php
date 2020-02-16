<?php

namespace App\Http\Controllers;

use App\Repositories\ModelsRepository;
use Illuminate\Http\Request;

class ModelsController extends Controller
{
    public function index(int $brand_id, ModelsRepository $modelsRepository)
    {
        return response()->json([
            'result' => true,
            'data' => $modelsRepository->getByBrandId($brand_id)
        ]);
    }
}
