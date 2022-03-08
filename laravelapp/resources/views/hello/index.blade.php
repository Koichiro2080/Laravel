@extends('layouts.helloapp')

@section('title','Index')

@section('menuber')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツ</p>
    <p>必要なだけ記述します。</p>
     @include('component.message',['msg_title'=>'OK',
     'msg_content'=>'サブビュー'])
    @component('components.message')
        @slot('msg_title')
        CAUTION!
        @endslot

        @slot('msg_content')
        これはメッセージの表示
        @endslot
    @endcomponent
@endsection

@section('footer')
copyright 2022 tuyano.
@endsection