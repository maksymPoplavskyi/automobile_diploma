<?php

use App\Models\Automobile;
use App\Models\Image;
use Illuminate\Database\Seeder;

class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $automobiles = Automobile::all();

        foreach (range(1, 10, 1) as $i) {
            $image = factory(Image::class, 1)->make()
                ->each(function ($foo) use ($automobiles, $i) {
                    $foo->automobile_id = $automobiles->where('id', $i)->first()->id;
                })->toArray();

            Image::insert($image);
        }
    }
}
