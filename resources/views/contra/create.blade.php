
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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <title>Contract</title>

</head>
<body >
      <!--  Back contraform 
        <div class="container mt-5">
            <div class="pull-right">
                <a class="btn " href="{{route('contraform.index')}}" style="background-color: #15a0e1;color:rgb(255, 255, 255)"> <i class="fas fa-angle-double-left"></i> Back</a>
            </div>
        </div>-->
      <!--------------->

      <!--  Message -->
        <div class="container mt-2 text-center">
            @if ($message=Session::get('success'))
            <div class="alert alert-success" role="alert">
             {{$message}}
           </div>
            @endif
        </div>
      <!--------------->


  <!--  add customer  -->
                                  <!-- Button trigger modal -->
                              <!--   <button type="submit" class="btn btn-success btn-rounded mb-2" style="border-radius: 50px; " data-bs-toggle="modal" data-bs-target="#exampleModal">Add Customer <i class="fas fa-plus"></i></button>-->
                                  <!-- Modal -->
                                  <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Add Customers</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="container-fluid" >
                                          <div class="row">

                                              <div class="col-lg-12 ">
                                          <form  action="{{route('addclient.store')}}" method="POST" >
                                                  @csrf
                                              <!-- 2 column grid layout with text inputs for the first and last names -->
                                                  <div class="row mb-4 mt-3">
                                                      <div class="col-lg">
                                                      <div class="form-outline mb-2">
                                                          <input type="text" id="form6Example1" name="prenom" class="form-control" required />
                                                          <label class="form-label" for="form6Example1">First name</label>
                                                      </div>
                                                      </div>
                                                      <div class="col-lg">
                                                      <div class="form-outline">
                                                          <input type="text" id="form6Example2" name="nom" class="form-control" required/>
                                                          <label class="form-label" for="form6Example2">Last name</label>
                                                      </div>
                                                      </div>
                                                  </div>
                                                  <div class="row mb-4">
                                                      <div class="col-lg">
                                                          <div class="form-outline mb-2">
                                                          <input type="text" id="form6Example1" name="numr_cart" class="form-control " required />
                                                          <label class="form-label" for="form6Example1">N° cart</label>
                                                          </div>
                                                      </div>
                                                      <div class="col-lg">
                                                          <div class="form-outline">
                                                          <input type="text" id="form6Example2" name="city" class="form-control" required />
                                                          <label class="form-label" for="form6Example2">City</label>
                                                          </div>
                                                      </div>
                                                      </div>
                                                  <div class="row mb-4">
                                                      <div class="col-lg">
                                                          <div class="form-outline mb-2  ">
                                                          <input type="text" id="form6Example1" name="address" class="form-control" required />
                                                          <label class="form-label" for="form6Example1">Address</label>
                                                          </div>
                                                      </div>
                                                      <div class="col-lg">
                                                          <div class="form-outline">
                                                          <input type="text" id="form6Example2" name="telephone" class="form-control" required />
                                                          <label class="form-label" for="form6Example2">Phone</label>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <!-- Submit button -->
                                                  <div class="text-center mb-2">
                                                      <button type="submit"  class="btn " style="background-color: #15a0e1;color:rgb(255, 255, 255)">ADD</button>
                                                      </div>
                                                  </form>
                                              </div>
                                          </div>

                                          </div>
                                      </div>
                                  </div>
                                  </div>
                          <!-- Fin add customer  -->


                          <!-- D add Car  -->
                            <!-- Button trigger modal -->
                            <!-- <button type="submit" class="btn btn-success btn-rounded mb-2" style="border-radius: 50px; " data-bs-toggle="modal" data-bs-target="#exampleModal1">Add Car <i class="fas fa-plus"></i></button>-->
                              <!-- Modal -->
                              <div class="modal fade " id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Add Car</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="container-fluid" >
                                      <div class="row">
                                          <div class="col-lg-12 ">
                                              <form name="formAdd" action="{{route('addcar2.store')}}" method="POST" enctype="multipart/form-data" >
                                                  <!-- 2 column grid layout with text inputs for the first and last names -->
                                                  @csrf
                                                  <div class="row mb-4 mt-2">
                                                      <div class="col-lg">
                                                        <div class="form-outline">
                                                          <input type="text" id="form6Example1" name="n_car" class="form-control" />
                                                          <label class="form-label" for="form6Example1">N° car</label>
                                                        </div>
                                                      </div>
                                                      <div class="col-lg ">
                                                        <div class="form-outline">
                                                          <input type="text" id="form6Example2" name="type_car" class="form-control" />
                                                          <label class="form-label" for="form6Example2">type car</label>
                                                        </div>
                                                      </div>
                                                  </div>
                                                  <div class="row mb-4">
                                                      <div class="col-lg">
                                                        <div class="form-outline">
                                                          <input type="date" id="form6Example2" name="Date_taking" class="form-control" />
                                                          <label class="form-label" for="form6Example2">Date taking</label>
                                                        </div>
                                                      </div>
                                                      <div class="col-lg ">
                                                        <div class="form-outline">
                                                          <input type="text" id="form6Example2" name="price" class="form-control" />
                                                          <label class="form-label" for="form6Example2">price</label>
                                                        </div>
                                                      </div>
                                                  </div>
                                                  <div class="row mb-3">
                                                      <div class="col-lg ">
                                                        <div class="form-outline">
                                                          <input type="file" id="form6Example1" class="form-control" name="img_car" placehoder= "choose picture" >
                                                        </div>
                                                      </div>
                                                  </div>
                                                  <div class="row mb-4">
                                                      <div class="col-lg">
                                                      <div class="form-outline ">
                                                          <textarea class="form-control" id="form4Example3" name="informations" rows="4"></textarea>
                                                          <label class="form-label" for="form4Example3">+Informations</label>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <!-- Submit button -->
                                                  <div class="text-center mb-2">
                                                      <button type="submit"  class="btn " style="background-color: #15a0e1;color:rgb(255, 255, 255)">ADD</button>
                                                    </div>
                                                </form>
                                          </div>
                                      </div>
                                      </div>
                                  </div>
                              </div>
                              </div>
                          <!-- Fin add Car  -->






                      <div class="container shadow-sm bg-body rounded p-2 " >
                        <div class="row">
                          <div class="col-lg-5" >
                          <img src="addcontract.png" alt="" srcset="" width="100%">
                          </div>
                          <!-- add contract  -->
                            <div class="col-lg-7 mt-5">
                                <form  action="{{route('contra.store')}}"   method="POST" class="">
                                    @csrf
                                  <!-- 2 column grid layout with text inputs for the first and last names -->
                                  <div class="card-header mb-3 bg-white">Add Contract</div>
                                   

                                      <div class="row mb-4">
                                        
                                          <div class="col-lg text-center mb-2">
                                            <div class="row">
                                              <div class="col-lg-10">
                                                  <select class="form-select"  name="customer"  aria-label="Default select example" required>
                                                    @foreach ($clients as $item)
                                                    <option value="{{$item->prenom}}  {{$item->nom}}">Customer : {{$item->prenom}}  {{$item->nom}}</option>
                                                    @endforeach
                                                  </select>
                                              </div>
                                              <div class="col-lg-2">
                                              <a href="" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal"  style="color:#198754 ;" class="mt-2"><i class="fas fa-user-plus"></i></a>
                                              </div>
                                            </div>     
                                          </div>
                                          <div class="col-lg text-center mb-2">
                                            <div class="row">
                                              <div class="col-lg-10">
                                              <select class="form-select car"  name="car"  aria-label="Default select example" required >
                                                  @foreach ($car as $item)
                                                  <option  value="{{$item->id}}" >Car : {{$item->n_car}}</option>
                                                  @endforeach
                                                </select>
                                              </div>
                                              <div class="col-lg-2">
                                               <a href="" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal1"  style="color:#198754 ;" class="mt-2"><i class="fas fa-plus"></i><i class="fas fa-car"></i></a>
                                              </div>
                                            </div>     
                                          </div>
                                        </div>
                                        <div class="row mb-4">
                                          <div class="col-lg">
                                            <div class="form-outline mb-2">
                                              <input type="date" id="star_date"  name="star_date" class="form-control" required/>
                                              <label class="form-label" for="form6Example1">Start date</label>
                                            </div>
                                          </div>
                                          <div class="col-lg">
                                              <div class="form-outline">
                                                <input type="date" id="end_date"  name="end_date" class="form-control" required/>
                                                <label class="form-label" for="form6Example1">End date</label>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                          <div class="col-lg mb-2">
                                            <div class="form-outline">
                                              <input class="form-control bg-white "  id="duration"   name="duration"   type="text"   value="duration..." aria-label="readonly input example"  readonly  required/>
                                            <label class="form-label" for="formControlReadonly">duration(j)</label>
                                              <!--    <label class="form-label" for="form6Example2">duration(j)</label>  -->
                                            </div>
                                          </div>
                                          <div class="col-lg">
                                              <div class="form-outline">
                                                  <input class="form-control bg-white" id="prix" name="prix" type="text"  value="price..."  aria-label="readonly input example" readonly  required/>
                                                <label class="form-label" for="formControlReadonly">price(j)</label>
                                              </div>
                                            </div>
                                        </div>
                                      <!-- Submit button -->
                                      <div class="text-center">
                                          <button type="submit"  class="btn " style="background-color: #15a0e1;color:rgb(255, 255, 255)">ADD Contract</button>
                                        </div>
                                    </form>
                              </div>

                        <!-- Fin add contract  -->
    </div>
  </div>
<script>

 $(document).ready(function(){
       $('#end_date').change(function(){
           // day
        var dat1=new Date($("#star_date").val());
           var dat2=new Date($("#end_date").val());
           var tim=dat2.getTime()-dat1.getTime();
           var day=tim/(1000*3600*24) ;
           $("#duration").val(day + ' j');
           //price
           var car=$('.car').val();
            $.post("<?=route("ajax.index");?>",
                {
                    day:day,
                    carid:car,
                    _token: "<?=csrf_token();?>"
                },
                function(data, status){
                    $("#prix").val((data) + ' dh' );
            });
       });
    });
</script>

    <!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>




@endsection
