<html lang="en">
<head>
  <title>Laravel 9 Multiple Image Upload Real Programmer</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
  <div class="jumbotron text-center" style="margin-bottom:0">
  <h2>Laravel Multiple Image Upload </h2>
</div>
<br>
<div class="container"> 
<form method="post" action="{{route('image.store')}}" enctype="multipart/form-data">
    @csrf
  
    <div class="input-group realprocode control-group lst increment" >
      <input type="file" name="filenames[]" class="myfrm form-control" multiple>
    </div>
    
  
    <button type="submit" class="btn btn-success" style="margin-top:10px">Submit</button>
  
</form>        
</div>
</body>
</html>