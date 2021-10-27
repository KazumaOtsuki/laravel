<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Employee extends Model
{
    //一覧情報を取得
    public function getListResource()
    {
        $employees = DB::table('employees')
            ->leftJoin('departments', 'employees.department_id', '=', 'departments.department_id')
            ->leftJoin('genders', 'employees.gender_id', '=', 'genders.gender_id')
            ->get();
        return $employees;
    }

    //特定の社員の情報を取得
    public function getSpecifiedResource($id)
    {
        $employee = DB::table('employees')
            ->leftJoin('departments', 'employees.department_id', '=', 'departments.department_id')
            ->leftJoin('genders', 'employees.gender_id', '=', 'genders.gender_id')
            ->where('employees.employee_id', $id)
            ->first();
        return $employee;
    }

}
