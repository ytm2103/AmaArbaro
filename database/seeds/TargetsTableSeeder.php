<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon; // 追加
use Illuminate\Support\Facades\DB; // 追加

class TargetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $targets = [
            [
                'id' => '1',
                'name'  => 'reforest',
            ],
            [
                'id' => '2',
                'name'  => 'school',
            ],
            [
                'id' => '3',
                'name'  => 'medication',
            ],
        ];

        foreach ($targets as $target) {

            DB::table('targets')->insert([
                'id' => $target['id'],
                'name' => $target['name'],
            ]);
        }
    }
}
