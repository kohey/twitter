@extends('layouts.app')
@section('content')
<div class="text-center">
    ログインする
</div>
<div class="row">
    <div class="col-sm-offset-3 col-sm-6">
        {!!Form::open(['route' => 'login.post'])!!}

        <div class="form-group">
            {!!Form:label('email','メールアドレス')!!}
            {!!Form:text('email',old('email'), ['class' => 'form-control'])!!}
        </div>
        <div class="form-group">
            {!!Form:label('password','パスワード')!!}
            {!!Form:text('password',['class' => 'form-control'])!!}
        </div>

        {!!Form:submit('ログイン',['class' => 'btn btn-primary btn-block'])!!}
        {!!Form::close()!!}
    </div>
</div>
@endsection 