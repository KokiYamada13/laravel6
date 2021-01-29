@extends('layouts.helloapp')

@section('title', 'index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文</p>
    <p>必要なだけ記述できます。</p>
    <p>Controller value<br>'message' = {{$message}}</p>
    <p>ViewComposer value<br>'view_message' = {{$view_message}}</p>
    <!-- <ul>
        @each('components.item', $data ?? '', 'item')
    </ul> -->
    <!-- @component('components.message')
        @slot('msg_title')
        CAUTION!
        @endslot
s
        @slot('msg_content')
        これはメッセージの表示です。
        @endslot
    @endcomponent -->
    <!-- @include('components.message', ['msg_title'=>'ok', 'msg_content'=>'サブ']) -->
@endsection

@section('footer')
copyright 2020 tuyano
@endsection