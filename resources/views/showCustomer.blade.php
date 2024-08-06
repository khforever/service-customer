<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>customer</title>
</head>
<body>
    @include('includes.nav')
  

    <h1> welcome {{$customer->fullName}}</h1>

<table class="table table-hover" >
    <thead>
      <tr >
        <th>fullName</th>
       <th> address </th>
        <th>phone</th>
        <th>account_type</th>
        <th>type</th>
        <th>birthday </th>
        <th>notes</th>



      </tr>
    </thead>
    <tbody>




      <tr style="background-color: lightgray;">
        <td>{{$customer->fullName}}</td>






       <td>{{$customer->address}} </td>

        <td>{{$customer->phone}} </td>
        <td>{{$customer->account_type}}</td>
        <td>{{$customer->type}} </td>
        <td>{{$customer->birthday}}</td>
        <td>{{$customer->notes}} </td>


      </tr>

    </tbody>

  </table>
</body>
</html>
