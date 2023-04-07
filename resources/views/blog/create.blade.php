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
    <h3>Create Blog</h3>
    <form action="{{route('blog.store')}}" method="post">
      @csrf
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="name">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Description</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="description">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>
</html>