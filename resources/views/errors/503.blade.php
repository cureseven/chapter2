{{-- 親ビューの指定 --}}
@extends('layout')

{{-- 以降の@sectionから、@endsectionまでの間が各セクションの内容となる --}}

@section('title')
サービスが利用できません
@endsection

@section('page')
503
@endsection

@section('content')
<div class="row">
  <div class="col s12">
    <h4>サービスが利用できません</h4>
    {{--
      abortヘルパーでコードと共にメッセージが渡された場合は、それを優先し表示する。
      メッセージが指定されていない場合はデフォルトのメッセージを表示する。
    --}}
    @if ($exception->getMessage())
    <p>{{ $exception->getMessage() }}</p>
    @else
    <p>一時的にアクセスが増大したか、サービスの運営に支障が生じています。</p>
    <p>もうしばらくお待ちになり、後ほど再度お試しください。</p>
    @endif
  </div>
</div>
@endsection
