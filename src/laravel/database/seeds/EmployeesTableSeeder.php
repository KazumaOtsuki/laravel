<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
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
                'employee_code' => 'abc-00001',
                'employee_name' => '開発新一',
                'department_id' => 1,
                'gender_id' => 1,
            ],
            [
                'employee_code' => 'abc-00002',
                'employee_name' => '人事蘭',
                'department_id' => 4,
                'gender_id' => 2,
            ],
        ];

        $now = now();
        foreach ($params as $param) {
            $param['created_at'] = $now;
            $param['updated_at'] = $now;
            DB::table('employees')->insert($param);
        }
    }
}
