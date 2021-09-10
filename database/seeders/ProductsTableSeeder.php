<?php

//use Illuminate\Support\Facades\Product;
//use Product;
//use Illuminate\Support\Facades\Hash\Product;
//use App\HasFactory\Product;
//use Illuminate\Support\Facades\Product;
namespace Database\Seeders;

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
        

       Product::create([
        'name' =>'MacBook Pro',
        'slug' => 'macbook-pro',
        'details' => '15 inch, 1TB SSD, 32GB RAM',
        'price' =>24999,
        'description'=>'It is a quality product with a lot of features and very affordable for use and quality',
        
        ]);

         Product::create([
            'name' =>'Laptop 2',
            'slug' => 'Laptop 2',
            'details' => '15 inch, 1TB SSD, 16GB RAM',
            'price' =>24999,
            'description'=>'It is a quality product with a lot of features and very affordable for use and quality',
            
            ]);

        Product::create([
                'name' =>'Laptop 3',
                'slug' => 'Laptop 3',
                'details' => '15 inch, 1TB SSD, 32GB RAM',
                'price' =>24999,
                'description'=>'It is a quality product with a lot of features and very affordable for use and quality',
                
                ]);

        Product::create([
                    'name' =>'laptop 4',
                    'slug' => 'laptop 4',
                    'details' => '15 inch, 1TB SSD, 32GB RAM',
                    'price' =>24999,
                    'description'=>'It is a quality product with a lot of features and very affordable for use and quality',
                    ]);

         Product::create([
                        'name' =>'laptop 5',
                        'slug' => 'laptop 5',
                        'details' => '15 inch, 1TB SSD, 32GB RAM',
                        'price' =>24999,
                        'description'=>'It is a quality product with a lot of features and very affordable for use and quality',
                        
                        ]);
         Product::create([
                            'name' =>'laptop 6',
                            'slug' => 'laptop 6',
                            'details' => '15 inch, 1TB SSD, 32GB RAM',
                            'price' =>24999,
                            'description'=>'It is a quality product with a lot of features and very affordable for use and quality',
                            
                            ]);
                           Product::create([
                                'name' =>'laptop 7',
                                'slug' => 'laptop 7',
                                'details' => '15 inch, 1TB SSD, 32GB RAM',
                                'price' =>24999,
                                'description'=>'It is a quality product with a lot of features and very affordable for use and quality',
                               
                                ]);
                                Product::create([
                                    'name' =>'laptop 8',
                                    'slug' => 'laptop 8',
                                    'details' => '15 inch, 1TB SSD, 32GB RAM',
                                    'price' =>24999,
                                    'description'=>'It is a quality product with a lot of features and very affordable for use and quality',
                                  
                                    ]);
                                    Product::create([
                                        'name' =>'laptop 9',
                                        'slug' => 'laptop 9',
                                        'details' => '15 inch, 1TB SSD, 32GB RAM',
                                        'price' =>24999,
                                        'description'=>'It is a quality product with a lot of features and very affordable for use and quality',
                                        
                                        ]);
                                        Product::create([
                                            'name' =>'laptop 10',
                                            'slug' => 'laptop 10',
                                            'details' => '15 inch, 1TB SSD, 32GB RAM',
                                            'price' =>24999,
                                            'description'=>'It is a quality product with a lot of features and very affordable for use and quality',
                                            
                                            ]);


    }
}
