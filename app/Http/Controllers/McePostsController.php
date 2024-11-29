<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class McePostsController extends Controller
{
    public function generateSlug($title)
    {
        return Str::slug($title);
    }

    public function ExamPostsUpdate(Request $request)
    {
        $id = $request->id;

        $post = Posts::find($id);
        $post->body = $request->post;
        $post->status = "show";

        if ($post->save()) {
            return redirect()->route('admin.admission-assistance-create', ['id' => $id])->with('secondary', 'Post created Successfully!');
        }
    }

    public function storeBlogPost(Request $request)
    {

        $request->validate([
            'post_title' => 'required',
            // 'slug' => 'required|unique:blogs',
            // 'post' => 'required',
            // 'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'thumbnail' => 'required|max:2048',
        ]);

        $imageName = time() . '.' . $request->thumbnail->extension();

        $thumbnail = $request->thumbnail->storeAs('blogs', $imageName, 'public');
        $cd = Blog::updateOrCreate([
            'post_title' => $request->get('post_title'),
            'thumbnail' => $thumbnail,
            'post' => $request->get('post'),
            'user_id' => $request->get('user_id'),
            'slug'  => $this->generateSlug($request->post_title),
        ]);
        if($cd){
            return redirect()->route('admin.blog-posts');
        }
        
    }
}