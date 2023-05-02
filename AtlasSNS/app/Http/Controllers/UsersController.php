<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Auth;

class UsersController extends Controller
{
    //
    public function profile(){
        return view('users.profile');
    }
    // public function search(){
    //     return view('users.search');
    // }
    // users.search usersの中にあるsearchのファイル
    // public function search(Request $_REQUEST){
    //     $keyword = $_REQUEST->input('keyword');
    //     $results = DB::table('table_name')->where('column_name', 'like', '%'.$keyword.'%')->get();
    //     return view('search_results', ['results' => $results]);
    // }

    public function search(Request $request){
        // $users = User::all();
        //自分以外を表示させる
        //if文は検索ワードがあったら表示されるやつ
    $keyword = $request->input('keyword');
// dd($request);
    // もしキーワードが入力されている場合は、検索結果を取得する
    if (!empty($keyword)) {
        $users = User::where('username', 'like', '%'.$keyword.'%')
                    ->orWhere('mail', 'like', '%'.$keyword.'%')
                    ->where('id', '!=', Auth::id())
                    ->get();
    } else {
        // キーワードが入力されていない場合は、ログインユーザー以外のすべてのユーザーを取得する
        $users = User::where('id', '!=', Auth::id())->get();
        // デバック関数
        // dd($);

    }

    return view('users.search', compact('users', 'keyword'));
    }


        // $searchKeyword = $request->input('search');

        // $users = User::where('username', 'LIKE', '%'.searchKeyword.'%')
        // ->orWhere('mail', 'LIKE', '%'.searchKeyword.'%')
        // ->get();


    //     return view('users.search', ['users' => $users, 'searchKeyword' => $searchKeyword]);
    // }


}
