@extends('layouts.layout')
@section('title', '完了')
@section('content')
    <p class="text-center">完了</p>
    <div class='btn-toolbar' role="toolbar">
        <div>
            <a href="{{ route('employee.list') }}" class="btn btn-primary">戻る</a>
        </div>
    </div>
@endsection