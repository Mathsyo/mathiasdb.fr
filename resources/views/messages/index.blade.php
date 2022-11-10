@extends('layouts.app')

@section('content')

    <ul class="list-group-item">
        @foreach ($messages as $message)
            <li class="list-group-item">
                {{ $message->content }}
                <a href="/messages/{{ $message->id }}">Leer</a>
            </li>
        @endforeach
    </ul>

@endsection
