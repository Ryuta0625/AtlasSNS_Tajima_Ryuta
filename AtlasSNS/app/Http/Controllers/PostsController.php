<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use Auth;

class PostsController extends Controller
{
    //
    public function index(){
        $list = Post::get();
        return view('posts.index',['list'=>$list]);
    }

    public function create(Request $request)
    {
        $post = $request->input('newPost');
        // ログイン中のユーザーのidをここに書く
        $user_id = Auth::id();
        Post::create(['post' => $post, 'user_id' => $user_id]);
        return redirect('top');
    }

        public function update(Request $request)
    {
        $user_id = $request->input('id');
        $up_post = $request->input('upPost');
        \DB::table('posts')
            ->where('id', $id)
            ->update(
                ['post' => $up_post]
            );

        return redirect('top');
    }

            public function delete($id)
    {
        \DB::table('posts')
            ->where('id', $id)
            ->delete();

        return redirect('top');
    }

}
