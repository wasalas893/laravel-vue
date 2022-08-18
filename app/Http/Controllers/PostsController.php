<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Posts;

class PostsController extends Controller
{

    public function Posts(){
        $posts=Posts::orderBy('id','desc')->get();
        return response()->json($posts);
    }
    
    public function CreatePost(Request $request){

        $this->validate($request, [
            "post_name" =>'required',
            "post_description" =>'required',

         ]);
         $posts=new Posts([
            'post_name'=>$request->post_name,
            'post_description'=>$request->post_description
         ]);
         $posts->save();

         return response()->json('The post successfully added');


    }

    public function EditPost($id){
        $posts=Posts::findOrFail($id);
        return response()->json($posts);
    }

    public function UpdatePost(Request $request,$id){

        $posts=Posts::findOrFail($id);

        $posts->post_name=$request->post_name;
        $posts->post_description=$request->post_description;

        $posts->update();
        return response()->json('The post successfully update');


    }

    public function DeletePost($id){
        $posts=Posts::findOrFail($id)->delete();

        return response()->json('The post succesfully deleted');
    }


    
}
