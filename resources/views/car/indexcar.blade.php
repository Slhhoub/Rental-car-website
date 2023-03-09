@extends('admin')
@section('admin')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TableCar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <div class="container-fluid ml-5 text-center">
        @if ($message=Session::get('success'))
        <div class="alert alert-success" role="alert">
         {{$message}}
       </div>
        @endif
    </div>

<div class="container-fluid table-responsive">
  <div class="row">
    <div class="col-lg-2 mr-5"></div>
    <div class="col-lg-9">
    <div class="card-header mt-5">Table_Car</div>
<table class="table  shadow p-3 mb-5 bg-body rounded text-center">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">NumeroCar</th>
      <th scope="col">TypeCar</th>
      <th scope="col">datTake</th>
      <th scope="col">price</th>
      <th scope="col">image</th>
      <th scope="col">+info</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
        @php
        $i=0;
    @endphp
    @foreach ( $car as $item)
  <tr>
    <th scope="row">{{++$i}}</th>
    <td >{{$item->n_car}}</td>
    <td >{{$item->type_car}}</td>
    <td>{{$item->Date_taking}} </td>
    <td>{{$item->price}}</td>
    <td>{{ $item->img_car}}</td>
    <td>{{$item->informations}}</td>
      <td class="text-center">
        <div class="row">
            <div class="col">
                <a  href ="{{route('editcar.edit',$item->id)}}"><button type="submit" class="btn btn-success btn-rounded" style="border-radius: 50px;"><i class="fa-solid fa-square-pen"  ></i></button></a>
            </div>
            <div class="col">
                <a  href ="{{route('car.show',$item->id)}}"><button type="submit" class="btn btn-info btn-rounded" style="border-radius: 50px;color:white"><i class="fas fa-eye"></i></button></a>
            </div>
            <div class="col">
              <form action="{{route('deletecar.delete',$item->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-rounded" style="border-radius: 50px;" ><i class="  fa-solid fa-trash-can"></i> </button>
              </form>
            </div>
          </div>


    </form>
    </td>
    </tr>
    @endforeach
  </tbody>

</table>
    </div>
  </div>


<div class="d-flex justify-content-center my-4">
    {{$car->links()}}
</div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
@endsection
