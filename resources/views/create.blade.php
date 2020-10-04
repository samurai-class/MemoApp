@extends('layout')

@section('content')

    <form method="POST" action="{{ route('store') }}">
        @csrf

        <textarea name="content" rows="4"></textarea>

        @of($errors->any())
            @foreach ()

        <button type="submit">作成</button>
        <a href="{{route('index') }}">キャンセル</a>
    </form>

@endsection