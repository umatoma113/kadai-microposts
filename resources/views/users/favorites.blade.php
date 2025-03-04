@extends('layouts.app')

@section('content')
    <h1>{{ $user->name }}'s Favorite Posts</h1>

    @foreach ($microposts as $micropost)
        <div>{{ $micropost->content }}</div>
    @endforeach
@endsection