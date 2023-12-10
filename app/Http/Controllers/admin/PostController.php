<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Tags;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function __construct(){
        // $this->middleware('can:admin.posts.index')->only('index');
        // $this->middleware('can:admin.posts.edit')->only('edit', 'update');
        // $this->middleware('can:admin.posts.destroy')->only('destroy', 'update');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('admin.posts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id');

        $tags = Tags::all();

        return view ('admin.posts.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        
        $post = Post::create($request->all());

        if($request->file('file')){
         $url = $request->file('file')->store('post', 'public');
         $post->image()->create([
             'url' => $url
         ]);}

       return redirect()->route('admin.posts.index', $post);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view ('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::pluck('name', 'id');

        $tags = Tags::all();
        return view ('admin.posts.edit', compact('post','categories','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        
        if ($request->file('file') == null) {
            $fileIsNotNull = false;
        } else {$fileIsNotNull = true;};
        

        $post->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'extract' => $request->extract,
            'body' => $request->body,
            'status'=> $request->status,
            'category_id'=>$request->category_id,
            'user_id'=>$request->user_id
        ]);

        if ($fileIsNotNull) {
            $url = $request->file('file')->store('post', 'public');
            if ($post->image) {
                $image = $post->image()->update([
                    'url' => $url
                ]);
            } else {
                $image = $post->image()->create([
                    'url' => $url
                ]);
            }
        }

        return redirect()->route('admin.posts.index')->with('info', 'Post actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->image()->delete();
        $post->delete();
        return redirect()->route('admin.posts.index')->with('info', 'El Post se elimino con exito');
    }
}
