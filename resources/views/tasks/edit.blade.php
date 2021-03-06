@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
<!-- 役割：既存タスクの編集 -->
    <h1>id: {{ $task->id }} のメッセージ編集ページ</h1>
    
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3">
        {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
    
            {!! Form::label('content', 'タスク:') !!}
            {!! Form::text('content', null, ['class'=>'form-control']) !!}
    
            {!! Form::label('status', 'ステータス：') !!}
            {!! Form::select('status', ['完了' => '完了済み', '作業中' => '作業中'], '作業中', ['class'=>'form-control']) !!}
    
            {!! Form::submit('更新',  ['class'=>'btn btn-primary']) !!}
    
        {!! Form::close() !!}
        </div>
    </div>


@endsection