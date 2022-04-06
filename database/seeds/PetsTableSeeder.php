<?php

use Illuminate\Database\Seeder;
use App\Pet;

class PetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Pet::class,400)->create();
        for ($i=1;$i<=250;$i++) {
            \DB::table('pets')->insert([
                'name' => 'Pet'.$i,
                'color_name'=> 'Vermelho',
                'date_of_birth' => '1998-03-17',
                'people_id'=>rand(1,150)
            ]);
        }
    }
}
