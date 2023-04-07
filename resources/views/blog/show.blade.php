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
    <h3>Show Blog</h3>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">name</th>
          <th scope="col">description</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td scope="row">{{$result->id}}</td>
          <td scope="row">{{$result->name}}</td>
          <td scope="row">{{$result->description}}</td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>