<?php

use Illuminate\Database\Seeder;

class GendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = 
        [
            [
                'gender_name' => '男性',
            ],
            [
                'gender_name' => '女性',
            ],
        ];

        $now = now();
        foreach ($params as $param) {
            $param['created_at'] = $now;
            $param['updated_at'] = $now;
            DB::table('genders')->insert($param);
        }
    }
}
