@extends('admin-layout')
@section('category')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li class="active">Icons</li>
        </ol>
    </div><!--/.row-->
    
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Category</h1>
        </div>
    </div><!--/.row-->
    <div class="container">
          
           @if (Session::has('successMessage'))
            <div class="alert-success">
                {{ Session::get('successMessage') }}
            </div> 
            @endif
        
      <div class="row">
        <div class="col-md-6">
          @if ($category)
            <form action="{{ route('category.update') }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $category->id }}">
                <div class="form-group">
                    <label for=""> Name</label>
                    <input type="text" name="CategoryName" class="form-control" value="{{ $category->name }}">
                </div>
        
                <div class="form-group">
                <label for=""> Description</label>
                    <input type="text" name="CategoryDescription" class="form-control" value="{{ $category->description }}">
                </div>
                <div class="form-group">
                    <input type="submit"  class="form-control btn btn-success" value="Update Category">
                </div>
            </form>
          @else
            <form action="{{ route('category.save') }}" method="post">
                    {{ csrf_field() }}
                <div class="form-group">
                    <label for=""> Name</label>
                    <input type="text" name="CategoryName" class="form-control">
                </div>
            
                <div class="form-group">
                <label for=""> Description</label>
                    <input type="text" name="CategoryDescription" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit"  class="form-control btn btn-success" value="Add Category">
                </div>
            </form>
          @endif
        </div>
     </div>
      </div>
        </div>
</div>
@endsection