@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
<!-- 役割：タスク一覧の表示 -->
@if (Auth::check())
    <?php $user = Auth::user(); ?>
    <h1>{{ $user->name }}さんのタスク一覧</h1>
    
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

@else
    <div class="center jumbotron">
        <div class="text-center">
            <h1>ようこそタスク管理アプリへ</h1>
            {!! link_to_route('signup.get', '新規登録', null, ['class' => 'btn btn-lg btn-primary']) !!}
            {!! link_to_route('login.get', 'ログインする', null, ['class' => 'btn btn-lg btn-success']) !!}
        </div>
    </div>
@endif

@endsection