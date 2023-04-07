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
    <h3>Show Post</h3>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">title</th>
          <th scope="col">description</th>
          <th scope="col">is_active</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td scope="row">{{$data->id}}</td>
          <td scope="row">{{$data->title}}</td>
          <td scope="row">{{$data->description}}</td>
          <td scope="row">{{$data->is_active === 1 ? "Active" : "Inactive" }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>