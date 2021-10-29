<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use App\Models\Error;

class Employee extends Model
{
    protected $employees;
    protected $error;
    
    public function __construct(){
        $this->employees = DB::table('employees');

        $this->error = new Error();
    }

    //一覧情報を取得
    public function getListResource()
    {
        try{
            $employees = $this->employees
                ->leftJoin('departments', 'employees.department_id', '=', 'departments.department_id')
                ->leftJoin('genders', 'employees.gender_id', '=', 'genders.gender_id')
                ->orderByRaw('employee_id')
                ->get();
            return $employees;
        } catch (\Exception $e) {
            $this->error->redirect500($e);
        }
    }

    //特定の社員の情報を取得
    public function getSpecifiedResource($id)
    {
        try{
            $employee = $this->employees
                ->leftJoin('departments', 'employees.department_id', '=', 'departments.department_id')
                ->leftJoin('genders', 'employees.gender_id', '=', 'genders.gender_id')
                ->where('employees.employee_id', $id)
                ->first();
            return $employee;
        } catch (\Exception $e) {
            $this->error->redirect500($e);
        }
    }

    //社員情報を追加する
    public function saveResource($request)
    {
        try{
            $now = now();

            $employees = $this->employees
                ->insert([
                    'employee_code' => $request->employee_code,
                    'employee_name' => $request->employee_name,
                    'department_id' => $request->department_id,
                    'gender_id' => $request->gender_id,
                    'created_at' => $now,
                    'updated_at' => $now,
                ]);
        } catch (\Exception $e) {
            $this->error->redirect500($e);
        }
    }

    //社員情報を更新する
    public function updateResource($request,$id)
    {
        try{
            $now = now();

            $employees = $this->employees
                ->where('employee_id', $id)
                ->update([
                    'employee_code' => $request->employee_code,
                    'employee_name' => $request->employee_name,
                    'department_id' => $request->department_id,
                    'gender_id' => $request->gender_id,
                    'created_at' => $now,
                    'updated_at' => $now,
                ]);
        } catch (\Exception $e) {
            $this->error->redirect500($e);
        }
    }

}
