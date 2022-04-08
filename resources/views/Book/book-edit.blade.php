@include('admin')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
      <a href="/book/view">Back</a>
  <form action="/book/update/{{$book->b_id}}" method ="post">
  {!! csrf_field() !!}
        <div class="container">
        <h1 class="text-center">Edit Book</h1>
        <div class="form-group">
            <label for="">BookName</label>
            <input type="text" name="name" id ="" class="form-control" placeholder="Name" aria-describedby="helpId" required value="{{$book->name}}">
            <span class="text-danger">
            @php
            foreach ($errors->get('name') as $message) {
             echo $message;
            }
            @endphp
            </span>
            <!-- <small id="helpId" class="text-muted">Help text</small> -->
        </div>
        <div class="form-group">
            <label for="">Author</label>
            <input type="text" name="author" id ="" class="form-control" placeholder="Author" aria-describedby="helpId" required value="{{$book->author}}">
            <span class="text-danger">
            @php

          foreach ($errors->get('author') as $message) {

            echo $message;

           }

           @endphp
            </span>
            <!-- <small id="helpId" class="text-muted">Help text</small> -->
        </div>
        <div class="form-group">
            <label for="">Category</label>
            <input type="text" name="category" id ="" class="form-control" placeholder="Category" aria-describedby="helpId" required value="{{$book->category}}">
            <span class="text-danger">
            @php

          foreach ($errors->get('category') as $message) {

            echo $message;

           }

           @endphp
            </span>
            <!-- <small id="helpId" class="text-muted">Help text</small> -->
        </div>
        <div class="form-group">
            <label for="">Publisher</label>
            <input type="text" name="publisher" id ="" class="form-control" placeholder="Category" aria-describedby="helpId" required value="{{$book->publisher}}">
            <span class="text-danger">
            @php

          foreach ($errors->get('publisher') as $message) {

            echo $message;

           }

           @endphp
            </span>
            <!-- <small id="helpId" class="text-muted">Help text</small> -->
        </div>
       <!-- <small id="helpId" class="text-muted">Help text</small> -->
        </div>
        <button class="btn-btn-primary">
            submit
        </button>
    </div>
</form>
  </body>
</html>