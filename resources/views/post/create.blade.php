<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" ></link>
  <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
  <title>Document</title>
</head>
<body>
  <div class="container">
    <h3>Create Post</h3>
    <form action="{{route('post.store')}}" method="post">
      @csrf
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Title</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="title">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Description</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="description">
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="radio" id="flexRadioDefault1" value="isActive">
        <label class="form-check-label" for="flexRadioDefault1">
          is_active
        </label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="radio" id="flexRadioDefault2" value="none-active">
        <label class="form-check-label" for="flexRadioDefault2">
         none_active
        </label>
      </div>
      <div>
      <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      
    </form>
  </div>
</body>
</html>