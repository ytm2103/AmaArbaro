<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon; // 追加
use Illuminate\Support\Facades\DB; // 追加
use Faker\Provider\DateTime;

class DonationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        $donations = [
            [
                'id' => '1',
                'amount'  => '100',
                'user_id'  => '1',
                'project_id'  => '1',
            ],
            [
                'id' => '2',
                'amount'  => '10',
                'user_id'  => '2',
                'project_id'  => '1',
            ],
            [
                'id' => '3',
                'amount'  => '50',
                'user_id'  => '1',
                'project_id'  => '1',
            ],
            [
                'id' => '4',
                'amount'  => '1',
                'user_id'  => '2',
                'project_id'  => '1',
            ],
            [
                'id' => '5',
                'amount'  => '10',
                'user_id'  => '1',
                'project_id'  => '1',
            ],
            [
                'id' => '6',
                'amount'  => '5',
                'user_id'  => '2',
                'project_id'  => '1',
            ],
            [
                'id' => '7',
                'amount'  => '100',
                'user_id'  => '1',
                'project_id'  => '1',
            ],
            [
                'id' => '8',
                'amount'  => '50',
                'user_id'  => '2',
                'project_id'  => '1',
            ],
            [
                'id' => '9',
                'amount'  => '5',
                'user_id'  => '1',
                'project_id'  => '1',
            ],
            [
                'id' => '10',
                'amount'  => '10',
                'user_id'  => '2',
                'project_id'  => '1',
            ],
        ];

        foreach ($donations as $donation) {

            DB::table('donations')->insert([
                'id' => $donation['id'],
                'amount' => $donation['amount'],
                'user_id' => $donation['user_id'],
                'project_id' => $donation['project_id'],
                'created_at' => DateTime::dateTimeThisDecade(),
            ]);
        }
    }
}
