@extends('layouts.layout')
@section('title', '確認')
@section('content')
    {{Form::open(['url' => $formUrl])}}
        @component('components.employee_table')
            @slot('employeeColumn', $employeeColumn)
            @slot('employeeId', $employee->employee_id)
            @slot('employeeCode', $employee->employee_code)
            @slot('employeeName', $employee->employee_name)
            @slot('departmentName', $employee->department_name)
            @slot('genderName', $employee->gender_name)
        @endcomponent
        <div class='btn-toolbar' role="toolbar">
            <div>
                {{Form::submit('削除',[
                    'id' => 'destroyBtn',
                    'class' => ['btn', 'btn-primary'],
                ])}}
                <a href="{{ route('employee.list') }}" class="btn btn-primary">戻る</a>
            </div>
        </div>
    {{Form::close()}}
@endsection