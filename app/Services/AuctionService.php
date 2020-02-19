<?php


namespace App\Services;


use App\Repositories\AutomobileRepository;

class AuctionService
{
    public function mainSearchAction($request)
    {
        $select = app(AutomobileRepository::class)->searchAutomobiles();

        if ($request->brand_id) {
            $select
                ->leftJoin('models', 'automobiles.model_id', '=', 'models.id')
                ->where('brand_id', $request->brand_id);
        }

        if ($request->model_id) {
            $select->where('model_id', $request->model_id);
        }

        if ($request->years) {
            $years = explode(';', $request->years);

            $select->whereIn('year', $years);
        }

        return $select->paginate(15);
    }

    public function auctionSearchAction($request)
    {
        $select = app(AutomobileRepository::class)->searchAutomobiles();

        if ($request->brands) {
            $select
                ->leftJoin('models', 'automobiles.model_id', '=', 'models.id')
                ->whereIn('brand_id', $request->brands);
        }

        if ($request->fuels) {
            $select
                ->leftJoin('additionals', 'automobiles.additional_id', '=', 'additionals.id')
                ->whereIn('fuel_id', $request->fuels);
        }

        if ($request->years) {
            $select->whereIn('year', $request->years);
        }

        return $select->paginate(15);
    }
}
