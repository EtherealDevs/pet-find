<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use App\Models\Category;
use App\Models\Image;
use Laravel\Jetstream\Rules\Role;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::where('status', 2)->latest('id')->get();
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post){
        return view('posts.show', compact('post'));
    }

     /* Muestra lo que tengo almacenado en $category por el metodo Category */
     public function category(Category $category){
        $posts = Post::where('category_id', $category->id)

                        ->where('status', 2)
                        ->latest('id')
                        ->get();;

        return view('posts.category', compact('posts','category'));
    }

    public function store(Request $request){
        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');

        $images = $request->file('images');
        if ($images) {
            foreach ($images as $image) {
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $image->move(storage_path('app/public/images'), $filename);

                $image = Image::create([
                    'title' => $request->input('image_title'),
                    'description' => $request->input('image_description'),
                    'image' => $filename,
                ]);

                $post->images()->attach($image);
            }
        }

        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post creado correctamente');
    }
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
            $url = $request->file('file')->store('/');
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
}
