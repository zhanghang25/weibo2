@extends('layouts.default')
@section('title')
更新密码
@endsection

@section('content')
<div class="offset-md-1 col-md-10">
    <div class="card">
        <div class="card-header">
            <h5>更新密码</h5>
        </div>
        <div class="card-body">
            <form action=" {{ route('password.update') }} " method="post">
                @csrf
                <input type="hidden" name="token" value="{{ $token}}">

                <div class="from-group row">
                    <div class="col-md-4 col-form-label text-md-right">
                        Email 地址
                    </div>
                    <div class="col-md-6">
                        <input type="email" name="email" id="email"
                            class="form-control{{ $errors->has('email') ? ' is-invaild' : '' }}"
                            value="{{ $email ?? old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                        <span class="invaild-feedback">
                            <strong> {{ $errors->first('email') }} </strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="from-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">
                        密码
                    </label>
                    <div class="col-md-6">
                        <input type="password" name="password" id="password"
                            class="form-control{{ $errors->has('password') ? 'is-invaild' :''}}" required>
                        @if ($errors->has('password'))
                        <span class="invaild-feedback">
                            <strong> {{ $errors->first('password') }} </strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">确认密码</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            重置密码
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection