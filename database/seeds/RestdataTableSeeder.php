<?php

use Illuminate\Database\Seeder;
use App\Restdata;

class RestdataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'message' => 'Google Japan',
            'url' => 'https://www.google.co.jp',
        ];
        $restdata = new Restdata();
        $restdata->fill($param)->save();
        $param = [
            'message' => 'うふふ Japan',
            'url' => 'https://www.uhuhu.co.jp',
        ];
        $restdata = new Restdata();
        $restdata->fill($param)->save();
        $param = [
            'message' => 'sososo Japan',
            'url' => 'https://www.sosososo.co.jp',
        ];
        $restdata = new Restdata();
        $restdata->fill($param)->save();
    }
}
