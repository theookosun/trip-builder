<?php

use Illuminate\Database\Seeder;

class FlightsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Airport::class, 20)->create();
        factory(App\Flight::class, 10)->create()->each(function($flight) {
            factory(App\Customer::class, 100)->make()->each(function($customer) use($flight) {
                $flight->passengers()->save($customer);
            });
        });
}
}
