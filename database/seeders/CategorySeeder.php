<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name'=>'Hành Động',],
            ['name'=>'Viễn Tưởng',],
            ['name'=>'Hài Hước',],
            ['name'=>'Võ Thuật',],
            ['name'=>'Hoạt Hình',],
            ['name'=>'Kinh Dị',],
       ]);
    }

}
