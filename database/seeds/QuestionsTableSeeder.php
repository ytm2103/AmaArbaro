<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon; // 追加
use Illuminate\Support\Facades\DB; // 追加

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [
            [
                'id' => '1',
                'name'  => 'いけだあつし',
                'email'  => 'ikeda@ikeda.com',
                'message'  => '本文',
            ],
        ];

        foreach ($questions as $question) {

            DB::table('questions')->insert([
                'id' => $question['id'],
                'name' => $question['name'],
                'email' => $question['email'],
                'message' => $question['message'],
                'created_at' => Carbon::now(),
            ]);
        }
    }
}
