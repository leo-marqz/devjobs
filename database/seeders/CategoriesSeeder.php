<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'category'=> 'React Native Developer',
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
        ]);
        DB::table('categories')->insert([
            'category'=> 'Sr UX Designer',
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
        ]);
        DB::table('categories')->insert([
            'category'=> 'Jr UX Designer',
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
        ]);
        DB::table('categories')->insert([
            'category'=> 'React Js Engineer',
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
        ]);
        DB::table('categories')->insert([
            'category'=> 'QA Engineer',
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
        ]);
        DB::table('categories')->insert([
            'category'=> 'IT Product Manager',
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
        ]);
        DB::table('categories')->insert([
            'category'=> 'Java Developer',
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
        ]);
        // DB::table('categories')->insert([
        //     'category'=> '',
        //     'created_at'=> date('Y-m-d H:i:s'),
        //     'updated_at'=> date('Y-m-d H:i:s'),
        // ]);
        // DB::table('categories')->insert([
        //     'category'=> 'Backend Developer',
        //     'created_at'=> date('Y-m-d H:i:s'),
        //     'updated_at'=> date('Y-m-d H:i:s'),
        // ]);
        // DB::table('categories')->insert([
        //     'category'=> 'Front-End Developer',
        //     'created_at'=> date('Y-m-d H:i:s'),
        //     'updated_at'=> date('Y-m-d H:i:s'),
        // ]);
        // DB::table('categories')->insert([
        //     'category'=> 'Mobile Developer',
        //     'created_at'=> date('Y-m-d H:i:s'),
        //     'updated_at'=> date('Y-m-d H:i:s'),
        // ]);
        // DB::table('categories')->insert([
        //     'category'=> 'Software Engineer',
        //     'created_at'=> date('Y-m-d H:i:s'),
        //     'updated_at'=> date('Y-m-d H:i:s'),
        // ]);
    }
}
