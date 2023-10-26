<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Commentaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $val=1;
        $post = Post::with('categorie','user')->where('valideted',$val)->orderByDesc('updated_at')->paginate(6);

        return view('index',compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     *
     */
    public function create(Request $request)
    {
        $categories=Category::all();
        return view('post.post_create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        $request->all();
        // Post::create($input);
        $image='storage/'.$request->file('image')->store('postImage','public');

        $post= new Post();
        $post->titre = $request->input('titre');
        $post->user_id = $request->input('user_id');
        $post->categorie_id = $request->input('categorie_id');
        $post->description = $request->input('description');
        $post->contenue = $request->input('contenue');
        $post->image = $image;

        $post->save();

        session()->flash("status",'post en attente de validation');
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=Post::find($id);
        $commentaires=Commentaire::where('post_id',$post->id)->with('user')->get();

        return view('post.détail',compact('post','commentaires'));
    }

    public function MesPost(){
        $post = Post::with('categorie','user')->where('user_id',auth()->user()->id)->orderByDesc('updated_at')->get();

        return view('post',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user_id = Auth::user()->id;
        $post = Post::find($id);
        $categories = Category::all();
        // dd($categories);

        return view('post.update',compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Post $post)
    {
        $title = $request->input('titre');
        $post_id = $post->id;
        $categorie_id = $request->input('categorie_id');
        $description = $request->input('description');
        $contenue = $request->input('contenue');

        $image='storage/'.$request->file('image')->store('postImage','public');


        $post->titre = $title;
        $post->categorie_id = $categorie_id;
        $post->description = $description;
        $post->contenue = $contenue;
        $post->image = $image;

        $post->save();

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return back();
    }
}
