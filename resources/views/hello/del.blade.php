@extends('layouts.helloapp')

@section('title', 'Delete')

@section('menubar')
    @parent
@endsection

@section('content')
<form action="/hello/del" method="post">
<table>
    @csrf
    <input type="hidden" name="id" value="{{$form->id}}">
    <tr>
        <th>
            name:
        </th>
        <td>
            {{$form->name}}
        </td>
    <tr>
        <th>
            mail:
        </th>
        <td>
            {{$form->mail}}
        </td>
    </tr>
    <tr>
        <th>
            age:
        </th>
        <td>
            {{$form->age}}
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
1234567890
@endsection