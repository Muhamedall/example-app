<?php

namespace Database\Seeders;
use App\Models\Voles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VoleSeddr extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Voles::factory(10)->create();
    }
}
