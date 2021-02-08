<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                "name"=>"Oppo mobile",
                "price"=>"400",
                "category"=>"mobile",
                "description"=>"Asmartphone with 8gb ram",
                "gallery"=>"https://i.gadgets360cdn.com/products/large/oppo-f17-pro-574x800-1599056571.jpg?downsize=*:420&output-quality=80"
            ],
            [
                "name"=>"LG mobile",
                "price"=>"300",
                "category"=>"mobile",
                "description"=>"Asmartphone with 6gb ram",
                "gallery"=>"https://www.lg.com/us/images/MC/features/velvet-260x260.jpg"
            ],
            [
                "name"=>"Iphone",
                "price"=>"950",
                "category"=>"mobile",
                "description"=>"Asmartphone with 8gb ram 256gb",
                "gallery"=>"https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone-12-pro-max-silver-hero?wid=940&hei=1112&fmt=png-alpha&qlt=80&.v=1604021658000"
            ],
        ]);
    }
}
