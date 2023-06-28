<?php

namespace Database\Seeders;

use App\Models\Maintainer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaintainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Maintainer::factory(10)->create();
    }
}
