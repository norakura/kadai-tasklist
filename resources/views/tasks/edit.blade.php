@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
<!-- 役割：既存タスクの編集 -->
    <h1>id: {{ $task->id }} のメッセージ編集ページ</h1>
    
    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}

@endsection