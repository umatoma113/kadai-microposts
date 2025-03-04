@extends('layouts.app')

@section('content')
    <h2>お気に入り一覧</h2>

    @if (isset($favorites))
        @foreach ($favorites as $micropost)
            <div class="micropost">
                <p>{{ $micropost->content }}</p>

                {{-- ここにお気に入りボタンを追加 --}}
                @include('user_favorites.favorite_button', ['micropost' => $micropost])
            </div>
        @endforeach
    @endif
@endsection