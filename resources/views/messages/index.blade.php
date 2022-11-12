@extends('layouts.app')

@section('content')

    <div class="container py-5 my-5">
        <ul class="list-group">
            @foreach ($messages as $message)
                <li class="list-group-item p-4 rounded-4">
                    <span class="text-muted">De : </span>
                    <a href="mailto:{{ $message->email }}">{{ $message->email }}</a>
                    <br>
                    <span class="text-muted">Contenu : </span>
                    <br>
                    {{ $message->content }}
                </li>
            @endforeach
        </ul>
</div>

@endsection
