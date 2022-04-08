@include('admin')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
  <body>
  
      <div class="container">
              <input  style="background-color:light-green;" class="form-control" id="myInput" type="text" placeholder="Search..">
            <br>
    <table class="table table-bordered table-striped">
              <thead>
                  <tr>
                      <th>S.no</th>
                      <th>Book Name</th>
                      <th>Phone Number</th>
                      <th>Email</th>
                      <th>Issue_date</th> 
                      <th>Return Date</th>
                  </tr>
              </thead>
              <tbody id="myTable">
                  @foreach($data as $issue)
                  <tr>
                      <td>{{$issue->id}}
                      <td>{{$issue->name}}</td>
                      <td>{{$issue->phonenumber}}</td>
                      <td>{{$issue->email}}</td>
                      <td>{{date("d.m.y",$issue->issue_date)}}</td>
                      <td>{{date("d.m.y",$issue->return_date)}}</td>              
                  </tr>
                  @endforeach
              </tbody>
          </table>
      </div>
      <script>
  $(document).ready(function(){
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
  </script>            
  </body>
</html>