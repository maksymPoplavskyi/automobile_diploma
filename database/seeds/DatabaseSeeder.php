<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ArticleTableSeeder::class);

        $this->call(NewsTableSeeder::class);

        $this->call(ReviewTableSeeder::class);

        $this->call(HelperTableSeeder::class);

        $this->call(BrandTableSeeder::class);

        $this->call(DamageTableSeeder::class);

        $this->call(TransmissionTableSeeder::class);

        $this->call(LocationTableSeeder::class);

        $this->call(FuelTableSeeder::class);

        $this->call(DriverUnitTableSeeder::class);

        $this->call(AdditionalTableSeeder::class);

        $this->call(ModelTableSeeder::class);

        $this->call(AutomobileTableSeeder::class);

        $this->call(ImageTableSeeder::class);
    }
}
