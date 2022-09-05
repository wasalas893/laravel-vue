@extends('layouts.app') 
@section('content')

<div class="content-wrapper">
    <div class="container">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add categorys</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{route('category.create')}}" method="post">
                {{ csrf_field() }}
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Caegory Name</label>
                        <input type="text" name="cat_name" class="form-control" placeholder="Enter category name">
                      </div>
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Category Description</label>
                        <textarea class="form-control" name="cat_description" rows="3" placeholder="Enter category description"></textarea>
                      </div>
                    </div>
                   
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">submit</button>
                    </div>
                  </div>

                 

                 
                </form>
              </div>
              <!-- /.card-body -->
            </div>

</div>
</div>


@endsection