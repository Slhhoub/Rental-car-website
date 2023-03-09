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

<nav class="navbar navbar-expand-lg navbar-light shadow p-2 mb-5 " style="background-color: #15a0e1;">
            <!-- Container wrapper -->
            <div class="container-fluid ">
              <!-- Toggle button -->
              <button
                class="navbar-toggler"
                type="button"
                data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <i class="fas fa-bars"></i>
              </button>

              <!-- Collapsible wrapper -->
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Navbar brand -->
                <a class="navbar-brand mt-2 mt-lg-0" href="#" style="color:beige">
                <i class="fas fa-car " style="margin-right: 10px;"></i> Car-SM
                </a>
                <!-- Left links -->


                <!-- Left links -->
              </div>
              <!-- Collapsible wrapper -->

              <!-- Right elements -->
              <div class="d-flex align-items-center" >
                <!-- Notifications -->
                @if (Route::has('login'))
                    @auth
                    <a class="nav-link" href="{{ url('/dashboard') }}" style="color:beige"><i class="fas fa-home"></i>  Home</a>
                    @else
                        <a class="nav-link" href="{{ route('login') }}" style="color:beige"><i class='fas fa-user'></i>  Log in</a>
                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}" style="color:beige"><i class="fas fa-user-plus"></i> Register</a>
                        @endif
                    @endauth

            @endif
              </div>
              <!-- Right elements -->
            </div>
            <!-- Container wrapper -->
          </nav>

          <div class="container" style="margin-top:5px;">
    <div class="row">
        <div class="col-lg-6">
                <div class="card-body">
                    <div class="card-header">{{ __('Register') }}</div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row mb-4 mt-3">
                            <div class="col-lg-2"></div>
                          <div class="col-lg-8 text-center">
                            <div class="form-outline mb-2">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              <label class="form-label" for="form6Example1">Name</label>
                            </div>
                          </div>
                        </div>

                        <div class="row mb-4 mt-3">
                            <div class="col-lg-2"></div>
                          <div class="col-lg-8 text-center">
                            <div class="form-outline mb-2">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              <label class="form-label" for="form6Example1">Email Address</label>
                            </div>
                          </div>
                        </div>

                        <div class="row mb-4 mt-3">
                            <div class="col-lg-2"></div>
                          <div class="col-lg-8 text-center">
                            <div class="form-outline mb-2">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              <label class="form-label" for="form6Example1">Password</label>
                            </div>
                          </div>
                        </div>

                        <div class="row mb-4 mt-3">
                            <div class="col-lg-2"></div>
                          <div class="col-lg-8 text-center">
                            <div class="form-outline mb-2">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                              <label class="form-label" for="form6Example1">Confirm Password</label>
                            </div>
                          </div>
                        </div>

                       

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>

                     <!-- 2 column grid layout with text inputs for the first and last names -->
            </div>
        </div>
        <div class="col-lg-6  mt-3" >
            <img src="3.png" alt="" srcset="" width="100%" style="height: 430px">
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