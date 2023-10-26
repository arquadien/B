<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class IsvalideController extends Controller
{
    public function index(){
        $post = Post::with('categorie','user')->orderByDesc('updated_at')->paginate(6);

        return view('admin.validation-de-publication',compact('post'));
    }

    public function attente(){
        $post = Post::with('categorie','user')->orderByDesc('updated_at')->paginate(6);

        return view('publication-en-attente',compact('post'));
    }

    public function refuse(){
        $post = Post::with('categorie','user')->orderByDesc('updated_at')->paginate(6);

        return view('admin.publication-refuser',compact('post'));
    }
    public function refuser(){
        $post = Post::with('categorie','user')->orderByDesc('updated_at')->paginate(6);

        return view('publication-refuser',compact('post'));
    }


    public function update(Request $request,Post $item){
        $post = Post::find($item->id);
        $input = $request->all();
        $post->update($input);

        return redirect()->back();
    }

    public function delete(Post $item)
    {
        $item->delete();
        return back();
    }
}
