<?php

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('brands')->insert(['name' => 'ACNE']);
        DB::table('brands')->insert(['name' => 'Guac']);
        DB::table('brands')->insert(['name' => 'Quack']);
        DB::table('brands')->insert(['name' => 'Java']);
    }
}
