

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table </title>

    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet"/>
</head>
<body>

    <div class="container mt-5">
        <div class="pull-right">
            <a class="btn " href="{{route('car.index')}}" style="background-color: #15a0e1;color:rgb(255, 255, 255)"> <i class="fas fa-angle-double-left"></i> Back</a>
        </div>
    </div>

<div class="container mt-2 ">
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-6">
            <div class="card text-center" style="width: 18rem;">
                <img src="{{asset('./uploads/'.$showcar->img_car)}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Type_car : {{$showcar->type_car}} </h5>
                  <p class="card-text">{{$showcar->informations}}</p>
                  <div class="card-footer text-muted">N' car : {{$showcar->n_car}}</div>
                  <div class="card-footer text-muted">Prix : {{$showcar->price}}</div>
                </div>
              </div>
          </div>
        <div class="col-lg-3"></div>
    </div>


 <!-- MDB -->
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"></script>

</body>
</html>


