<?php

namespace App\Http\Controllers;

use App\Models\Post;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct(){
        $this->middleware(['auth'])->only(['store', 'destroy']);
    }
    public function index(){
        $posts = Post::latest()->with(['user', 'likes'])->paginate(2);
        return view('posts.index', [
            'posts' =>$posts,
        ]);
    }
    public function offre(){
        $posts = Post::latest()->with(['user', 'likes'])->where('type','Offre')->paginate(2);
        return view('posts.index', [
            'posts' =>$posts,
        ]);
    }
     public function demande(){
        $posts = Post::latest()->with(['user', 'likes'])->where('type','Demande')->paginate(2);
        return view('posts.index', [
            'posts' =>$posts,
        ]);
    }
    public function show(Post $post){
        return view('posts.show',[
            'post' => $post,

        ]);
    }
    public function store(Request $request){

        $this->validate($request, [
            'body' => 'required',
            'title' => 'required',
            'type' => 'required',
            'image' => 'image',
        ]);
//         $filename   = uniqid() . "-" . time(); // 5dab1961e93a7-1571494241
// $extension  = pathinfo( $_FILES["file"]["name"], PATHINFO_EXTENSION ); // jpg
// $newImageName   = $filename . "." . $extension; // 5dab1961e93a7_1571494241.jpg

        $newImageName = time().'-IMG-'.$request->name.'.'.$request->image->extension();
        $request->image->move(public_path('images'),$newImageName);
        $request->user()->posts()->create([
            'body'=>$request->body,
            'title'=>$request->title,
            'type'=>$request->type,
            'image'=>$newImageName,
            ] );
        return back();
    }
    public function destroy(Post $post)
    {
        $this->authorize('delete',$post);
        $post->delete();
        return back();
    }
    public function search(){
        $q = request()->input('q');
        $post =Post::where('title','like',"%$q%")
        ->get();
        // ->orWhere('body','like', '%q%')

        return view('posts.search')->with('posts', $post);
    }
    public function edit(Post $post){
        return view('posts.edit',[
            'post' => $post,

        ]);
    }
    public function update(Request $request, $id){
        $newImageName = time().'-IMG-'.$request->name.'.'.$request->image->extension();
        $request->image->move(public_path('images'),$newImageName);

        Post::where('id', $id)->update([
            'body'=>$request->body,
            'title'=>$request->title,
            'type'=>$request->type,
            'image'=>$newImageName,
            ]);
    return redirect('/posts');
    }
}
