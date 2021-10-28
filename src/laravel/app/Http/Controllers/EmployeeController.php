<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employee;
use App\Models\Department;
use App\Models\Gender;
use App\Models\Configure;

use App\Http\Requests\EmployeeRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        //一覧画面
        $employeeInstance = new Employee();
        $employees = $employeeInstance->getListResource();
        return view('employee.list')->with([
            'employeeColumn' => Configure::getEmployeeColumm(),
            'employees' => $employees,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //登録画面
        $departmentInstance = new Department();
        $genderInstance = new Gender();

        $_departments = $departmentInstance->getListResource();
        $departments = [];
        foreach($_departments as $d){
            $departments[$d->department_id] = $d->department_name;
        }
        $genders = $genderInstance->getListResource();

        return view('employee.create')->with([
            'employeeColumn' => Configure::getEmployeeColumm(),
            'departments' => $departments,
            'genders' => $genders,
            'employeeCode' => null,
            'employeeName' => null,
            'departmentId' => null,
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeRequest $request)
    {
        //
        echo '登録するよ！';
        $employeeInstance = new Employee();
        $employees = $employeeInstance->saveResource($request);
    }

    /**
     * Display the specified resource.
     *t 

     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //詳細画面
        $employeeClass = new Employee();
        $employee = $employeeClass->getSpecifiedResource($id);

        return view('employee.show')->with([
            'employeeColumn' => Configure::getEmployeeColumm(),
            'employee' => $employee,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        echo '編集画面だよ！';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        echo '更新するよ！';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        echo '削除するよ！';
    }
}
