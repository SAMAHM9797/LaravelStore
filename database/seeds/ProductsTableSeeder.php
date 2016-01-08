<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(['name' => 'black edition',           'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna','price' => 35,'categories_id' => 1,'brand_id' => 1,'imgurl' => 'images/shop/shirts/1.jpg',]);
        DB::table('products')->insert(['name' => 'T-shirt blue edition',    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna','price' => 64,'categories_id' => 1,'brand_id' => 2,'imgurl' => 'images/shop/shirts/2.jpg',]);
        DB::table('products')->insert(['name' => 'white shirt ',            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna','price' => 13,'categories_id' => 2,'brand_id' => 3,'imgurl' => 'images/shop/shirts/3.jpg',]);
        DB::table('products')->insert(['name' => 'green tie ',              'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna','price' => 23,'categories_id' => 1,'brand_id' => 3,'imgurl' => 'images/shop/shirts/4.jpg',]);
        DB::table('products')->insert(['name' => 'blue jumper ',            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna','price' => 53,'categories_id' => 1,'brand_id' => 4,'imgurl' => 'images/shop/shirts/5.jpg',]);
        DB::table('products')->insert(['name' => 'red ',                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna','price' => 73,'categories_id' => 1,'brand_id' => 4,'imgurl' => 'images/shop/shirts/6.jpg',]);
        DB::table('products')->insert(['name' => 'blue ',                   'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna','price' => 33,'categories_id' => 1,'brand_id' => 4,'imgurl' => 'images/shop/shirts/7.jpg',]);
        DB::table('products')->insert(['name' => 'black ',                  'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna','price' => 73,'categories_id' => 1,'brand_id' => 3,'imgurl' => 'images/shop/shirts/8.jpg',]);
        DB::table('products')->insert(['name' => 'green ',                  'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna','price' => 73,'categories_id' => 1,'brand_id' => 3,'imgurl' => 'images/shop/shirts/9.jpg',]);
        DB::table('products')->insert(['name' => 'pink ',                   'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna','price' => 73,'categories_id' => 1,'brand_id' => 1,'imgurl' => 'images/shop/shirts/10.jpg',]);
        DB::table('products')->insert(['name' => 'love heart ',             'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna','price' => 73,'categories_id' => 1,'brand_id' => 1,'imgurl' => 'images/shop/shirts/11.jpg',]);
        DB::table('products')->insert(['name' => 'green ',                  'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna','price' => 73,'categories_id' => 1,'brand_id' => 1,'imgurl' => 'images/shop/shirts/12.jpg',]);
        DB::table('products')->insert(['name' => 'orange ',                 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna','price' => 73,'categories_id' => 1,'brand_id' => 2,'imgurl' => 'images/shop/shirts/13.jpg',]);
        DB::table('products')->insert(['name' => 'yellow ',                 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna','price' => 73,'categories_id' => 1,'brand_id' => 2,'imgurl' => 'images/shop/shirts/14.jpg',]);
        DB::table('products')->insert(['name' => 'purple ',                 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna','price' => 73,'categories_id' => 1,'brand_id' => 2,'imgurl' => 'images/shop/shirts/15.jpg',]);
        DB::table('products')->insert(['name' => 'maroon ',                 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna','price' => 73,'categories_id' => 1,'brand_id' => 3,'imgurl' => 'images/shop/shirts/16.jpg',]);
        DB::table('products')->insert(['name' => 'cream ',                  'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna','price' => 73,'categories_id' => 1,'brand_id' => 1,'imgurl' => 'images/shop/shirts/17.jpg',]);
        DB::table('products')->insert(['name' => 'brown ',                  'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna','price' => 73,'categories_id' => 1,'brand_id' => 2,'imgurl' => 'images/shop/shirts/18.jpg',]);
        DB::table('products')->insert(['name' => 'Spink ',                  'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna','price' => 73,'categories_id' => 1,'brand_id' => 3,'imgurl' => 'images/shop/shirts/19.jpg',]);

        
    }
}
