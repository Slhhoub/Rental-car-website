
@extends('navbar')
@section('navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet"/>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body >

 
   
   </div>
    <div class="container shadow-sm bg-body rounded p-5 " style="margin-top:65px;">
    <div class="row">
    <div class="col-lg-6 mt-1">
        <img src="addcus.png" alt="" srcset="" width="100%">
      </div>
      <div class="col-lg-6">
      <div class="card-header">Add Customer</div>
     <form  action="{{route('addclient.store')}}" method="POST" class="">
          @csrf
        <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4 mt-3">
              <div class="col-lg">
                <div class="form-outline mb-2">
                  <input type="text" id="form6Example1" name="prenom" class="form-control" required />
                  <label class="form-label" for="form6Example1">First name</label>
                </div>

              </div>
              <div class="col-lg">
                <div class="form-outline">
                  <input type="text" id="form6Example2" name="nom" class="form-control" required/>
                  <label class="form-label" for="form6Example2">Last name</label>
                </div>
              </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg">
                  <div class="form-outline mb-2">
                    <input type="text" id="form6Example1" name="numr_cart" class="form-control " required />
                    <label class="form-label" for="form6Example1">N° cart</label>
                  </div>
                </div>
                <div class="col-lg">
                  <div class="form-outline">
                    <input type="text" id="form6Example2" name="city" class="form-control" required />
                    <label class="form-label" for="form6Example2">City</label>
                  </div>
                </div>
              </div>

            <div class="row mb-4">
                <div class="col-lg">
                  <div class="form-outline mb-2  ">
                    <input type="text" id="form6Example1" name="address" class="form-control" required />
                    <label class="form-label" for="form6Example1">Address</label>
                  </div>
                </div>
                <div class="col-lg">
                  <div class="form-outline">
                    <input type="text" id="form6Example2" name="telephone" class="form-control" required />
                    <label class="form-label" for="form6Example2">Phone</label>
                  </div>
                </div>
            </div>
            <!-- Submit button -->
            <div class="text-center">
                <button type="submit"  class="btn " style="background-color: #15a0e1;color:rgb(255, 255, 255)">ADD Customer</button>
              </div>
          </form>
      </div>
     
    </div>

    </div>

    <script>
        $(document).ready(function(){
              $('#end_date').change(function(){
                  // day
               var dat1=new Date($("#star_date").val());
                  var dat2=new Date($("#end_date").val());
                  var tim=dat2.getTime()-dat1.getTime();
                  var day=tim/(1000*3600*24) ;
                  $("#durationclient").val(day + ' j');
                  //price 
                 // var price = day*250;
                 


              });
           });
       </script>

    <!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"></script>
</body>
</html>


@endsection
