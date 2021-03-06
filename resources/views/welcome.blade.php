@extends('layouts.app')
@section('content')
@if(Auth::check())
<div class="row">
    <aside class="col-sm-4">
        @include('users.card',['user' => Auth::user()])
    </aside>
    <div class="col-sm-8">
        @if (Auth::id() == $user->id)
        {!! Form::open(['route' => 'microposts.store']) !!}
        <div class="form-group">
            {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '2']) !!}
            {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
        </div>
        {!! Form::close() !!}
        @endif

        @if(count($microposts) > 0)
        @include('microposts.microposts',['microposts' => $microposts])
        @endif
    </div>
</div>

@else
<div class="center jumbotron">
    <div class="text-center">
        <h1>これはLaravel基礎から応用への素材です</h1>
        {!! link_to_route('signup.get','新規登録',[],['class' => 'btn btn-primary brn-lg'])!!}
    </div>
</div>
@endif

@endsection 