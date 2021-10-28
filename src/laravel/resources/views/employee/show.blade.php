@extends('layouts.layout')
@section('title', '詳細')
@section('content')
    <table>
        <tr>
            <th>{{ $employeeColumn['employee_id'] }}</th>
            <td>{{ $employee->employee_id }}</td>
        </tr>
        <tr>
            <th>{{ $employeeColumn['employee_code'] }}</th>
            <td>{{ $employee->employee_code }}</td>
        </tr>
        <tr>
            <th>{{ $employeeColumn['employee_name'] }}</th>
            <td>{{ $employee->employee_name }}</td>
        </tr>
        <tr>
            <th>{{ $employeeColumn['department_id'] }}</th>
            <td>{{ $employee->department_name }}</td>
        </tr>
        <tr>
            <th>{{ $employeeColumn['gender_id'] }}</th>
            <td>{{ $employee->gender_name }}</td>
        </tr>
    </table>
    <a href="{{ route('employee.list') }}">戻る</a>
@endsection