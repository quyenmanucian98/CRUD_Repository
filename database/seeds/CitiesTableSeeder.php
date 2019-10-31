<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $city = new \App\City();
        $city->name = "Ha Noi";
        $city->numbercustomer = '10';
        $city->save();
        $city = new \App\City();
        $city->name = "Hai Duong";
        $city->numbercustomer = '10';
        $city->save();
        $city = new \App\City();
        $city->name = "Ha Nam";
        $city->numbercustomer = '10';
        $city->save();
        $city = new \App\City();
        $city->name = "Ha Dong";
        $city->numbercustomer = '10';
        $city->save();
    }
}
