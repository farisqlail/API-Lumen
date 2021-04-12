<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller {

    public function index() {

        $blogs = Blog::all();

        return response()->json($blogs);
    }

    public function create(Request $request){

        $blog = new Blog;

        $blog->name = $request->name;
        $blog->content = $request->content;

        $blog->save();
        return response()->json($blog);
    }

    public function show($id){

        $blog = Blog::find($id);

        return response()->json($blog);
    }

    public function update(Request $request, $id){

        $blog = Blog::find($id);

        $blog->name = $request->input('name');
        $blog->content = $request->input('content');

        $blog->save();
        return response()->json($blog);
    }

    public function destroy($id){

        $blog = Blog::find($id);
        $blog->delete();

        return response()->json('Blog berhasil dihapus');

    }

}
