<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon; // 追加
use Illuminate\Support\Facades\DB; // 追加

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $news = [
            [
                'id' => '1',
                'url'  => 'https://google.com',
                'title'  => 'ニュースタイトル',
                'body'  => 'ニュース本文',
                'image_path'  => '/',
                'area_id'  => '1',
                'admin_id'  => '1',
            ],
        ];

        foreach ($news as $value) {

            DB::table('news')->insert([
                'id' => $value['id'],
                'url' => $value['url'],
                'title' => $value['title'],
                'body' => $value['body'],
                'image_path' => $value['image_path'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'area_id' => $value['area_id'],
                'admin_id' => $value['admin_id'],
            ]);
        }
    }
}
