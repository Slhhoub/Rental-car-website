@extends('navbar')
@section('navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Table cars</title>
    <link rel="stylesheet" href="styleourcar.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet"/>
</head>
<body>
     


<div class="container mt-5">
    <div class="row">
        @foreach ( $ourcar as $item)
        <div class="col-lg-4 mb-5">
            <div class="card text-center" style="width: 18rem;">
                <img src="{{asset('./uploads/'.$item->img_car)}}" class="card-img-top" alt="..."  style="width: 18rem;height:13rem">
                <div class="card-body">
                <h5 class="card-title">{{$item->type_car}} </h5>
                <p class="card-text">{{$item->informations}}</p>
                <div class="card-footer text-muted " >ñ car : {{$item->n_car}}</div>
                <div class="card-footer text-muted">Price : {{$item->price}}</div>

                                    <!-- Button trigger modal -->
                 <!--  <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" style="border-radius: 50px;">
                        Reservation    <i class="fas fa-plus"></i>
                    </button>!-->

                    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Customers</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="container-fluid" >
                        <div class="row">

                            <div class="col-lg-12 ">
                        <form  action="{{route('addclient.store')}}" method="POST" >
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
                                        <input type="text" id="form6Example1" name="numr_cart" class="form-control car" required />
                                        <label class="form-label " for="form6Example1">N° cart</label>
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
                                <div class="text-center mb-2">
                                    <button type="submit"  class="btn " style="background-color: #15a0e1;color:rgb(255, 255, 255)">ADD</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        </div>
                    </div>
                </div>
                </div>



            </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="d-flex justify-content-center my-4">
    {{$ourcar->links()}}
</div>

</div>




   <script>

 $(document).ready(function(){
       $('#end_dateclient').change(function(){
           // day
        var dat1=new Date($("#star_dateclient").val());
           var dat2=new Date($("#end_dateclient").val());
           var tim=dat2.getTime()-dat1.getTime();
           var day=tim/(1000*3600*24) ;
           $("#durationclient").val(day + ' j');

           var car=$('.car').val();
           $("#ncar").val(car);

       });
    });
</script>


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


 <!-- MDB -->
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"></script>

</body>
</html>
@endsection
