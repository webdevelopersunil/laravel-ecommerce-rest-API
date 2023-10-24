<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        \App\Models\Product::create([
            'title'         => 'Product 1',
            'meta_title'    => 'meta title product 1',
            'slug'          => 'slug_product_1',
            'summary'       => 'summary of product 1',
            'type'          => 'elementary',
            'sku'           => 'JHGJDH3234J8h5ydde4WJHY',
            'price'         => 1200,
            'discount'      => 12,
            'user_id'       => 1,
        ]);
        \App\Models\Product::create([
            'title'         => 'Product 2',
            'meta_title'    => 'meta title product 2',
            'slug'          => 'slug_product_2',
            'summary'       => 'summary of product 2',
            'type'          => 'elementary',
            'sku'           => 'JHGJDH323wewewe4J8h5ydde4WJHY',
            'price'         => 1200,
            'discount'      => 12,
            'user_id'       => 1,
        ]);
        \App\Models\Product::create([
            'title'         => 'Product 3',
            'meta_title'    => 'meta title product 3',
            'slug'          => 'slug_product_3',
            'summary'       => 'summary of product 3',
            'type'          => 'elementary',
            'sku'           => 'JHGJDH3234J8h5ydde4WqeqweJHY',
            'price'         => 1200,
            'discount'      => 12,
            'user_id'       => 1,
        ]);
        \App\Models\Product::create([
            'title'         => 'Product 4',
            'meta_title'    => 'meta title product 4',
            'slug'          => 'slug_product_4',
            'summary'       => 'summary of product 4',
            'type'          => 'elementary',
            'sku'           => 'JHGJDH3234J8h5ydde4WsdsretwerJHY',
            'price'         => 1200,
            'discount'      => 12,
            'user_id'       => 1,
        ]);
        \App\Models\Product::create([
            'title'         => 'Product 5',
            'meta_title'    => 'meta title product 5',
            'slug'          => 'slug_product_5',
            'summary'       => 'summary of product 5',
            'type'          => 'elementary',
            'sku'           => 'JHGJDH3234J8h5ydde4WsaddasdJHY',
            'price'         => 1200,
            'discount'      => 12,
            'user_id'       => 1,
        ]);
        \App\Models\Product::create([
            'title'         => 'Product 6',
            'meta_title'    => 'meta title product 6',
            'slug'          => 'slug_product_6',
            'summary'       => 'summary of product 6',
            'type'          => 'elementary',
            'sku'           => 'JHGJDH3234Jeqwe456tr8h5ydde4WJHY',
            'price'         => 1200,
            'discount'      => 12,
            'user_id'       => 1,
        ]);
        \App\Models\Product::create([
            'title'         => 'Product 7',
            'meta_title'    => 'meta title product 7',
            'slug'          => 'slug_product_7',
            'summary'       => 'summary of product 7',
            'type'          => 'elementary',
            'sku'           => 'JHGJDH3234J8h5ydde4Wsdsad345JHY',
            'price'         => 1200,
            'discount'      => 12,
            'user_id'       => 1,
        ]);
        \App\Models\Product::create([
            'title'         => 'Product 8',
            'meta_title'    => 'meta title product 8',
            'slug'          => 'slug_product_8',
            'summary'       => 'summary of product 9',
            'type'          => 'elementary',
            'sku'           => 'JHGJDH3234J8h5ydde4WsdsadJHY',
            'price'         => 1200,
            'discount'      => 12,
            'user_id'       => 1,
        ]);
        \App\Models\Product::create([
            'title'         => 'Product 9',
            'meta_title'    => 'meta title product 9',
            'slug'          => 'slug_product_9',
            'summary'       => 'summary of product 9',
            'type'          => 'elementary',
            'sku'           => 'JHGJDH3234J8h5ydde4Wsads42sdsadJHY',
            'price'         => 1200,
            'discount'      => 12,
            'user_id'       => 1,
        ]);
        \App\Models\Product::create([
            'title'         => 'Product 10',
            'meta_title'    => 'meta title product 10',
            'slug'          => 'slug_product_10',
            'summary'       => 'summary of product 10',
            'type'          => 'elementary',
            'sku'           => 'JHGJDH3234J8h5ydde4WJasdasd3435465HY',
            'price'         => 1200,
            'discount'      => 12,
            'user_id'       => 1,
        ]);
    }
}
