<?php

use Illuminate\Database\Seeder;

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sales = [
            [
                'Product Id'=>1,
                'Total_sales'=>200,
            ],
            [
                'Product Id'=>2,
                'Total_sales'=>150,
            ],
            [
                'Product Id'=>3,
                'Total_sales'=>100,
            ],
            [
                'Product Id'=>4,
                'Total_sales'=>50,
            ],
            ];
            foreach($sales as $sales){
                App\Sales::create($sales);
            }
    }
}
