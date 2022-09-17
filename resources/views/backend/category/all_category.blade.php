@extends('layouts.app') 
@section('content')
<div class="content-wrapper">
   <div class="container">
      <div class="content-header">
         <div class="container-fluid">
            <div class="row mb-2">
            </div>
           
         </div>
       
      </div>
      <div class="card card-primary">
         <div class="card-header">
            <h3 class="card-title">All categorys</h3>
         </div>
         
         <div class="card-body">
         <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>id</th>
                      <th>category name</th>
                      <th>category description</th>
                      <th>date</th>
                      <th>action</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    
                    @foreach($categorys as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->cat_name}}</td>
                        <td>{{$category->cat_description}}</td>
                        <td>{{$category->updated_at}}</td>
                        <td>
                            <div class="row" style="disply:flex;">
                                <div class="col-md-6"><i class="fa-solid fa-pen-to-square"></i></div>
                                <div class="col-md-6"><i class="fa-solid fa-pen-to-square"></i></div>
                            </div>
                        </td>
                    </tr>

                    @endforeach    
                      
                    
                  </tbody>
                </table>
            
         </div>
        
      </div>
   </div>
</div>
@endsection