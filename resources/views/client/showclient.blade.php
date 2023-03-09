
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
            <a class="btn " href="{{route('clients.index')}}" style="background-color: #15a0e1;color:rgb(255, 255, 255)"> <i class="fas fa-angle-double-left"></i> Back</a>
        </div>
    </div>

<div class="container mt-2 ">
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-5">
            <div class="card  " style="width: 18rem;">
                <div class="card-footer bg-light px-3 text-center">Table Customer</div>
                <ul class="list-group list-group-light list-group-small text-center">
                  <li class="list-group-item px-3">Prenom :  {{$showclient->prenom}}</li>
                  <li class="list-group-item px-3">Nom :  {{$showclient->nom}}</li>
                  <li class="list-group-item px-3">Numr_cart :  {{$showclient->numr_cart}}</li>
                  <li class="list-group-item px-3">City :   {{$showclient->city}}</li>
                  <li class="list-group-item px-3">Address :  {{$showclient->address}}</li>
                  <li class="list-group-item px-3">Telephone : {{$showclient->telephone}}</li>
                </ul>
              </div>
        </div>
        <div class="col-lg-3"></div>
    </div>
   

 <!-- MDB -->
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"></script>

</body>
</html>

