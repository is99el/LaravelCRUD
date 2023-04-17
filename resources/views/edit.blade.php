<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  @extends("layouts.master")
  @section('content')
  <div class="main-content mt-5">
  <div class="card">
    <div class="card-header">
<div class="row">

  <div class="col-md-6">
      <h4>Edit Posts</h4>
  </div>
      <div class="col-md-6 d-flex justify-content-end">
      <a href="{{route('posts.index')}}"class="btn btn-success mx-1" >Home</a>

    </div>
    </div>
  </div>

    <div class="card-body">
      <form action="" method="post" enctype="multipart/form-data">
        @csrf
      <div class="form-group">
        <div>
        <img src="{{asset($post->image)}}" alt="" width="200">
      </div>
        <label for="" class="form-label">Image</label>
        <input type="file" class="form-control">
      </div>

      <div class="form-group">
        <label for="" class="form-label">Title</label>
        <input type="text" placeholder="Category" class="form-control" value="{{$post->title}}">
      </div>

      <div class="form-group">
        <label for="" class="form-label">Category</label>
       <select name="" id="" class="form-control">
        <option value=""></option>
@foreach ($categories as $category )
<option {{$category->id == $post->category_id ? 'selected' : ''}} value="{{$category->id}}">{{$category->name}}</option>
@endforeach
       </select>
      </div>

      <div class="form-group">
        <label for="" class="form-label">Description</label>
  <textarea name="description" id="" cols="30" rows="10" class="form-control">{{$post->description}}</textarea>
      </div>

     

      <div class="form-group mt-5">
        <button class="btn btn-primary">Update</button>
      </div>
      
      </form>
    </div>
  </div>
</div>
  @endsection
  
</body>
</html>