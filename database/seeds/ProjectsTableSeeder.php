<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon; // 追加
use Illuminate\Support\Facades\DB; // 追加

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = [
            [
                'id' => '1',
                'area_id'  => '1',
                'target_id'  => '1',
            ],
            [
                'id' => '2',
                'area_id'  => '2',
                'target_id'  => '1',
            ],
            [
                'id' => '3',
                'area_id'  => '1',
                'target_id'  => '2',
            ],
        ];

        foreach ($projects as $project) {

            DB::table('projects')->insert([
                'id' => $project['id'],
                'area_id' => $project['area_id'],
                'target_id' => $project['target_id'],
            ]);
        }
    }
}
