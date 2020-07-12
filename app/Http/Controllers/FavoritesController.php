<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    /**
     * 投稿をお気に入りに追加するアクション。
     *
     * @param  $id  お気に入りに追加する投稿のid
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        //認証済みユーザーが、idの投稿をお気に入りに追加する
        \Auth::user()->favorite($id);
        // 前のURLへリダイレクトさせる
        return back();
    }
    
    /**
     * 投稿をお気に入りから削除するアクション。
     *
     * @param  $id  お気に入りから削除する投稿のid
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //認証済みユーザーが、idの投稿をお気に入りから削除する
        \Auth::user()->unfavorite($id);
        // 前のURLへリダイレクトさせる
        return back();
    }
}
