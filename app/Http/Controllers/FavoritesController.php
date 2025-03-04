<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    public function index()
    {
        $user = \Auth::user();
        $favorites = $user->favorites()->paginate(10);

        return view('favorites.index', ['favorites' => $favorites]);
    }
    /**
     * 投稿をお気に入りに追加するアクション。
     *
     * @param  $id  投稿のID
     * @return \Illuminate\Http\Response
     */
    public function store(string $id)
    {
        \Auth::user()->favorite(intval($id));

        return back();
    }

    /**
     * 投稿のお気に入りを解除するアクション。
     *
     * @param  $id  投稿のID
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        \Auth::user()->unfavorite(intval($id));

        return back();
    }
}
