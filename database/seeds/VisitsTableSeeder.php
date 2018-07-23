<?php

use Illuminate\Database\Seeder;

class VisitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('visits')->insert([
        	'country_name' => 'Ukraina',
      		'region_name' => 'Donetsk',
      		'latitude_longitude' => "23.456,12.546",
        ]);//
    }//
}

