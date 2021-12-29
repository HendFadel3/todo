





<!DOCTYPE html>
<html lang="en">
<head>
  <title>edit</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>edit</h2>
  <form action="../update/{{$todo_arr->id}}">

  

  <div class="form-group">
    <label for="exampleInputName">Name</label>
    <input type="text" class="form-control" name="name" value="{{$todo_arr->name}}" id="exampleInputName" aria-describedby="" placeholder="Enter NEW List">
  </div>


  
 
  
  <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>

</body>
</html>












