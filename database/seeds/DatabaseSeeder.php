<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(DonationsTableSeeder::class);
        $this->call(AdminTableSeeder::class);
        $this->call(NewsTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(AreasTableSeeder::class);
        $this->call(TargetsTableSeeder::class);
        $this->call(MailformTableSeeder::class);
    }
}
