@extends('template')

@section('content')
    <h2>Listado</h2>
    @foreach ($posts as $post)
        <p>
            <strong>{{ $post['id'] }}</strong>
            <a href="{{ route('post', $post['slug']) }}">
                {{ $post['title'] }}
            </a>
        </p>
    @endforeach
@endsection