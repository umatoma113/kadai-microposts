@if (Auth::user()->is_favoriting($micropost->id))
    {{-- お気に入り解除ボタンのフォーム --}}
    <form method="POST" action="{{ route('micropost.unfavorite', $micropost->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-error btn-block normal-case"
            onclick="return confirm('この投稿のお気に入りを解除します。よろしいですか？')">Unfavorite</button>
    </form>
@else
    {{-- お気に入り登録ボタンのフォーム --}}
    <form method="POST" action="{{ route('micropost.favorite', $micropost->id) }}">
        @csrf
        <button type="submit" class="btn btn-primary btn-block normal-case">Favorite</button>
    </form>
@endif
