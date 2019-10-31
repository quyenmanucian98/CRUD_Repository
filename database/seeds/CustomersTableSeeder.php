<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = new \App\Customer();
        $customer->name = 'big boss';
        $customer->city_id = '4';
        $customer->save();
        $customer = new \App\Customer();
        $customer->name = 'big boss';
        $customer->city_id = '3';
        $customer->save();
        $customer = new \App\Customer();
        $customer->name = 'big boss';
        $customer->city_id = '1';
        $customer->save();
        $customer = new \App\Customer();
        $customer->name = 'big boss';
        $customer->city_id = '2';
        $customer->save();
    }
}
