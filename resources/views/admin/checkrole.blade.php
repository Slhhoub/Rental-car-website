@extends('admin')
@section('admin')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<title>Title</title>
 <!-- MDB -->
 <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

    <div class="container mt-5">

    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-7 shadow p-5 mb-5 bg-body rounded">
        <form method="POST" action="">
        @csrf
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <select class="form-select car"  name="name" aria-label="Default select example" required >
                        @foreach ($users as $item)
                         <option  value="{{$item->name}}" >Name : {{$item->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-lg-12 ">
                    <div class="row">                
                        <div class="card-header mb-2">
                        Choose the authorized path
                        </div>
                              <div class="col-lg-4">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="Our_Cars" name="Checkrole[]" id="flexCheckDefault" />
                                  <label class="form-check-label" for="flexCheckDefault"> Our_Cars</label>
                                </div>
                              </div>
                              <div class="col-lg-4">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="Customers" name="Checkrole[]" id="flexCheckDefault" />
                                  <label class="form-check-label" for="flexCheckDefault">Customers</label>
                                </div>
                              </div>
                              <div class="col-lg-4">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="Cars" name="Checkrole[]" id="flexCheckDefault" />
                                  <label class="form-check-label" for="flexCheckDefault">Cars</label>
                                </div>
                              </div>
                              <div class="col-lg-4">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="Contract" name="Checkrole[]" id="flexCheckDefault" />
                                  <label class="form-check-label" for="flexCheckDefault">Table_Contract</label>
                                </div>
                              </div>
                              <div class="col-lg-4">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="Contract" name="Checkrole[]" id="flexCheckDefault" />
                                  <label class="form-check-label" for="flexCheckDefault">Contract</label>
                                </div>
                              </div>
                              <div class="col-lg-4">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="Table_Cars" name="Checkrole[]" id="flexCheckDefault" />
                                  <label class="form-check-label" for="flexCheckDefault">Table_Cars</label>
                                </div>
                              </div>
                              <div class="col-lg-8">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="Table_Customers" name="Checkrole[]" id="flexCheckDefault" />
                                  <label class="form-check-label" for="flexCheckDefault">Table_Customers</label>
                                </div>
                              </div>
                            </div>
                          </div>
                        
                <!-- Submit button -->
                <div class="text-center mt-2">
                <button type="submit" class=" text-center btn btn-primary ">Save</button>
                </div>
        </form>
        </div>
    </div>

 
    </div>

  <!-- MDB -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

@endsection