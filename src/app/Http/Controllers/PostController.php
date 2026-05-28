<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Petlove;

class PostController extends Controller
{
    public function post()
    {
        return view('/post');
    }

    public function send(PostRequest $request)
    { $image = $request->file('image');

    $imageName = time() . '.' .
                 $image->getClientOriginalExtension();

    $image->move(public_path('images'), $imageName);
        Petlove::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName,
        ]);

        return redirect('/home');
    }
}