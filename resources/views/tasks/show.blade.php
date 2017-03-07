@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
<!-- 役割：タスク詳細の表示 -->

    <h1>id = {{ $task->id }}のタスク詳細ページ</h1>
    
    <p>タスク：{{ $task->content }}</p>
    <p>ステータス：{{ $task->status }}</p>
    
    {!! link_to_route('tasks.edit', 'このタスクを編集', ['id' => $task->id]) !!}
    
    {!! Form::model($task,['route'=> ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('タスクを削除') !!}
    {!! Form::close() !!}
    
    {!! link_to_route('tasks.index', '一覧へ戻る') !!}

@endsection