<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '土方歳三',
            'email' => 'oninohukutyou-tosi@gmail.com',
            'password' => 'sinsengumiTosi',
            'created_at'=>'2024-05-01',
            'updated_at'=>'2024-06-25'
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => '沖田総司',
            'email' => 'sakuranogotoku-tiru@gmail.com',
            'password' => 'sinsengumiSouzi',
            'created_at'=>'2024-06-01',
            'updated_at'=>'2024-07-25'
        ];
        DB::table('users')->insert($param);
    }
}
