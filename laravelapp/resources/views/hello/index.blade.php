@extends('layouts.helloapp')
<style>
.pagination { font-size:10pt; }
.pagination li { display:inline-block }
a
tr th a:link { color: white; }
tr th a:visited { color: white; }
tr th a:hover { color: white; }
tr th a:active { color: white; }
</style>
@section('title', 'Index')
@section('menubar')
@parent
インデックスページ
@endsection
@section('content')
  <p>{{$msg}}</p>
  @if (count($errors) > 0)
     <p>入力に問題があります。再入力してください。</p>
  @endif
  <form action="/hello" method="post">
  <table>
      @csrf
        @error('name')
        <tr><th>ERROR</th>
        <tb>{{$message}}</tb></tr>
        @enderror
        <tr><th>name:</th><tb><input type="text"
          name="name" value="{{old('name')}}"></tb></tr>
        @error('mail')
        <tr><th>ERROR</th>
        <tb>{{$message}}</tb></tr>
        @enderror
        <tr><th>name:</th><tb><input type="text"
          name="mail" value="{{old('mail')}}"></tb></tr>
        @error('age')
        <tr><th>ERROR</th>
        <tb>{{$message}}</tb></tr>
        @enderror
        <tr><th>name:</th><tb><input type="text"
          name="age" value="{{old('age')}}"></tb></tr>
        @error('send')
        <tr><th>ERROR</th>
        <tb>{{$message}}</tb></tr>
        @enderror
        <tr><th>name:</th><tb><input type="text"
          name="send" value="{{old('send')}}"></tb></tr>
  </table>
  </form>
@endsection
@if (Auth::check())
    <p>USER: {{$user->name . ' (' . $user->email . ')'}}</p>
@else
    <p>※ログインしていません。（<a href="/login">ログイン</a>｜
    <a href="/register">登録</a>）</p>
@endif
<table>
    <tr>
        <th><a href="/hello?sort=name">name</a></th>
        <th><a href="/hello?sort=mail">mail</a></th>
        <th><a href="/hello?sort=age">age</a></th>
    </tr>
    @foreach ($items as $item)
    <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->mail}}</td>
        <td>{{$item->age}}</td>
    </tr>
    @endforeach
</table>
<div class="m-2">
{{ $items->appends(['sort' => $sort])->links() }}
</div>
@endsection
@section('footer')
copyright 2020 tuyano.
@endsection