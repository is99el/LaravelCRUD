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
      <h4>Post</h4>
  </div>
      <div class="col-md-6 d-flex justify-content-end">
      <a href="{{route('posts.index')}}"class="btn btn-success mx-1" >Home</a>
    </div>
    </div>
  </div>
    <div class="card-body">
      <table class="table table-striped table-bordered border-dark">

        <tbody>
        
          <tr>
            <td>Id</td>
            <td>{{$post->id}}</td>
           </tr>

           <td>Foto</td>
           <td><img width="300px" src="{{{asset($post->image)}}}" alt=""></td>
          </tr>

           <td>Titel</td>
           <td>{{$post->title}}</td>
          </tr>

          <td>Categorie</td>
          <td>{{$post->category->name}}</td>
         </tr>

         <td>Beschrijving</td>
         <td>{{$post->description}}</td>
        </tr>

        <td>Datum</td>
        <td>{{date('d-m-Y',strtotime($post->created_at))}}</td>
       </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
  @endsection
  
</body>
</html>