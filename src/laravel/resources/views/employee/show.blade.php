@extends('layouts.layout')
@section('title', '詳細')
@section('content')
    @component('components.employee_table')
        @slot('employeeColumn', $employeeColumn)
        @slot('employeeId', $employee->employee_id)
        @slot('employeeCode', $employee->employee_code)
        @slot('employeeName', $employee->employee_name)
        @slot('departmentName', $employee->department_name)
        @slot('genderName', $employee->gender_name)
    @endcomponent
    <a href="{{ route('employee.list') }}">戻る</a>
@endsection