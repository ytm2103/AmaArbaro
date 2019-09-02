<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon; // 追加
use Illuminate\Support\Facades\DB; // 追加

class DonationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = DB::table('users')->first(); //追加

        $donations = [
            [
                'amount' => '10',
            ],
            [
                'amount' => '1',
            ],
            [
                'amount' => '100',
            ],
        ];

        foreach ($donations as $donation) {

            DB::table('donations')->insert([
                'amount' => $donation['amount'],
                'user_id' => $user->id, //追加
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
