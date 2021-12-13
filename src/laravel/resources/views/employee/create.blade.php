@extends('layouts.layout')
@section('title', '詳細')
@section('content')
    @include('components.error')
    {{Form::open(['url' => '/employee/store'])}}
        @include('components.employee_form')
        <div class='btn-toolbar' role="toolbar">
            <div>
                {{Form::submit('登録',[
                    'id' => 'submitBtn',
                    'class' => ['btn', 'btn-primary'],
                ])}}
                <a href="{{ route('employee.list') }}" class="btn btn-primary">戻る</a>
            </div>
        </div>
    {{Form::close()}}
@endsection