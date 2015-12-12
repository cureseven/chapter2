{{-- 親ビューの指定 --}}
@extends('layout')

{{-- 以降の@sectionから、@endsectionまでの間が各セクションの内容となる --}}

@section('title')
ユーザー情報編集:UserモデルCRUDサンプル
@endsection

@section('page')
ユーザー情報編集
@endsection

@section('content')
<div class="row">
  <form class="col s12" method="POST" >

    {{-- nameフィールド --}}
    <div class="row">
      <div class="col s12 input-field">
        <input id="name" type="text" name="name"
               value="{{ old('name', $user->name) }}" length="255"
               class="{{ $errors->has('name') ? 'error' : '' }}">
        <label for="name">ユーザー名</label>
        @if ($errors->has('name'))
        <p class="error-msg">{{ $errors->first('name') }}</p>
        @else
        <p class="help-msg">登録するユーザー名を指定してください。</p>
        @endif
      </div>
    </div>


    {{-- emailフィールド --}}
    <div class="row">
      <div class="col s12 input-field">
        <input id="email" type="email" name="email"
               value="{{ old('email', $user->email) }}" length="255"
               class="{{ $errors->has('email') ? 'error' : '' }}">
        <label for="email">メールアドレス</label>
        @if ($errors->has('email'))
        <p class="error-msg">{{ $errors->first('email') }}</p>
        @else
        <p class="help-msg">登録するメールアドレスを指定してください。</p>
        @endif
      </div>
    </div>

    {{-- passwordフィールド --}}
    <div class="row">
      <div class="col s12 input-field">
        <input id="password" type="password" name="password"
               class="{{ $errors->has('password') ? 'error' : '' }}">
        <label for="password">パスワード</label>
        @if ($errors->has('password'))
        <p class="error-msg">{{ $errors->first('password') }}</p>
        @else
        <p class="help-msg">登録するパスワードを指定してください。</p>
        @endif
      </div>
    </div>

    {{-- 更新ボタン --}}
    <div class="row">
      <div class="col s12 input-field">
        <button class="btn waves-effect" type="submit" name="action">
          更新 <i class="material-icons right">send</i>
        </button>
      </div>
    </div>

    {{-- CSRFを防ぐためのトークンを隠しフィールドに埋め込むコードの生成 --}}
    {!! csrf_field() !!}
  </form>
</div>
@endsection
