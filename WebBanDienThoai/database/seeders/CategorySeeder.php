<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'name_category' => 'Điện thoại cảm ứng',
        ]);

        DB::table('categories')->insert([
            'name_category' => 'Điện thoại bấm nút',
        ]);   

        DB::table('categories')->insert([
            'name_category' => 'Điện thoại gập',
        ]);   
    }
}
