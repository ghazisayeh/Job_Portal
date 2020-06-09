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
        $this->call(UsersSeeder::class);
        $this->call(EmployersSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(CompaniesSeeder::class);
        $this->call(JobsSeeder::class);
        $this->call(AppliesSeeder::class);
    }
}
