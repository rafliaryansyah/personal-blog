<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('pages.backends.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        $category = Category::all();
        return view('pages.backends.post.create', compact('tags', 'category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'category_id' => 'required',
            'content' => 'required',
            'image' => 'required'
        ]);

        $image = $request->image;
        $new_image = time().$image->getClientOriginalName();

        $post = Post::create([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'content' => $request->content,
            'image' => 'public/uploads/post/' . $new_image,
            'slug' => Str::slug($request->title),
            'user_id' => Auth::id()
        ]);
        $post->tags()->attach($request->tag);   

        $image->move('public/uploads/post/', $new_image);

        return redirect()->route('post.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $category = Category::all();
        $tags = Tag::all();
        return view('pages.backends.post.edit', compact('post', 'category', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'category_id' => 'required',
            'content' => 'required'
        ]);

        $post = Post::findOrFail($id);

        if ($request->has('image')) {
            
            $image = $request->image;
            $new_image = time().$image->getClientOriginalName();
            $image->move('public/uploads/post/', $new_image);

            $postData = [
                'title' => $request->title,
                'category_id' => $request->category_id,
                'content' => $request->content,
                'image' => 'public/uploads/post/' . $new_image,
                'slug' => Str::slug($request->title)
            ];
        } else {
            $postData = [
                'title' => $request->title,
                'category_id' => $request->category_id,
                'content' => $request->content,
                'slug' => Str::slug($request->title)
            ];
        }

        $post->tags()->sync($request->tag);
        $post->update($postData);
        
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('post.index');
    }

    public function showDelete()
    {
        $posts = Post::onlyTrashed()->paginate(10);
        return view('pages.backends.post.restore', compact('posts'));
    }

    public function restore($id)
    {
        $post = Post::withTrashed()->where('id', $id)->first();
        $post->restore();

        return redirect()->route('post.index');
    }

    public function killed($id)
    {
        $post = Post::withTrashed()->where('id', $id)->first();
        $post->forceDelete();

        return redirect()->route('post.showDelete');
    }

}
