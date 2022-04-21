<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;


class UserPostController extends Controller
{
    public function index(User $user){
        $posts = $user->posts()->with(['user','likes'])->paginate(2);
        return view('users.posts.index',[
            'user' =>$user,
            'posts' => $posts,
        ]);
    }
}
