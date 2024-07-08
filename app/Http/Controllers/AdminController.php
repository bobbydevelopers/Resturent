<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;


class AdminController extends Controller
{
    public function show_user()
    {
        $user = user::all();
        return view('admin.user',['user'=>$user]);
    }

    public function delete_user($id)
    {
        $user = user::find($id);
        $user->delete();
        return redirect()->back();

    }

    public function search_user(Request $request)
    {
        $text = $request->search;
        $user = user::where('name','=',$text)->get();
        return view('admin.user',['user'=>$user]);

    }
}
