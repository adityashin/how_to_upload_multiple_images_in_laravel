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
        <h1>Update Image</h1>

        </center>
        <form method="post" action="{{route('image.update',$image->id)}}" enctype="multipart/form-data">
            
            @csrf
            @method('PATCH')
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Select Image</label>
    <input type="file" class="form-control" name="filenames[]" multiple>
  </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Current Images</label>
    @foreach(json_decode($image->filenames) as $image)
    <img src="/files/{{$image}}" alt="Could't fetch" height="100" width="100">
    @endforeach
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>