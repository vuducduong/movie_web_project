<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            ['name'=>'Mỹ',],
            ['name'=>'Hàn Quốc',],
            ['name'=>'Nhật Bản',],
            ['name'=>'Thái Lan',],
            ['name'=>'Việt Nam',],
            ['name'=>'Trung Quốc',],
            ['name'=>'Quốc gia khác',],
        ]);
    }
}
