@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    {{--<p>{{$msg}}</p>--}}

    <table>
        <tr>
            <th>Name</th>
            <th>Mile</th>
            <th>Age</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->mail }}</td>
                <td>{{ $item->age }}</td>
            </tr>
            @endforeach
    </table>

    {{--// フォーム--}}
    {{--<table>--}}
        {{--<form action="/hello" method="post">--}}
            {{--{{ csrf_field() }}--}}
            {{--@if ($errors->has('name'))--}}
                {{--<tr><th>ERROR</th><td>{{ $errors->first('name') }}</td></tr>--}}
                {{--@endif--}}
            {{--<tr><th>name: </th><td><input type="text" name="name" value="{{ old('name') }}"></td></tr>--}}
            {{--@if ($errors->has('mail'))--}}
                {{--<tr><th>ERROR</th><td>{{ $errors->first('mail') }}</td></tr>--}}
            {{--@endif--}}
            {{--<tr><th>mail: </th><td><input type="text" name="mail" value="{{ old('mail') }}"></td></tr>--}}
            {{--@if ($errors->has('age'))--}}
                {{--<tr><th>ERROR</th><td>{{ $errors->first('age') }}</td></tr>--}}
            {{--@endif--}}
            {{--<tr><th>age: </th><td><input type="text" name="age" value="{{ old('age') }}"></td></tr>--}}
            {{--<tr><th>name: </th><td><input type="submit" value="send"></td></tr>--}}
        {{--</form>--}}
    {{--</table>--}}
@endsection

@section('footer')
    copyright 2017 ツツイ
@endsection