<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
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
                'department_name' => '開発部',
            ],
            [
                'department_name' => '営業部',
            ],
            [
                'department_name' => '総務部',
            ],
            [
                'department_name' => '人事部',
            ],
        ];

        $now = now();
        foreach ($params as $param) {
            $param['created_at'] = $now;
            $param['updated_at'] = $now;
            DB::table('departments')->insert($param);
        }
    }
}
