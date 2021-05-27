@extends('layouts.helloapp')

@section('title', 'Board.index')

@section('menubar')
    @parent
    ボード
@endsection

@section('content')
    <table>
        <tr><th>Message</th></tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->message}}</td>
                <td>{{$item->person->name}}</td>
            </tr>
        @endforeach
    </table>
@endsection