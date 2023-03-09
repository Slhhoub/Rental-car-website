

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

    <div class="container mt-2">
        <div class="pull-right">
            <a class="btn " href="{{route('car.index')}}" style="background-color: #15a0e1;color:rgb(255, 255, 255)"> <i class="fas fa-angle-double-left"></i> Back</a>
        </div>
    </div>

<div class="container  " style="margin-top:45px;">
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
        <form  action="{{route('updatecar.update',$editcar->id)}}" method="post" enctype="multipart/form-data" class="shadow bg-body rounded p-4 ">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <h1 class="text-center" style="color: #15a0e1;">Update car</h1>
            @csrf
            @method('PUT')
            <div class="row mb-4">
                <div class="col-lg">
                  <div class="form-outline">
                    <input type="text" id="form6Example1" name="n_car" value="{{$editcar->n_car}}" class="form-control" />
                    <label class="form-label" for="form6Example1">N° car</label>
                  </div>
                </div>
                <div class="col-lg mt-2">
                  <div class="form-outline">
                    <input type="text" id="form6Example2" name="type_car" value="{{$editcar->type_car}}" class="form-control" />
                    <label class="form-label" for="form6Example2">type car</label>
                  </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-lg">
                  <div class="form-outline">
                    <input type="date" id="form6Example2" name="Date_taking" value="{{$editcar->Date_taking}}"  class="form-control" />
                    <label class="form-label" for="form6Example2">Date taking</label>
                  </div>
                </div>
                <div class="col-lg mt-2">
                  <div class="form-outline">
                    <input type="text" id="form6Example2" name="price" value="{{$editcar->price}}" class="form-control" />
                    <label class="form-label" for="form6Example2">price</label>
                  </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-lg mb-2">
                  <div class="form-outline">
                    <input type="file" id="form6Example1" class="form-control" name="img_car" value="{{asset('./uploads/'.$editcar->img_car)}}" placehoder= "choose picture" accept="image/*,.jpg,.png"/>
                  </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg">
                <div class="form-outline mb-4">
                     <textarea class="form-control" id="form4Example3" name="informations"  rows="4">{{$editcar->informations}}</textarea>
                    <label class="form-label" for="form4Example3">+Informations</label>
                    </div>
                </div>
            </div>

            <!-- Submit button -->
            <div class="text-center">
                <button type="submit"  class="btn " style="background-color: #15a0e1;color:rgb(255, 255, 255)">Update</button>
              </div>
          </form>
      </div>
    </div>

    </div>

     <!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"></script>
</body>
</html>


