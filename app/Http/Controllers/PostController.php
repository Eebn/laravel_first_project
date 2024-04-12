<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Routing\Controller as BaseController;

class PostController extends BaseController
{
    public function index()
    {
        $posts = Post::all();
        return view('post.index', compact('posts'));//view-имя blade файла, var_name-имя переменной нашего класса


//        $category = Category::find(1);//отношение 1 к многим
//        dd($category->posts);

//        $posts = Post::find(1);//отношение 1к1
//        dd($posts->category);

//        $categories = Category::find(1);//отношение 1 к многим
//        $posts = Post::where('category_id', $categories->id)->get();
//        dd($posts);
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('post.create', compact('categories', 'tags'));
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required|string',
            'content' => 'string',
            'image' => 'string',
            'category_id' => '',
            'tags' => '',
        ]);

        $tags = $data['tags'];
        unset($data['tags']);

        $post = Post::query()->create($data);

        $post->tags()->attach($tags);

        return redirect()->route('post.index');
    }

    public function show(Post $post)
    {
//        dd($post->title);
        return view('post.show', compact('post'));
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('post.edit', compact('post', 'categories', 'tags'));
    }

//    public function show($id)
//    {
////        $post = Post::findOrFail($id);//если ввести несуществующий id , будет ошибка 404))
////        $post = Post::query()->find($id);//если ввести несуществующий id , будет непонятная ошибка для пользователя
////        dd($post->title);
////        dd($id);
//    }

    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'category_id' => '',
            'tags' => '',
        ]);
        $tags = $data['tags'];
        unset($data['tags']);

        $post->update($data);
        $post->tags()->sync($tags);
        return redirect()->route('post.show', $post->id);
    }


    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }
}










