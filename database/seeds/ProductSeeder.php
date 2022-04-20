<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();

        DB::table('products')->insert([
            [
              'name' => 'Power weeder',
              'type' => 1,
            ],
            [
                'name' => 'Power Tiller',
                'type' => 1,
            ],
            [
                'name' => 'Power Reaper',
                'type' => 1,
            ],
            [
                'name' => 'Brush cutter',
                'type' => 1,
            ],
            [
                'name' => 'Chainsaw',
                'type' => 1,
            ],
            [
                'name' => 'Earth Auger',
                'type' => 1,
            ],
            [
                'name' => 'Lawn Mower',
                'type' => 1,
            ],
            [
                'name' => 'Water pump',
                'type' => 1,
            ],
            [
                'name' => 'Generators',
                'type' => 1,
            ],
            [
                'name' => 'Hedge Trimmer',
                'type' => 1,
            ],
            [
                'name' => 'Chaff Cutter',
                'type' => 1,
            ],
            [
                'name' => 'Milking Machine',
                'type' => 0,
            ],
            [
                'name' => 'Sprayer',
                'type' => 0,
            ],
            [
                'name' => 'Arecanut dehusker',
                'type' => 1,
            ],
            [
                'name' => 'Coconut Dehusker',
                'type' => 0,
            ],
            [
                'name' => 'Coconut climber',
                'type' => 0,
            ],
            [
                'name' => 'Hose Pipe',
                'type' => 0,
            ],
            [
                'name' => 'Drip Pipe',
                'type' => 0,
            ],
            [
                'name' => 'Tarpaulin',
                'type' => 0,
            ],
            [
                'name' => 'Pond Liner',
                'type' => 0,
            ],
            [
                'name' => 'Shade nets',
                'type' => 0,
            ],
            [
                'name' => 'Mulching Film',
                'type' => 0,
            ],
            [
                'name' => 'Grow Bag',
                'type' => 0,
            ],
            [
                'name' => 'Vermi bed',
                'type' => 0,
            ]

          ]);
          
    }
}
