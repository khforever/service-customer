<!DOCTYPE html>
<html lang="en">



<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('includes.nav')
<div class="container">
  <h2>update customer</h2>
  <form action="{{route('update',$customer->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    {{-- @method('put') --}}




    <div class="form-group">
      <label for="title">full Name</label>
      <input type="text" class="form-control" id="fullName" placeholder="Enter fullName" name="fullName" value="{{$customer->fullName}}">

    </div>


    <div class="form-group">
        <label for="title">account_type</label>
        <input type="text" class="form-control" id="account_type" placeholder="Enter account_type" name="account_type" value="{{$customer->account_type}}">

      </div>



      <div class="form-group">
        <label for="title">type</label>
        <input type="text" class="form-control" id="type" placeholder="Enter type" name="type" value="{{$customer->type}}">

      </div>





      <div class="form-group">
        <label for="title">birthday</label>
        <input type="date" class="form-control" id="birthday" placeholder="Enter birthday" name="birthday" value="{{$customer->birthday}}">

      </div>





    <div class="form-group">
      <label for="description">notes:</label>
      <textarea class="form-control" name="notes" id="" cols="60" rows="3">{{$customer->notes}} </textarea>


    </div>



    <button type="submit" class="btn btn-info">Update</button>
  </form>
</div>

</body>
</html>
