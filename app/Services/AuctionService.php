<?php


namespace App\Services;


use App\Repositories\AutomobileRepository;

class AuctionService
{
    public function searchAction($request)
    {
        $select = app(AutomobileRepository::class)->searchAutomobiles();

        if ($request->brand_id) {
            $select
                ->leftJoin('models', 'automobiles.model_id', '=', 'models.id')
                ->where('brand_id', $request->brand_id);
        }

        if ($request->model_id) {
            $select
                ->where('model_id', $request->model_id);
        }

        if ($request->years) {
            $years = explode(';', $request->years);

            $select->
                whereBetween('year', [$years[0], end($years)]);
        }

        return $select->paginate(15);
    }
}
