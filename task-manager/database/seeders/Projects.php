<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Projects extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert([
            [
                'name' => 'Starter',
            ],
            [
                'name' => 'Finisher',
            ],
            [
                'name' => 'Major',
            ],
            [
                'name' => 'Minor',
            ],
            [
                'name' => 'Flexible',
            ],
            [
                'name' => 'Working',
            ],
        ]);
    }
}
