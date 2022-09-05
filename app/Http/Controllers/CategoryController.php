<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorys;

class CategoryController extends Controller
{

    public function add(){
        return view('backend.category.add_category');

    }

    public function create(Request $request){

        $category=new Categorys();

        $category->cat_name=$request->input('cat_name');
        $category->cat_description=$request->input('cat_description');

        $category->save();

        

    }
    
}
