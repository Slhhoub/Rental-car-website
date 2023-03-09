@extends('navbar')
@section('navbar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajouter_car</title>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet"/>
</head>
<body>

<div class="container  shadow-sm bg-body rounded p-2" style="margin-top:0px;">
    <div class="row">
      <div class="col-lg-6">
        <img src="addcars.png" alt="" srcset="" width="100%">
      </div>
      <div class="col-lg-6">
      <div class="card-header">Add Car</div>
        <form name="formAdd" action="{{route('addcar.store')}}" method="POST" enctype="multipart/form-data" class="" >
            <!-- 2 column grid layout with text inputs for the first and last names -->
            @csrf
            <div class="row mb-4 mt-2">
                <div class="col-lg mb-2">
                  <div class="form-outline">
                    <input type="text" id="form6Example1" name="n_car" class="form-control" />
                    <label class="form-label" for="form6Example1">N° car</label>
                  </div>
                </div>
                <div class="col-lg ">
                  <div class="form-outline">
                    <input type="text" id="form6Example2" name="type_car" class="form-control" />
                    <label class="form-label" for="form6Example2">type car</label>
                  </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-lg mb-2">
                  <div class="form-outline">
                    <input type="date" id="form6Example2" name="Date_taking" class="form-control" />
                    <label class="form-label" for="form6Example2">Date taking</label>
                  </div>
                </div>
                <div class="col-lg ">
                  <div class="form-outline">
                    <input type="text" id="form6Example2" name="price" class="form-control" />
                    <label class="form-label" for="form6Example2">price</label>
                  </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-lg mb-2">
                  <div class="form-outline">
                    <input type="file" id="form6Example1" class="form-control" name="img_car" placehoder= "choose picture" >
                  </div>
                </div>
            </div>
            <div class="row mb-1">
                <div class="col-lg">
                <div class="form-outline mb-4">
                     <textarea class="form-control" id="form4Example3" name="informations" rows="4"></textarea>
                    <label class="form-label" for="form4Example3">+Informations</label>
                    </div>
                </div>
            </div>

            <!-- Submit button -->
            <div class="text-center">
                <button type="submit"  class="btn " style="background-color: #15a0e1;color:rgb(255, 255, 255)">ADD car</button>
              </div>
          </form>
      </div>
    </div>

    </div>

     <!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"></script>
</body>
</html>

@endsection
