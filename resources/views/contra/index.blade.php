@extends('navbar')
@section('navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TableCustomers</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>


<div class="container ">
    <div class="row">
        <div class="col">
            <div class="container ">
                <div class="pull-right">
                    <a class="btn " href="{{route('contra.index')}}" style="background-color: #15a0e1;color:rgb(255, 255, 255)"><i class="fas fa-plus-circle"></i> New contra</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6"></div>
        <div class="col">
            <div class="container ">
                <div class="pull-left">
            <!--        <a class="btn " href="" type="submit" style="background-color: #15a0e1;color:rgb(255, 255, 255)"><i class="fas fa-cloud-download-alt"></i> Download contra</a> !-->
                </div>
            </div>
        </div>
    </div>
</div>


<!--
      <div class="container-fluid">
        <a class="btn " href="" style="background-color: #15a0e1;color:rgb(255, 255, 255)"><i class="fas fa-plus-circle"></i> New contra</a>
      </div> !-->

        <div class="container mt-2 text-center">
            @if ($message=Session::get('success'))
            <div class="alert alert-success" role="alert">
             {{$message}}
           </div>
            @endif
        </div>


<div class="container-fluid table-responsive">
       <!-- <input type="submit"  class="btn"  value="  Download contra" style="background-color: #15a0e1;color:rgb(255, 255, 255)"> !-->
        <table class="table mt-5 shadow p-3 mb-5 bg-body rounded text-center">
            <thead>
                <tr>
            <!--    <th scope="col">check</th>!-->
                <th scope="col">id</th>
                <th scope="col">Customer</th>
                <th scope="col">Car</th>
                <th scope="col">Start date</th>
                <th scope="col">End date</th>
                <th scope="col">duration</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contract as $item)
                <tr>
              <!--   <th scope="row">
                        <input class="form-check-input" type="checkbox" name="ids" value="" id="flexCheckChecked" >
                </th>!-->
                <td scope="row">{{$item->id}} </td>
                <td >{{$item->customer}}</td>
                <td >{{$item->car}}</td>
                <td>{{$item->star_date}}</td>
                <td>{{$item->end_date}}</td>
                <td>{{$item->duration}}</td>
                <td> {{$item->prix}} </td>
                <td class="text-center">
                <div class="row">
                    <div class="col">
                        <a  href ="{{route('contra.edit',$item->id)}}"><button type="submit" class="btn btn-success btn-rounded" style="border-radius: 50px;"><i class="fa-solid fa-square-pen"  ></i></button></a>
                    </div>
                    <div class="col">
                        <a  href ="{{route('show.contra',$item->id)}}"><button type="submit" class="btn btn-info btn-rounded" style="border-radius: 50px;color:white"><i class="fas fa-cloud-download-alt"></i></button></a>
                    </div>
                <div class="col">
                    <form action="{{route('delete.contra',$item->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-rounded" style="border-radius: 50px;" ><i class="  fa-solid fa-trash-can"></i> </button>
                    </form>
                </div>
                </div>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    <div class="d-flex justify-content-center my-4">
        {{$contract->links()}}
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>


@endsection
