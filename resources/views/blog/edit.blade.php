<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{asset('css/boostrap.min.css')}}" rel="stylesheet" ></link>
  <script src="{{asset('js/boostrap.bundle.min.js')}}"></script>
  <title>Document</title>
</head>
<body>
  <div class="container">
    <h3>Edit Blog</h3>
    <form action="{{route('blog.update',$result->id)}}" method="post">
      @csrf
      {{method_field('PATCH')}}
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="name" value={{$result->name}}>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Description</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="description" value={{$result->description}}>
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>
</body>
</html>