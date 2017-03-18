@extends('layouts.app')

@section('content')
    <h1> {{ $user->name }} のプロフィール</h1>
    <div class="row">
        <aside class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">ユーザー名</h3>
                </div>
                <div class="panel-body">
                    <p>{{ $user->name }}</p>
                </div>
            </div>

            @if (count($user->tasks) > 0)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">タスク一覧</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>タスク</th>
                            <th>ステータス</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                                @foreach($user->tasks as $task)
                                <tr>
                                    <td><?php print($i); ?>：{{ $task->content }}</td><td>{{$task->status}}</td>
                                </tr>　
                                <?php $i = $i+1; ?>
                            @endforeach
                        </tbody>



                    </table>


                </div>
            </div>
            @endif

    @if (Auth::check())
        @if(\Auth::user()->id == $user->id)
        {!! link_to_route('users.edit', 'ユーザー名を編集', ['id' => $user->id], ['class' => 'btn btn-primary']) !!}
        @endif
    @endif
        {!! link_to_route('users.index', 'ユーザー一覧へ戻る', '', ['class' => 'btn btn-default']) !!}
        </aside>
        <!-- 
        <div class="col-xs-8">
            <ul class="nav nav-tabs nav-justified">
                <li><a href="#">Microposts</a></li>
                <li><a href="#">Followings</a></li>
                <li><a href="#">Followers</a></li>
            </ul>
        </div>
        -->
    </div>
@endsection