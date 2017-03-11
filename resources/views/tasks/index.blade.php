@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
<!-- 役割：タスク一覧の表示 -->
<h1>タスク一覧</h1>

@if(count($tasks) > 0)
    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>タスク</th>
                <th>ステータス</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tasks as $task)
            <tr>
                <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                <td>{!! link_to_route('tasks.show', $task->content, ['id' => $task->id]) !!}</td>
                <td>{!! $task->status !!}</td>
                
            </tr>
            <?php
            /*
                $idNum = 'ID番号：'.$task->id;
                $taskContent = 'タスク：'.$task->content;
                $taskStatus = 'ステータス：'.$task->status;
                $title = $idNum.$taskContent.$taskStatus;
                */
            ?>
            <?php /*
            <li>{!! link_to_route('tasks.show', $title, ['id' => $task->id]) !!}</li>
            */?>
        @endforeach
        </tbody>
    </table>
    <ul>

    </ul>
    
@endif
        {!! link_to_route('tasks.create', '新規作成', null, ['class' => 'btn btn-primary']) !!}
<br>
        {!! $tasks->render() !!}

    @endsection