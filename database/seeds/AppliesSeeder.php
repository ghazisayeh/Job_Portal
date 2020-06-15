<?php

use App\Apply;
use Illuminate\Database\Seeder;

class AppliesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Apply::class, 20)->create();

    }
}
