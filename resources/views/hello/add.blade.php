@extends('layouts.helloapp')

@section('title', 'add')

@section('menuber')
    @parent
@endsection

@section('content')
<form action="/hello/add" method="post">
<table>
    @csrf
    <tr>
        <th>
            name:
        </th>
        <td>
            <input type="text" name="name">
        </td>
    </tr>
    <tr>
        <th>
            mail:
        </th>
        <td>
            <input type="text" name="mail">
        </td>
    </tr>
    <tr>
        <th>
            age:
        </th>
        <td>
            <input type="text" name="age">
        </td>
    </tr>
    <tr>
        <th>
            <input type="submit" value="send">
        </th>
    </tr>
</table>
</form>
@endsection

@section('footer')
1234567890
@endsection