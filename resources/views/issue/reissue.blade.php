<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <a href="/issue-view">Back</a>
  <form action="/reissue/{{$issue->id}}" method ="post">
  {!! csrf_field() !!}
        <div class="container">
        <h1 class="text-center">Student Registeration</h1>
         <div class="form-group">
            <label for="">Return Date</label>
            <input type="date" name="return_date" id ="name" class="form-control"required>
            <span class="text-danger">
            @php
            foreach ($errors->get('Returndate') as $message) {
             echo $message;
            }
            @endphp
            </span>
           
        </div>
  
     
            <!-- <small id="helpId" class="text-muted">Help text</small> -->
        </div>
        <button type="submit">
            Reissue
          </button>
    </div>
</form>
  </body>
</html>