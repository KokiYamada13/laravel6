@extends('layouts.helloapp')

@section('title', 'index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文</p>
    <p>必要なだけ記述できます。</p>
    <p>{{$msg}}</p>
    @if (count($errors) > 0)
        <p>入力に問題あり。</p>
    @endif
    <form action="/hello" method="post">
      <table>
        @csrf
        @error('name')
        <tr>
            <th>ERROR</th>
            <td>
                {{$message}}
            </td>
        </tr>
        @enderror
        <tr>
            <th>
                name:
            </th>
            <td>
                <input type="text" name="name" value="{{old('name')}}">
            </td>
        </tr>
        @error('mail')
        <tr>
            <th>EROOR</th>
            <td>
                {{$message}}
            </td>
        </tr>
        @enderror
        <tr>
            <th>
                mail:
            </th>
            <td>
                <input type="text" name="mail" value="{{old('mail')}}">
            </td>
        </tr>
        @error('age')
        <tr>
            <th>EROOR</th>
            <td>
                {{$message}}
            </td>
        </tr>
        @endif
        <tr>
            <th>
                age:
            </th>
            <td>
                <input type="text" name="age" value="{{old('age')}}">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="send">
            </td>
        </tr>
      </table>
    </form>
@endsection

@section('footer')
copyright 2020 tuyano
@endsection