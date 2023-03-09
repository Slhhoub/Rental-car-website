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

       

  <div class="container mt-5" >
    <div class="row ">
      <div class="col-lg-2"></div>
        <div class="col-lg-5 ">
                <div class="card-body">
                    <div class="card-header">Register</div>
                    <form method="POST" action="{{route('regester.store')}}">
                        @csrf
                        
                        <div class="row mb-4 mt-3">
                            <div class="col-lg-2"></div>
                          <div class="col-lg-8 text-center">
                            <div class="form-outline mb-2">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"   required autocomplete="name" autofocus>
                              <label class="form-label" for="form6Example1">Name</label>
                            </div>
                          </div>
                        </div>

                        <div class="row mb-4 ">
                            <div class="col-lg-2"></div>
                          <div class="col-lg-8 text-center">
                            <div class="form-outline mb-4 ">
                              <input type="email" name="email" id="form1Example1" class="form-control" />
                              <label class="form-label" for="form1Example1">Email address</label>
                            </div>
                          </div>
                        </div>

                        <div class="row mb-4 ">
                           <div class="col-lg-2"></div>
                          <div class="col-lg-8 text-center">
                              <select class="form-select "   class="form-control @error('role') is-invalid @enderror" name="role" required autocomplete="name" autofocus aria-label="Default select example">
                              <option selected>Role</option>
                                <option value="0" >User</option>
                                <option value="1" >Admin</option>
                              </select>
                          </div>
                        </div>
                       

                        <div class="row mb-4 ">
                            <div class="col-lg-2"></div>
                          <div class="col-lg-8 text-center">
                            <div class="form-outline mb-2">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  required autocomplete="new-password">
                                <label class="form-label" for="form6Example1">Password</label>
                            </div>
                          </div>
                        </div>

                   <!--    <div class="row mb-4 mt-3">
                            <div class="col-lg-2"></div>
                          <div class="col-lg-8 ">
                            <div class="row">
                              <div class="col-lg-6">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                  <label class="form-check-label" for="flexCheckDefault"> Our_Cars</label>
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                  <label class="form-check-label" for="flexCheckDefault">Customers</label>
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                  <label class="form-check-label" for="flexCheckDefault">Cars</label>
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                  <label class="form-check-label" for="flexCheckDefault">Contract</label>
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                  <label class="form-check-label" for="flexCheckDefault">Table_Customers</label>
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                  <label class="form-check-label" for="flexCheckDefault">Table_Cars</label>
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                  <label class="form-check-label" for="flexCheckDefault">Table_Contract</label>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div> -->
                       


                        <div class="row mb-4 mt-3">
                            <div class="col-lg-2"></div>
                          <div class="col-lg-8 text-center">

                          <!-- Button trigger modal -->
                              
                           <!--  <a type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal"   class="">Choose the authorized path <i class="fas fa-check-square"></i></a>-->

                              <!-- Modal -->
                              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Choose the authorized path</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    
                                    <div class="modal-body">
                                      
                                    <ul class="list-group">
                                    <li class="list-group-item">
                                        <input class="form-check-input me-1" type="checkbox" value="Our_Cars" name="Checkrole[]" aria-label="...">
                                        Our_Cars
                                      </li>
                                      <li class="list-group-item">
                                        <input class="form-check-input me-1" type="checkbox" value="Customers" name="Checkrole[]" aria-label="...">
                                        Customers
                                      </li>
                                      <li class="list-group-item">
                                        <input class="form-check-input me-1" type="checkbox" value="Cars" name="Checkrole[]" aria-label="...">
                                        Cars
                                      </li>
                                      <li class="list-group-item">
                                        <input class="form-check-input me-1" type="checkbox" value="Contract" name="Checkrole[]" aria-label="...">
                                        Contract
                                      </li>
                                      <li class="list-group-item">
                                        <input class="form-check-input me-1" type="checkbox" value="Table_Customers" name="Checkrole[]" aria-label="...">
                                        Table_Customers
                                      </li>
                                      <li class="list-group-item">
                                        <input class="form-check-input me-1" type="checkbox" value="Table_Cars" name="Checkrole[]" aria-label="...">
                                        Table_Cars
                                      </li>
                                      <li class="list-group-item">
                                        <input class="form-check-input me-1" type="checkbox" value="Table_Contract" name="Checkrole[]" aria-label="...">
                                        Table_Contract
                                      </li>
                                    </ul>
                                    </div>
                                   
                                   


                                  </div>
                                </div>
                              </div>
                         </div>
                      </div>  
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   Register
                                </button>
                            </div>
                        </div>
                    </form>

                     <!-- 2 column grid layout with text inputs for the first and last names -->
            </div>
        </div>
        <div class="col-lg-5  mt-3" >
            <img src="3.png" alt="" srcset="" width="100%" style="height: 430px">
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