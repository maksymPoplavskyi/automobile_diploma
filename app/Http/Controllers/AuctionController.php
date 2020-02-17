<?php

namespace App\Http\Controllers;

use App\Http\Requests\MainSearchRequest;
use App\Repositories\AutomobileRepository;
use App\Repositories\BrandRepository;
use App\Repositories\FuelRepository;
use App\Services\AuctionService;
use Illuminate\Http\Request;

class AuctionController extends Controller
{
    public function index()
    {
        $automobiles = app(AutomobileRepository::class)->paginate();
        $brands = app(BrandRepository::class)->all();
        $fuels = app(FuelRepository::class)->all();

        return view('auction', compact('automobiles', 'brands', 'fuels'));
    }

    public function search(MainSearchRequest $request, AuctionService $service)
    {
        $automobiles = $service->searchAction($request);

        $brands = app(BrandRepository::class)->all();
        $fuels = app(FuelRepository::class)->all();

        return view('search', compact('automobiles', 'brands', 'fuels'));
    }
}
