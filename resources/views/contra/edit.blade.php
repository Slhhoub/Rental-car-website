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
    <title>Document</title>
</head>
<body >
    <div class="container mt-5">
        <div class="pull-right">
            <a class="btn " href="{{route('contraform.index')}}" style="background-color: #15a0e1;color:rgb(255, 255, 255)"> <i class="fas fa-angle-double-left"></i> Back</a>
        </div>
    </div>

    <div class="container" style="margin-top:45px;">
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
     <form  action="{{route('contra.update', $editcontra->id)}}" method="POST" class="shadow bg-body rounded p-4 ">
          @csrf
          @method('PUT')
        <!-- 2 column grid layout with text inputs for the first and last names -->
            <h1 class="text-center" style="color: #15a0e1;">Update Contra</h1>
            <div class="row mb-4">
                <div class="col-lg text-center mb-2">
                <select class="form-select"  name="customer" value="{{$editcontra->customer}}" aria-label="Default select example" required>
                  <option value="1">{{$editcontra->customer}}</option>
                 </select>
                </div>
                <div class="col-lg">
                    <select class="form-select"  name="car" value="{{$editcontra->car}}" aria-label="Default select example" required>
                        <option value="{{$editcontra->id}}">{{$editcontra->car}}</option>
                       </select>
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-lg">
                  <div class="form-outline mb-2">
                    <input type="date" id="form6Example1" name="star_date" value="{{$editcontra->star_date}}" class="form-control" required/>
                    <label class="form-label" for="form6Example1">Start date</label>
                  </div>
                </div>
                <div class="col-lg">
                    <div class="form-outline">
                      <input type="date" id="form6Example1" name="end_date" value="{{$editcontra->end_date}}" class="form-control" required/>
                      <label class="form-label" for="form6Example1">End date</label>
                    </div>
                  </div>
              </div>
              <div class="row mb-4">
                <div class="col-lg">
                  <div class="form-outline">
                    <input type="text" id="form6Example2"  name="duration" value="{{$editcontra->duration}}" class="form-control" />
                    <label class="form-label" for="form6Example2">duration</label>
                  </div>
                </div>
                <div class="col-lg">
                    <div class="form-outline">
                      <input type="text" id="form6Example2"  name="prix" value="{{$editcontra->prix}}" class="form-control" />
                      <label class="form-label" for="form6Example2">price</label>
                    </div>
                  </div>
              </div>
            <!-- Submit button -->
            <div class="text-center">
                <button type="submit"  class="btn " style="background-color: #15a0e1;color:rgb(255, 255, 255)">ADD</button>
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
