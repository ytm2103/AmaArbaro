<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon; // 追加
use Illuminate\Support\Facades\DB; // 追加

class MailformTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mailform = [
            [
                'id' => '1',
                'name'  => 'いけだあつし',
                'email'  => 'ikeda@ikeda.com',
                'message'  => '本文',
            ],
        ];

        foreach ($mailform as $value) {

            DB::table('mailform')->insert([
                'id' => $value['id'],
                'name' => $value['name'],
                'email' => $value['email'],
                'message' => $value['message'],
                'created_at' => Carbon::now(),
            ]);
        }
    }
}
