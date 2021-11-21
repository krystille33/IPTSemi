<?php

use Illuminate\Database\Seeder;


class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'Product_type'=>'Food',
                'Product_name'=>'Beefloaf',
                'Product_stock'=>100,
                'Product_description'=>'Spicy',
                'Price'=>25,
            ],
            [
                'Product_type'=>'Drinks',
                'Product_name'=>'C2',
                'Product_stock'=>100,
                'Product_description'=>'Juice',
                'Price'=>15,
            ],
            [
                'Product_type'=>'Softdrinks',
                'Product_name'=>'Coca cola',
                'Product_stock'=>100,
                'Product_description'=>'Coke',
                'Price'=>15,
            ],
            [
                'Product_type'=>'Junk food',
                'Product_name'=>'Chippy',
                'Product_stock'=>100,
                'Product_description'=>'Chips',
                'Price'=>15,
            ],
           
            ];
            foreach($products as $products){
                App\Products::create($products);
            }
    }
}
