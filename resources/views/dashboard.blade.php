@extends('navbar')
@section('navbar')
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
        
      <div class="col-lg-5 mt-5">
        <div class="mt-5 " >
            <h1 >Welcome <samp style="color:#15a0e1;">{{auth()->user()->name}}</samp> </h1>
            <h1 >To <samp style="color:#15a0e1;">Car-SM</samp> </h1>
        </div>
      </div>

      <div class="col-lg-7 mt-5">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                 <div class="carousel-inner">
                     <div class="carousel-item active">
                            <img src="homecar1.png" class="d-block w-100" alt="...">
                     </div>
                 </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Next</span>
                    </button>
            </div>
        </div>

    </div>
</div>


<!--
    <div style="margin-top:98px">
    <p class="heading ">Our<span> CAR-SM </span> </p>
    <p  class="best-eater">The issue of feeding domestic cats is on the minds of most cat breeders <br>
    The best healthy food for domestic cats
    </p>
    </div>

!-->
</body>
</html

@endsection