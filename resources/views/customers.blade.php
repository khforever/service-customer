<!DOCTYPE html>
<html lang="en">
<head>
  <title>customers service</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('includes.nav')
<div class="container">
  <h2>The list of customers</h2>
  <p></p>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>fullName</th>
       <th> address </th>
        <th>phone</th>
        <th>account_type</th>
        <th>type</th>
        <th>birthday </th>
        <th>notes</th>
        <th>Edit</th>
        <th>Show</th>
        <th>Delete</th>


      </tr>
    </thead>
    <tbody>
        {{-- {{$address}} --}}


        @foreach ($customers as $customer)



      <tr style="background-color: lightgray;">
        <td>{{$customer->fullName}}</td>






       <td>{{$customer->address}} </td>

        <td>{{$customer->phone}} </td>
        <td>{{$customer->account_type}}</td>
        <td>{{$customer->type}} </td>
        <td>{{$customer->birthday}}</td>
        <td>{{$customer->notes}} </td>

<td>
    <a class="btn btn-success" href="updateCustomer/{{ $customer->id }}">Edit</a>
</td>

<td>
    <a class="btn btn-info"  href="showCustomer/{{ $customer->id }}">show</a>
</td>
<td>
    <a  class="btn btn-danger" href="deleteCustomer/{{ $customer->id }}"onclick="return confirm('Are you sure you want to delete?')">Delete</a>
</td>

      </tr>

   @endforeach
    </tbody>

  </table>
</div>

</body>


<!--  onclick="return confirm('Are you sure you want to delete?')" -->
</html>

