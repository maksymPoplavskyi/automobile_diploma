<?php

namespace App\Http\Controllers;

use App\Http\Requests\MainSearchRequest;
use App\Repositories\AutomobileRepository;
use App\Services\AuctionService;
use Illuminate\Http\Request;

class AuctionController extends Controller
{
    public function index(AutomobileRepository $automobileRepository)
    {
        $automobiles = $automobileRepository->all()->where('status', 0);

        return view('auction', compact('automobiles'));
    }

    public function search(MainSearchRequest $request, AuctionService $service)
    {
        $service->searchAction($request);
    }
}
