<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class opinionformTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'family-name' => '山田',
            'given-name' => '太郎',
            'gender' => '1',
            'email' => 'test@example.co.jp',
            'postcode' => '123-4567',
            'address' => '大阪府大阪市',
            'building_name' => '大阪ビル',
            'opinion' => 'ご意見',
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'family-name' => '山本',
            'given-name' => '花子',
            'gender' => '2',
            'email' => 'memo@example.co.jp',
            'postcode' => '123-4568',
            'address' => '東京都大田区',
            'building_name' => '東京ビル',
            'opinion' => 'メモ',
        ];
    DB::table('contacts')->insert($param);
    }
}
