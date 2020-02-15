<?php

namespace App\Http\Controllers;

use App\Repositories\AutomobileRepository;
use Illuminate\Http\Request;

class AuctionController extends Controller
{
    public function index(AutomobileRepository $automobileRepository)
    {
        $automobiles = $automobileRepository->all()->where('status', 0);

        return view('auction', compact('automobiles'));
    }
}
