@extends('admin')
@section('admin')
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
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-2 mr-5"></div>
<div class="col-lg-9">

        <div class="container mt-2 text-center">
            @if ($message=Session::get('success'))
            <div class="alert alert-success" role="alert">
             {{$message}}
           </div>
            @endif
        </div>

                <div class="container-fluid table-responsive">
                <div class="card-header mt-5">Table_Users</div>
                <table class=" table-responsive table  shadow p-3 mb-5 bg-body rounded text-center">
                
                <thead>
                  
                    <tr>
                      <th scope="col">id</th>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">role</th>
                      <th scope="col">password</th>
                      <th scope="col">Modifier</th>
                      <th scope="col">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($users as $item)
                    <tr>
                      <th scope="row">{{$item->id}}</th>
                      <td >{{$item->name}}</td>
                      <td >{{$item->email}}</td>
                      <td>{{$item->role}}</td>
                      <td>{{$item->password}}</td>
                      

                      <td class="text-center">
                      <div class="row">
                        <div class="col">
                            <a  href ="{{route('regester.edit',$item->id)}}"><button type="submit" class="btn btn-success btn-rounded" style="border-radius: 50px;"><i class="fa-solid fa-square-pen"  ></i></button></a>
                        </div>
                      </div>
                    </td>
                    <td class="text-center">
                      <div class="row">
                        
                      <div class="col">
                        <form action="{{route('removeregester.post',$item->id)}}" method="POST">
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
                    {{$users->links()}}
                </div>


       </div>
  </div>
</div>
                


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>


@endsection
