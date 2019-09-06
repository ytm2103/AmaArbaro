<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon; // 追加
use Illuminate\Support\Facades\DB; // 追加

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'id' => '1',
                'name'  => 'いけだあつし',
                'email'  => 'ikeda@ikeda.com',
                'password'  => Hash::make('ikeda'),
            ],
            [
                'id' => '2',
                'name'  => 'NexSeed',
                'email'  => 'nex@seed.com',
                'password'  => Hash::make('nexseed'),
            ],
        ];

        foreach ($users as $user) {

            DB::table('users')->insert([
                'id' => $user['id'],
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => $user['password'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
