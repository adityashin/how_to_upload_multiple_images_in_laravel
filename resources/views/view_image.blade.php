<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
      <div class="container my-5">
        <center>
            <h1>Multiple Images Display</h1>
        </center>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Images</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach($image as $i)
    <tr>
      <td>{{$i->id}}</td>
      <td>@foreach(json_decode($i->filenames) as $image)
        <img src="/files/{{$image}}" alt="can't load image" height="100" width="100">
        @endforeach
    </td>
    <td><a href="{{route('image.edit',$i->id)}}" class="btn btn-primary text-white">Update</a></td>
    <td>
        <form method="post" action="{{route('image.destroy',$i->id)}}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger text-light ">Delete</button>
        </form>
    </td>
</tr>
@endforeach
  </tbody>
</table><button type="">
    <a href="{{route('image.create')}}">Add Image</a>
</button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>