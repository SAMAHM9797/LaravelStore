<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('categories')->insert(['name' => 'Shirts']);
       DB::table('categories')->insert(['name' => 'Trousers']);
       DB::table('categories')->insert(['name' => 'Jackets']);
       DB::table('categories')->insert(['name' => 'Shoes']);
    }
}
