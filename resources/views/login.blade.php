<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{url('images')}}/logo.jpg" type="image/png" />
    <title>Hospital Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#myElem").show();
            setTimeout(function() 
            { 
                $("#myElem").hide(); 
            }, 5000);
        });
    </script>
</head>
<body>
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
              <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                    <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-2 order-lg-1">
                            <img src="{{url('Images')}}/register.png"
                                class="img-fluid" alt="Sample image">
                        </div>
                        <div class="col-md-10 col-lg-6 col-xl-5 order-1 order-lg-2">

                            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Admin Login</p>
            
                            <form method="POST" action="{{url('login-store')}}"  class="mx-1 mx-md-4" enctype="multipart/form-data">
                                @csrf
                                @if(Session::has('message'))
                                    <p class="alert {{Session::get('alert-class','alert-info')}}" id="myElem">{{Session::get('message')}}</p>
                                @endif
                                <div class="d-flex flex-row align-items-center mb-3">
                                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                    <div class="form-outline flex-fill mb-0">
                                        <label class="form-label" for="form3Example3c">Email</label>
                                        <input type="email" id="form3Example3c" name="email" placeholder="Enter Your Email" class="form-control"/>
                                        @error('email')
                                            <span role="alert" style="color:red;">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row align-items-center mb-3">
                                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                    <div class="form-outline flex-fill mb-0">
                                        <label class="form-label" for="form3Example4c">Password</label>
                                        <input type="password" id="form3Example4c" name="password" placeholder="Enter Your Password" class="form-control" />
                                        @error('password')
                                            <span role="alert" style="color:red;">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
            
                                <div class="form-check d-flex justify-content-center mb-5">
                                    <label class="form-check-label" for="form2Example3">
                                        <a href="{{route('register')}}" style="text-decoration: none;">New Register</a>
                                    </label>
                                </div>
            
                                <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                    <input type="submit" class="btn btn-outline-primary" value="Login" name="submit">
                                </div>
            
                            </form>

                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
</body>
</html>