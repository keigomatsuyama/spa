<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Models\Petlove;
use App\Models\Comment;
use App\Models\Favorite;
class RecommendController extends Controller
{

    public function recommend($id)
    {
         $petlove = Petlove::findOrFail($id);

        return view('recommend',
            compact('petlove'));
    }

    public function store(CommentRequest $request, $id)
    {
        // コメント保存
        Comment::create([
            'petlove_id' => $id,
            'comment' => $request->comment,
        ]);

        // お気に入り保存
        Favorite::create([
            'petlove_id' => $id,
        ]);

     return redirect('/home');
    }
}
