<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Create</title>
</head>
<body>
  @extends("layouts.master")
  @section('content')
  <div class="main-content mt-5">
    @if ($errors->any())
    @foreach ($errors->all() as $error)
      <div class="alert alert-danger">{{$error}}</div>
    @endforeach
   @endif
  <div class="card">
    <div class="card-header">
<div class="row">

  <div class="col-md-6">
      <h4>Create Posts</h4>
  </div>
      <div class="col-md-6 d-flex justify-content-end">
      <a href="{{route('posts.index')}}"class="btn btn-success mx-1" >Home</a>

    </div>
    </div>
  </div>


    <div class="card-body">
      <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="form-group">
        <label for="" class="form-label">Image</label>
        <input type="file" class="form-control" name="image">
      </div>

      <div class="form-group">
        <label for="" class="form-label">Title</label>
        <input type="text" placeholder="Title" class="form-control" name="title">
       </select>
      </div>

      <div class="form-group">
        <label for="" class="form-label">Category</label>
        <select id="" class="form-control" name="category_id">
          <option value="">Select</option>
          @foreach ( $categories as $category)
          <option value="{{$category->id}}">{{$category->name}}</option>
          @endforeach
         
      </div>

      <div class="form-group">
    <label for="" class="form-label">Description</label>
  <textarea  id="" cols="30" rows="10" class="form-control" name="description"></textarea>
      </div>


      <div class="form-group mt-5">
        <button class="btn btn-primary" >Submit</button>
      </div>
      
      </form>
    </div>
  </div>
</div>
  @endsection
  
</body>
</html>