@extends('layouts.app')

@section('content')
<div class="d-flex align-items-center justify-content-center h-100">
    <form method="post" action="{{ route('user.exec.register') }}">
        @csrf
        <div class="card rounded login-card-width shadow">
            <div class="card-body">
                <div class="rounded-circle mx-auto border-gray border d-flex mt-3 icon-circle">
                    <img src="{{ asset('images/animal_stand_zou.png')  }}" class="w-75 mx-auto p-2" alt="icon"/>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="mt-3 h2">{{ config('app.name') }}</div>
                </div>
                <div class="row mt-3">
                    <div class="offset-2 col-8 offset-2">
                        <div class="form-group ">
                            <label class="input-group w-100 has-error">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-file-signature"></i></span>
                                    </span>
                                <input type="text" name="name" class="form-control @if(!empty($errors->first('name'))) is-invalid @endif" placeholder="ユーザー名" value="{{ old('name') }}" autocomplete="off" maxlength="255" autofocus/>
                            </label>
                            <span class="text-danger help-block">{{ $errors->first('name') }}</span>
                        </div>
                        <div class="form-group ">
                            <label class="input-group w-100">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-envelope"></i></span>
                                    </span>
                                <input type="text" name="email" class="form-control @if(!empty($errors->first('email'))) is-invalid @endif" placeholder="メールアドレス" value="{{ old('email') }}" autocomplete="off" maxlength="255" />
                            </label>
                            <span class="text-danger help-block">{{ $errors->first('email') }}</span>
                        </div>
                        <div class="form-group ">
                            <label class="input-group w-100">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-sort-numeric-up-alt"></i></span>
                                    </span>
                                <input type="number" name="term" class="form-control @if(!empty($errors->first('term'))) is-invalid @endif" placeholder="受講期生" value="{{ old('term') }}" autocomplete="off" maxlength="2" />
                            </label>
                            <span class="text-danger help-block">{{ $errors->first('term') }}</span>
                        </div>
                        <div class="form-group ">
                            <label class="input-group w-100">
                                <span class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </span>
                            <input type="password" name="password" class="form-control @if(!empty($errors->first('password'))) is-invalid @endif" placeholder="パスワード" autocomplete="off" maxlength="255" />
                            </label>
                            <span class="text-danger help-block">{{ $errors->first('password') }}</span>
                        </div>
                        <button type="submit" class="form-control btn btn-success">
                            登録する
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection