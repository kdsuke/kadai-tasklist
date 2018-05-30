@extends('layouts.app')

@section('content')

<h1>新規タスク追加ページ</h1>


    {!! Form::model($tasklist, ['route' => 'tasklists.store']) !!}

        
        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}
        
        
        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::text('status') !!}
        

        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}

@endsection