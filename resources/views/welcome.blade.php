@extends('layouts.app')

@section('content')
<div class="center jumbotron">
    <div class="text-center">
        <h1>Laravel基礎から応用へ進むための素材です</h1>
        {!! link_to_route('signup.get', '新規登録', [], ['class' => 'btn btn-lg btn-primary']) !!}
    </div>
</div>
@endsection 