<?php

use Illuminate\Database\Seeder;

class SellersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sellers = [
            [
                'Name'=>'Sweet',
                'Email'=>'sweet@gmail.com',
                'Product_type'=>'Drinks',
                'Total_sales'=>250,

            ],
            [
                'Name'=>'Arvin',
                'Email'=>'arvin@gmail.com',
                'Product_type'=>'JunkFoods',
                'Total_sales'=>300,

            ],
            [
                'Name'=>'Hector',
                'Email'=>'hector@gmail.com',
                'Product_type'=>'Drinks',
                'Total_sales'=>150,

            ],
            [
                'Name'=>'Ron',
                'Email'=>'ron@gmail.com',
                'Product_type'=>'Junk food',
                'Total_sales'=>200,

            ],
            ];
            foreach($sellers as $sellers){
                \App\Sellers::create($sellers);
            }
    }
}
