<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $param = [
            'name' => 'taro',
            'mail' => 'taro@yamada.jp',
            'age' => 35
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'ko',
            'mail' => 'c@gamil.com',
            'age' => 43
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'suko',
            'mail' => 'suko@suko.jp',
            'age' => 12
        ];
        DB::table('people')->insert($param);
    }
}
