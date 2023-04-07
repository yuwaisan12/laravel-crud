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
  <button class="btn btn-success"><a href="{{route('blog.create')}}" class="text-decoration-none text-white">Add</a></button>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">name</th>
          <th scope="col">description</th>
          <th scope="col">action</th> 
        </tr>
      </thead>
      <tbody> 
        @foreach($data as $item)
          <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->description}}</td>
            <td>
              <button class="btn btn-primary"><a href="{{route('blog.edit',$item->id)}}" class="text-decoration-none text-white">Edit</a></button>
              <button class="btn btn-success"><a href="{{route('blog.show',$item->id)}}" class="text-decoration-none text-white">View</a></button>
              <form action="{{route('blog.destroy',$item->id)}}" method="post" class="d-inline-block">
              @csrf
              {{method_field('DELETE')}}
                <button class="btn btn-sm btn-danger">Delete</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>