@include('Student')
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
  <form action="{{url('/')}}/issue" method ="post">
  {!! csrf_field() !!}
        <div class="container">
        <h1 class="text-center">Book Issue</h1>
        <div class="form-group">
            <label for="">Student Name</label>
            <select class="form-control" name="s_id" required>
                                <option value="">Select Student ID</option>
                                @foreach ($students as $student)
                                    <option value='{{ $student->s_id }}'>{{ $student->s_id}}</option>
                                @endforeach
                            </select>
            <span class="text-danger">
            @php
            foreach ($errors->get('Student name') as $message) {
             echo $message;
            }
            @endphp
            </span>
            <!-- <small id="helpId" class="text-muted">Help text</small> -->
        </div>
        <div class="form-group">
            <label for="">Book Name</label>
            <select class="form-control" name="b_id" required>
                                <option value="">Select Name</option>
                                @foreach ($books as $book)
                                @if ($book->status!="N")
                                    <option value='{{ $book->b_id }}'>{{ $book->name }}</option>
                                    @endif
                                @endforeach
                            </select>
            <span class="text-danger">
            @php
            foreach ($errors->get('Book name') as $message) {
             echo $message;
            }
            @endphp
            </span>
            <!-- <small id="helpId" class="text-muted">Help text</small> -->
        </div>
       
        <button class="btn-btn-primary">
            submit
        </button>
    </div>
</form>
  </body>
</html>