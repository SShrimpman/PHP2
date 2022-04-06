<?php

use Illuminate\Database\Seeder;
use App\Address;

class AdressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Address::class,150)->create();
    }
}
