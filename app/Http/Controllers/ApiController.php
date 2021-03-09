<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blog;

class ApiController extends Controller
{
    //
    public function getBlog()
    {
        $user = Blog::get();
        return response()->json($user);
    }

    public function storeBlog(Request $request)
    {
        $title = $request->input('title');
        $title_bn = $request->input('title_bn');
        $description = $request->input('description');
        $description_bn = $request->input('description_bn');
        
        $data = [
            "title" => $title,
            "title_bn" => $title_bn,
            "description" => $description,
            "description_bn" => $description_bn
        ];

        Blog::create($data);

        return response()->json("Blog Created successfully");
    }

    public function editBlog($id)
    {
        $single_blog = Blog::find($id)->first();
        return response()->json($single_blog);
    }

    public function updateBlog(Request $request,$id)
    {
        $blog = Blog::find($id);

        $blog->update($request->all());
  
        return response()->json('successfully updated');
    }

    public function deleteBlog($id)
    {
      $blog = Blog::find($id);

      $blog->delete();

      return response()->json('successfully deleted');
    }

}
