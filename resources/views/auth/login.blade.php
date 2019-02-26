@extends('layouts.app')
@section('content')
<h1 class="text-center">
    ログイン
</h1>
<div class="row">
    <div class="offset-sm-3 col-sm-6">
        {!!Form::open(['route' => 'login.post'])!!}

        <div class="form-group">
            {!!Form::label('email','メールアドレス')!!}
            {!!Form::text('email',old('email'), ['class' => 'form-control'])!!}
        </div>
        <div class="form-group">
            {!!Form::label('password','パスワード')!!}
            {!!Form::password('password',['class' => 'form-control'])!!}
        </div>

        {!!Form::submit('ログイン',['class' => 'btn btn-primary btn-block'])!!}
        {!!Form::close()!!}
        <p class="mt-2">初めてですか？ {!! link_to_route('signup.get', ' 新規登録') !!}</p>
    </div>
</div>
@endsection 