<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SalariesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('salaries')->insert([
        //     'salary'=>'$300 - $499',
        //     'created_at'=>date('Y-m-d H:i:s'),
        //     'updated_at'=>date('Y-m-d H:i:s')
        // ]);
        // DB::table('salaries')->insert([
        //     'salary'=>'$475 - $600',
        //     'created_at'=>date('Y-m-d H:i:s'),
        //     'updated_at'=>date('Y-m-d H:i:s')
        // ]);
        // DB::table('salaries')->insert([
        //     'salary'=>'$500 - $750',
        //     'created_at'=>date('Y-m-d H:i:s'),
        //     'updated_at'=>date('Y-m-d H:i:s')
        // ]);
        // DB::table('salaries')->insert([
        //     'salary'=>'$700 - $900',
        //     'created_at'=>date('Y-m-d H:i:s'),
        //     'updated_at'=>date('Y-m-d H:i:s')
        // ]);
        // DB::table('salaries')->insert([
        //     'salary'=>'$1000 - $1100',
        //     'created_at'=>date('Y-m-d H:i:s'),
        //     'updated_at'=>date('Y-m-d H:i:s')
        // ]);
        DB::table('salaries')->insert([
            'salary'=>'$1500 - $2000',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('salaries')->insert([
            'salary'=>'$2000 - $3500',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('salaries')->insert([
            'salary'=>'$5000 - $5100',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('salaries')->insert([
            'salary'=>'$30000 - $31000',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('salaries')->insert([
            'salary'=>'$100000 - $105000',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
    }
}
