@extends('layout.master')

@section('content')
    


<!DOCTYPE html>
<head>
<!--bootstrap-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
       
<!--end bootrap-->


<!--css-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href=" https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<!---end css-->



        <!--scripts-->
<script src=" https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<!--end script-->
        
  
</head>
<html>
    <body>
            <script>
                    $(document).ready(function() {
                    $('#example').DataTable();
                } );
                    </script>

<div class="container">
        
        <table class="table table-striped" id="example">
          <thead>
            <tr >
           
              <th>NAME</th>
              <th>PHONE #</th>
              <th>CNIC</th>
              <th>ADDRESS</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $item)
                
              <tr>
              <td>{{$item['name']}}</td>
                <td>{{$item['ph']}}</td>
                <td>{{$item['cnic']}}</td>
                <td>{{$item['address']}}</td>
              </tr>
                      @endforeach

  
      

                  
          </tbody>
        </table>
        
      </div>
      </div><!--COL-->



    </body>
</html>


@endsection