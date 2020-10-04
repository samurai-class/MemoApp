@extends('layout')

@section('content')

        <form method="POST" action="{{ route('update', ['id' => $memo->id]) }}">
        @call_user_func
        <textarea name="content" rows="4">{{ $memo-> content }}</textarea>

        <button type="submit">更新</button>
        <a href="{{ route('index') }}">キャンセル</a>

    </form>

@endsection