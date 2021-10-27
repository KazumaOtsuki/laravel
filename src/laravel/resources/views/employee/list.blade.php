@extends('layouts.layout')
@section('title', '一覧')
@section('content')
    <a href="{{ route('employee.create') }}">新規登録</a>
    <table>
        <tr>
            <th>ID</th>
            <th>社員番号</th>
            <th>社員名</th>
            <th>部署名</th>
            <th>性別</th>
            <th></th>
        </tr>
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
                <a href="{{ route('employee.destroy', ['employee_id'=> $employee->employee_id ]) }}">削除</a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection