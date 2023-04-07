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
    <h3>Edit Post</h3>
      <form action="{{route('post.update',$data->id)}}" method="post">
        @csrf
        {{method_field('PATCH')}}
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Title</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="title" value={{$data->title}} >
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Description</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="description" value={{$data->description}}>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="radio" id="flexRadioDefault1" value="isActive" {{$data->is_active === 1 ? "checked" : ""}}>
          <label class="form-check-label" for="flexRadioDefault1">
            is_active
          </label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="radio" id="flexRadioDefault2" value="none-active" {{$data->is_active === 0 ? "checked" : ""}}>
          <label class="form-check-label" for="flexRadioDefault2">
            none_active
          </label>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</body>
</html>