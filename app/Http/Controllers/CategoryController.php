<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorys;

class CategoryController extends Controller
{

    public function add(){

        return view('backend.category.add_category');

    }

    public function all(){
        $categorys=Categorys::orderBy('id','desc')->get();

        

        
        return view('backend.category.all_category',compact('categorys'));
    }

    public function create(Request $request){

        $validated = $request->validate([
            'cat_name' => 'required',
            'cat_description' => 'required',
        ]);

        $category=Categorys::create([
            'cat_name'=>$request->input('cat_name'),
            'cat_description'=>$request->input('cat_description'),

        ]);

        $notification=array(
            'message'=>'Category Inserted Successfully',
            'alert-type'=>'success'
        );
  
        return Redirect()->route('category.all')->with($notification);



        

    }
    
}
