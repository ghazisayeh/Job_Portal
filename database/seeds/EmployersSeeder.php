<?php

use Illuminate\Database\Seeder;
use App\Employer;

class EmployersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Employer::class, 10)->create();
    }
}
