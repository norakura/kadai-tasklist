@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
<!-- 役割：タスク一覧の表示 -->
<h1>タスク一覧</h1>

@if(count($tasks) > 0)
    <ul>
        @foreach($tasks as $task)
            <?php
                $idNum = 'ID番号：'.$task->id;
                $taskContent = 'タスク：'.$task->content;
                $title = $idNum.$taskContent;
            ?>
            <li>{!! link_to_route('tasks.show', $title, ['id' => $task->id]) !!}</li>
        @endforeach
    </ul>
@endif
    
    {!! link_to_route('tasks.create', '新規作成') !!}

@endsection