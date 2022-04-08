<!doctype html>
<html lang="en">
  <head>
    <title>Admin Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <form action="{{url('/')}}/admin" method ="post">
  {!! csrf_field() !!}
        <div class="container">
        <h1 class="text-center">Admin Login</h1>
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" id ="" class="form-control" placeholder="Name" aria-describedby="helpId" value="{{old('name')}}">
            <span class="text-danger">
            @php
            foreach ($errors->get('name') as $message) {
             echo $message;
            }
            @endphp
            </span>
            <!-- <small id="helpId" class="text-muted">Help text</small> -->
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" id ="" class="form-control" placeholder="Password" aria-describedby="helpId">
            <span class="text-danger">
            @php

foreach ($errors->get('password') as $message) {

  echo $message;

 }

 @endphp
            </span>
            <!-- <small id="helpId" class="text-muted">Help text</small> -->
            <!-- <small id="helpId" class="text-muted">Help text</small> -->
        </div>
        <button class="btn-btn-primary">
            submit
        </button>
    </div>
    
  </body>
</html>