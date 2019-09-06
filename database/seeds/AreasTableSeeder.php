<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon; // 追加
use Illuminate\Support\Facades\DB; // 追加

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $areas = [
            [
                'id' => '1',
                'name'  => 'philippines',
            ],
            [
                'id' => '2',
                'name'  => 'india',
            ],
            [
                'id' => '3',
                'name'  => 'bangladesh',
            ],
        ];

        foreach ($areas as $area) {

            DB::table('areas')->insert([
                'id' => $area['id'],
                'name' => $area['name'],
            ]);
        }
    }
}
