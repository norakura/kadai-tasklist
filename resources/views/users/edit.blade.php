@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
<!-- 役割：既存タスクの編集 -->
    <h1>id: {{ $user->name }} のプロフィール編集ページ</h1>
    
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3">
        {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'put']) !!}
    
            {!! Form::label('name', 'ユーザ名:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
    
            {!! Form::submit('更新',  ['class'=>'btn btn-primary']) !!}
    
        {!! Form::close() !!}
        </div>
    </div>


@endsection