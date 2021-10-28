@extends('layouts.layout')
@section('title', '詳細')
@section('content')
    {{Form::open(['url' => '/employee/store'])}}
        <table>
            <tr>
                <th>{{ $employeeColumn['employee_code'] }}</th>            
                <td>
                    {{Form::text('employee_code',$employeeCode,[
                        'id' => 'employeeCode',
                        'class' => 'employee-code'
                    ])}}
                </td>
            </tr>
            <tr>
                <th>{{ $employeeColumn['employee_name'] }}</th>
                <td>
                    {{Form::text('employee_name',$employeeName,[
                        'id' => 'employeeName',
                        'class' => 'employee-name'
                    ])}}
                </td>
            </tr>
            <tr>
                <th>{{ $employeeColumn['department_id'] }}</th>
                <td>
                    {{Form::select('department_id',$departments,$departmentId,[
                        'id' => 'departments',
                        'class' => 'departments'    
                    ])}}
                </td>
            </tr>
            <tr>
                <th>{{ $employeeColumn['gender_id'] }}</th>
                <td>
                    @foreach ($genders as $g)
                    {{Form::radio('gender_id', $g->gender_id, false, [
                        'id'=>'genders',
                        'class'=>'custom-control-input',
                    ])}}
                    {{ $g->gender_name }}
                    @endforeach
                </td>
            </tr>
        </table>
        {{Form::submit('登録',[
            'id' => 'calculationBtn',
            'class' => 'calculation-btn',    
        ])}}
        <a href="{{ route('employee.list') }}">戻る</a>
                
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $e)
                <li>{{$e}}</li>
                @endforeach
            </ul>
        </div>
        @endif
    {{Form::close()}}
@endsection