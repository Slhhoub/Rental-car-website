@extends('admin')
@section('admin')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
    <link rel="stylesheet" href="styleourcar.css">

</head>
<body>

<div class="container mb-3" style="margin-top:35px">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-5">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                 <div class="carousel-inner">
                     <div class="carousel-item active">
                            <img src="adm2.png" class="d-block w-100" alt="..." style="height:470px ;">
                     </div>
                 </div>
            </div>
        </div>
      <div class="col-lg-5 mt-5">
        <div class="mt-5 " >
            <h1 >Welcome to espace <samp style="color:#15a0e1;">Admin</samp> </h1>
            
        </div>
      </div>
      
    </div>
</div>

</body>
</html

@endsection