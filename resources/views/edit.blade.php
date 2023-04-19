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
    @if ($errors->any())
    @foreach ($errors->all() as $error)
      <div class="alert alert-danger">{{$error}}</div>
    @endforeach
   @endif
  <div class="card">
    <div class="card-header">
<div class="row">

  <div class="col-md-6">
      <h4>Edit Post</h4>
  </div>
      <div class="col-md-6 d-flex justify-content-end">
      <a href="{{route('posts.index')}}"class="btn btn-success mx-1" >Home</a>

    </div>
    </div>
  </div>

    <div class="card-body">
      <form action="{{route('posts.update',$post->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
      <div class="form-group">
        <div>
        <img src="{{asset($post->image)}}" alt="" width="200">
      </div>
        <label for="" class="form-label">Foto</label>
        <input name="image"type="file" class="form-control">
      </div>

      <div class="form-group">
        <label for="" class="form-label">Titel</label>
        <input name="title" type="text" placeholder="Category" class="form-control" value="{{$post->title}}">
      </div>

      <div class="form-group">
        <label for="" class="form-label">Categorie</label>
       <select name="category_id" id="" class="form-control">
        <option value=""></option>
@foreach ($categories as $category )
<option {{$category->id == $post->category_id ? 'selected' : ''}} value="{{$category->id}}">{{$category->name}}</option>
@endforeach
       </select>
      </div>

      <div class="form-group">
        <label for="" class="form-label">Beschrijving</label>
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