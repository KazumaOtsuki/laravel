@extends('layouts.layout')
@section('title', '詳細')
@section('content')
    <table>
        <tr>
            <td>ID</td>
            <td>{{ $employee->employee_id }}</td>
        </tr>
        <tr>
            <th>社員番号</th>
            <td>{{ $employee->employee_code }}</td>
        </tr>
        <tr>
            <th>社員名</th>
            <td>{{ $employee->employee_name }}</td>
        </tr>
        <tr>
            <th>部署名</th>
            <td>{{ $employee->department_name }}</td>
        </tr>
        <tr>
            <th>性別</th>
            <td>{{ $employee->gender_name }}</td>
        </tr>
    </table>
    <a href="{{ route('employee.list') }}">戻る</a>
@endsection