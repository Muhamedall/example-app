<?php

namespace Database\Seeders;
 //use  Illuminate\Support\Facades\DB;
use App\Models\Avions;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//use Illuminate\Support\Str;
class Avionssedders extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    /*ila bghina n3ayto l sedder automatiq bla mandiro "php artisan db:seed --class=Avionssedders" 
    kandiro :
              $this->call(
                  Avionssedders::class,
               );*/
      
        /*insertion bla factorial :
              DB::table('avions')->insert([
            'libelle'=> Str::random(20),
            'capacite'=>3254

         ]);
        */
        //insertion by factories :
        Avions::factory(20)->create();
        
    }
}
