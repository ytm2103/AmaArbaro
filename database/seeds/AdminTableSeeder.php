<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon; // 追加
use Illuminate\Support\Facades\DB; // 追加

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
            [
                'id' => '1',
                'name'  => 'いけだあつし',
                'email'  => 'ikeda@ikeda.com',
                'password'  => 'ikedaikedaikeda',
            ],
        ];

        foreach ($admin as $value) {

            DB::table('admin')->insert([
                'id' => $value['id'],
                'name' => $value['name'],
                'email' => $value['email'],
                'password' => $value['password'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
