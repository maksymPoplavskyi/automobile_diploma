<?php

namespace App\Console\Commands;

require_once __DIR__ . '/../../../vendor/autoload.php';

use App\Repositories\AdditionalRepository;
use App\Repositories\AutomobileRepository;
use App\Repositories\BaseRepository;
use App\Repositories\BrandRepository;
use App\Repositories\DamageRepository;
use App\Repositories\DriverUnitRepository;
use App\Repositories\FuelRepository;
use App\Repositories\ImageRepository;
use App\Repositories\ModelsRepository;
use App\Repositories\TransmissionRepository;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Symfony\Component\DomCrawler\Crawler;

class parserAutomobileCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:parserAutomobiles';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //parser Brands
//        $url = "https://www.americaro.com.ua/index.php?route=product/category&path=28";
//
//        $html = file_get_contents($url);
//
//        $crawler = new Crawler($html);
//        $crawler = $crawler
//            ->filter('#filter-module-36 > div.manufacturer-filter.collapsable-block > div.collapsable-choices > label')
//            ->each(function ($node) {
//                return [$node->text(), $node->filter('input')->attr('value')];
//            });
//
//        foreach ($crawler as $brand) {
//            app(BrandRepository::class)->insert([
//                'id' => $brand[1],
//                'name' => $brand[0]]);
//        }
//
//        $this->info('brands added');

        //parser Models
        $brands = app(BrandRepository::class)->all();

        foreach ($brands as $brand) {
            $url = "https://www.americaro.com.ua/index.php?route=extension/filter&module_id=36&manufacturer_id=$brand->id&category_id=28";
            $html = file_get_contents($url);

            $crawler = new Crawler($html);
            $crawler
                ->filter('body > section.catalog > div > div > div.col-12.col-md-8.col-lg-8.content_left_border > div > div.col-12.col-md-6.col-lg-6.catalog__info > h3 > a')
                ->each(function ($node) use ($brand) {
                    $url = $node->attr('href');
                    $html = file_get_contents($url);

                    $crawler = new Crawler($html);
                    $model = $crawler->filter('body > section.product > div > div.row.product__heading > div > h2')
                        ->text();

                    //insert model
                    $modelName = str_replace("$brand->name ", '', "$model");

                    $modelId = app(ModelsRepository::class)->insertGetId([
                        'name' => $modelName,
                        'brand_id' => $brand->id
                    ]);

                    //insert additional
                    $color = $crawler
                        ->filter('body > section.product > div > div:nth-child(2) > div.col-12.col-lg-5.product__wrapper.product__box > table:nth-child(3) > tbody > tr:nth-child(3) > td.product__table--value')
                        ->text();

                    $color = strtolower($color);

                    $engine = $crawler
                        ->filter('body > section.product > div > div:nth-child(2) > div.col-12.col-lg-5.product__wrapper.product__box > table:nth-child(3) > tbody > tr:nth-child(5) > td.product__table--value')
                        ->text();

                    $cylindersCount = $crawler
                        ->filter('body > section.product > div > div:nth-child(2) > div.col-12.col-lg-5.product__wrapper.product__box > table:nth-child(3) > tbody > tr:nth-child(6) > td.product__table--value')
                        ->text();

                    $fuel = $crawler
                        ->filter('body > section.product > div > div:nth-child(2) > div.col-12.col-lg-5.product__wrapper.product__box > table:nth-child(3) > tbody > tr:nth-child(9) > td.product__table--value')
                        ->text();

                    $fuel = strtolower($fuel);

                    $fuel = app(FuelRepository::class)->whereName($fuel);

                    $driverUnit = $crawler
                        ->filter('body > section.product > div > div:nth-child(2) > div.col-12.col-lg-5.product__wrapper.product__box > table:nth-child(3) > tbody > tr:nth-child(8) > td.product__table--value')
                        ->text();

                    $driverUnit = strtolower($driverUnit);

                    $driverUnit = app(DriverUnitRepository::class)->whereName($driverUnit);

                    $hasKey = $crawler
                        ->filter('body > section.product > div > div:nth-child(2) > div.col-12.col-lg-5.product__wrapper.product__box > table:nth-child(3) > tbody > tr:nth-child(10) > td.product__table--value')
                        ->text();

                    $hasKey = strtolower($hasKey);

                    $state = $crawler
                        ->filter('body > section.product > div > div:nth-child(2) > div.col-12.col-lg-5.product__wrapper.product__box > div > h3')
                        ->text();

                    $additionalId = app(AdditionalRepository::class)->insertGetId([
                        'color' => $color,
                        'engine' => $engine,
                        'count_of_cylinders' => $cylindersCount,
                        'fuel_id' => $fuel->id,
                        'driver_unit_id' => $driverUnit->id,
                        'has_key' => $hasKey,
                        'state' => $state
                    ]);

                    //insert automobile
                    $year = $crawler
                        ->filter('body > section.product > div > div:nth-child(2) > div.col-12.col-lg-5.product__wrapper.product__box > table:nth-child(3) > tbody > tr:nth-child(4) > td.product__table--value')
                        ->text();

                    $mileage = $crawler
                        ->filter('body > section.product > div > div:nth-child(2) > div.col-12.col-lg-5.product__wrapper.product__box > table:nth-child(3) > tbody > tr:nth-child(2) > td.product__table--value')
                        ->text();

                    $location = $crawler
                        ->filter('body > section.product > div > div:nth-child(2) > div.col-12.col-lg-5.product__wrapper.product__box > table:nth-child(1) > tbody > tr:nth-child(1) > td.product__table--value')
                        ->text();

                    $damage = $crawler
                        ->filter('body > section.product > div > div:nth-child(2) > div.col-12.col-lg-5.product__wrapper.product__box > table:nth-child(2) > tbody > tr:nth-child(5) > td.product__table--value')
                        ->text();

                    $damage = strtolower($damage);

                    $damage = app(DamageRepository::class)->whereName($damage);

                    $transmission = $crawler
                        ->filter('body > section.product > div > div:nth-child(2) > div.col-12.col-lg-5.product__wrapper.product__box > table:nth-child(3) > tbody > tr:nth-child(7) > td.product__table--value')
                        ->text();

                    $transmission = strtolower($transmission);

                    $transmission = app(TransmissionRepository::class)->whereName($transmission);

                    $vin = $crawler
                        ->filter('body > section.product > div > div:nth-child(2) > div.col-12.col-lg-5.product__wrapper.product__box > table:nth-child(2) > tbody > tr:nth-child(2) > td.product__table--value')
                        ->text();

                    $status = $crawler
                        ->filter('body > section.product > div > div:nth-child(2) > div.col-12.col-lg-5.product__wrapper.product__box > table:nth-child(1) > tbody > tr:nth-child(2) > td.product__table--value')
                        ->text();

                    $currentRate = $crawler
                        ->filter('body > section.product > div > div.row.product__heading > div > span > span')
                        ->text();

                    $currentRate = preg_replace('/[^0-9]/', '', $currentRate);

                    $automobileId = app(AutomobileRepository::class)->insertGetId([
                        'model_id' => $modelId,
                        'year' => $year,
                        'mileage' => $mileage,
                        'location' => $location,
                        'damage_id' => $damage->id,
                        'current_rate' => $currentRate,
                        'transmission_id' => $transmission->id,
                        'additional_id' => $additionalId,
                        'VIN' => $vin,
                        'status' => $status,
                        'created_at' => Carbon::now()
                    ]);


                    //insert image
                    $image = $crawler
                        ->selectImage($model)->image();

                    $url = storage_path() . "/images/automobiles/$model.jpg";

                    file_put_contents($url, file_get_contents($image->getUri()));

                    app(ImageRepository::class)->insert([
                        'automobile_id' => $automobileId,
                        'image' => "/storage/images/automobiles/$model.jpg",
                        'created_at' => Carbon::now()
                    ]);

                    $this->info("added model - $modelName in brand - $brand->name, added image - $model.jpg ");
                });
        }

        $this->comment('parser successfully finished');
    }
}
