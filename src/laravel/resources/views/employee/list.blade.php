@extends('layouts.layout')
@section('title', '一覧')
@section('content')
    <div class="float-right">
        <a href="{{ route('employee.create') }}" class="btn btn-primary">新規登録</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">@sortablelink('employee_id', $employeeColumn['employee_id'])</th>
                <th scope="col">@sortablelink('employee_code', $employeeColumn['employee_code'])</th>
                <th scope="col">@sortablelink('employee_name', $employeeColumn['employee_name'])</th>
                <th scope="col">@sortablelink('department_id', $employeeColumn['department_id'])</th>
                <th scope="col">@sortablelink('gender_id', $employeeColumn['gender_id'])</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
            <tr>
                <td>{{ $employee->employee_id }}</td>
                <td>
                    <a href="{{ route('employee.show', ['employee_id'=> $employee->employee_id ]) }}">
                        {{ $employee->employee_code }}
                    </a>
                </td>
                <td>{{ $employee->employee_name }}</td>
                <td>{{ $employee->department_name }}</td>
                <td>{{ $employee->gender_name }}</td>
                <td>
                    <a href="{{ route('employee.edit', ['employee_id'=> $employee->employee_id ]) }}">編集</a>
                    <a href="{{ route('employee.confirm', ['employee_id'=> $employee->employee_id ]) }}">削除</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $employees->appends(request()->query())->links() }}
@endsection