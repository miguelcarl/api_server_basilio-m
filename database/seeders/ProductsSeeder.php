<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'title' => 'Converse Chuck Taylor 70',
            'description' => '100% Original Product',
            'currency' => 'PHP',
            'price' => 3899.00,
            'brand' => 'Converse',
            'category' => 'Shoes',
            'image' => 'https://dynamic.zacdn.com/11ktW7RYraT18RTSqwQ3KGGf5Rc=/fit-in/346x500/filters:quality(95):fill(ffffff)/https://static-ph.zacdn.com/p/converse-8700-1073251-1.jpg',
        ]);

        DB::table('products')->insert([
            'title' => 'Samsung Galaxy S22 Ultra',
            'description' => 'A Note-worthy new look',
            'currency' => 'PHP',
            'price' => 72990.00,
            'brand' => 'Samsung',
            'category' => 'Electronics',
            'image' => 'https://d1rlzxa98cyc61.cloudfront.net/catalog/product/cache/1801c418208f9607a371e61f8d9184d9/d/_/d_s22ultrabrgndy256_2020_13.jpg'
        ]);

        DB::table('products')->insert([
            'title' => 'Carhartt Relaxed Fit Heavyweight Short-Sleeve Pocket T-shirt',
            'description' => '"Honest value for an honest dollar"',
            'currency' => 'PHP',
            'price' => 1500.00,
            'brand' => 'Carhartt',
            'category' => 'Fashion',
            'image' => 'https://logoshirtsdirect.com/wp-content/uploads/2016/08/9550-Port-1-CTK87PortModelFront-1200W-562x843.jpg'
        ]);
        }
    }
