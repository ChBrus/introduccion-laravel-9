@extends('template')

@section('content')
    <h2>Listado</h2>
    @foreach ($posts as $post)
        <p>
            <strong>{{ $post->id }}</strong>
            <a href="{{ route('post', $post->slug) }}">
                {{ $post->title }}
            </a>
        </p>
    @endforeach
    <ul>
        <li>
            <a href="{{ $posts->previousPageUrl() }}">⬅️</a>
        </li>
        @foreach ($elements as $i => $element)
            <li>
                @if ($i === $currentPage)
                    <a href="{{ $element }}" active>{{ $i }}</a>
                @else
                    <a href="{{ $element }}">{{ $i }}</a>
                @endif
            </li>
        @endforeach
        <li>
            <a href="{{ $posts->nextPageUrl() }}">➡️</a>
        </li>
    </ul>
@endsection