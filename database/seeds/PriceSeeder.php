<?php

use App\Price;
use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suite = new Price();
        $suite->id = '1';
        $suite->price = '100000';
        $suite->save();
        $double = new Price();
        $double->id = '2';
        $double->price = '200000';
        $double->save();
    }
}
