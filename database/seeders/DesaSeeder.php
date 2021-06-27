<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\desa;

class DesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        desa::factory()
            ->count(10)
            ->create();
    }
}
