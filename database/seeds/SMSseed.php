<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SMSseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('smsChat')->insert([
        	'user_send' => 'Trikaka',
            'destination' => 'VladO',
            'content' => str_random(20),
            'date_send' => date('j-m-Y в G:i', time())
        ]);
        DB::table('smsChat')->insert([
        	'user_send' => 'VladO',
            'destination' => 'Trikaka',
            'content' => str_random(20),
            'date_send' => date('j-m-Y в G:i', time())
        ]);//
    }  
}
