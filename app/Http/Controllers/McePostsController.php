<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class McePostsController extends Controller
{
    public function ExamPostsUpdate(Request $request)
    {
        $id = $request->id;

        $post = Posts::find($id);
        // return $request->post;
        $post->body = $request->post;
        $post->status = "show";

        if ($post->save()) {
            return redirect()->route('admin.admission-assistance-create', ['id' => $id])->with('secondary', 'Post created Successfully!');
        }
    }
}