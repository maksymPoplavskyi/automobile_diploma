<?php

use App\Models\Helper;
use Illuminate\Database\Seeder;

class HelperTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Helper::class, 1)->create();
    }
}
