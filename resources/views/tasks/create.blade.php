@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
<!-- 役割：新しいタスクの作成 -->

    <h1>タスク新規作成ページ</h1>
    
    {!! Form::model($task, ['route' => 'tasks.store']) !!}
        {!! Form::label('content', 'タスク：') !!}
        {!! Form::text('content') !!}
        
        {!! Form::label('status', 'ステータス：') !!}
        {!! Form::select('status', ['完了' => '完了済み', '作業中' => '作業中'], '作業中') !!}
        
        {!! Form::submit('投稿') !!}
    {!! Form::close() !!}

@endsection