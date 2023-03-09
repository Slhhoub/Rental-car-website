
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<title>Title</title>
 <!-- MDB -->
 <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    
<div class="container-fluid mt-4">
  <div>
    <a name="" id="" class="btn btn-primary" href="{{route('tableuser.index')}}" role="button"><i class="fas fa-angle-double-left"></i>back</a>
  </div>
</div>
       

    <div class="container" style="margin-top:5px;">
    <div class="row">
    <div class="col-lg-2 mt-3" >
            </div>
        <div class="col-lg-8">
                <div class="card-body">
                    <div class="card-header text-center">Update Register</div>
                    <form method="POST" action="{{route('regester.update',$edituser->id)}}">
                        @csrf
                        @method('PUT')
                        <div class="row mb-4 mt-3">
                            <div class="col-lg-2"></div>
                          <div class="col-lg-8 text-center">
                            <div class="form-outline mb-2">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$edituser->name}}"  required autocomplete="name" autofocus>
                              <label class="form-label" for="form6Example1">Name</label>
                            </div>
                          </div>
                        </div>

                        <div class="row mb-4 mt-3">
                            <div class="col-lg-2"></div>
                          <div class="col-lg-8 text-center">
                            <div class="form-outline mb-2">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$edituser->email}}"  required autocomplete="email">

                              <label class="form-label" for="form6Example1">Email Address</label>
                            </div>
                          </div>
                        </div>

                        <div class="row mb-4 mt-3">
                           <div class="col-lg-2"></div>
                          <div class="col-lg-8 text-center">
                              <select class="form-select "   class="form-control @error('role') is-invalid @enderror" name="role" value="{{$edituser->role}}"    required autocomplete="name" autofocus aria-label="Default select example">
                              <option selected>Role</option>
                                <option value="0" >User</option>
                                <option value="1" >Admin</option>
                              </select>
                          </div>
                        </div>
                        <div class="row mb-4 mt-3">
                            <div class="col-lg-2"></div>
                          <div class="col-lg-8 text-center">
                            <div class="form-outline mb-2">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{$edituser->password}}" required autocomplete="new-password">

                              
                              <label class="form-label" for="form6Example1">Password</label>
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

                     <!-- 2 column grid layout with text inputs for the first and last names  -->
            </div>
        </div>
        
    </div>
</div>

  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

