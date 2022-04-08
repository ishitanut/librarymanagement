@include('Student')
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <form action="/return/{{$issue->id}}" method ="post">
  {!! csrf_field() !!}
        <div class="container">
        <h1 class="text-center">Return Book</h1>
        <div class="form-group">
            <label for="">Return Day</label>
            <input type="date" name="return_date" class="form-control"required >
            <span class="text-danger">
            @php
            foreach ($errors->get('Returnday') as $message) {
             echo $message;
            }
            @endphp
            </span>
            <!-- <small id="helpId" class="text-muted">Help text</small> -->
        </div>
            <!-- <small id="helpId" class="text-muted">Help text</small> -->
            <<button type="submit" class="btn btn-primary">Return</button>
       
    </div>
</form>
  </body>
</html>