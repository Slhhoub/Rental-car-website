<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="./style1.css">
</head>
<body>

    <!-- Navbar -->
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

      <ul class="navbar-nav m-auto mb-2 mb-lg-0 " >
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('homeadmin')}}" style="color:beige">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('ourcaradmin.index')}}" style="color:beige"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('regester.create')}}" style="color:beige">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('checkrole.index')}}" style="color:beige">Checkrole</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('tableuser.index')}}" style="color:beige">Table_Users</a>
        </li>
       
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    <div class="d-flex align-items-center" >
      <!-- Notifications -->
      <!-- Avatar -->
      <div class="dropdown">
        <a
          class="dropdown-toggle d-flex align-items-center hidden-arrow"
          href="#"
          id="navbarDropdownMenuAvatar"
          role="button"
          data-mdb-toggle="dropdown"
          aria-expanded="false"
        >
        <p style="color:beige;"  class="mt-2"><i class="fas fa-user-circle mt-2"></i>  {{auth()->user()->name}}</p>
        </a>
        
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdownMenuAvatar"
        >
          <li>
            <a class="dropdown-item" name="Logout" href="{{url('logout')}}">Logout</a>
          </li>
        </ul>
      </div>
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->

@yield('navbaradmin')

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>
