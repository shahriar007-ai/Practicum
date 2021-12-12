<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>eShop Admin - Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('admin_assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('admin_assets/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-light">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6 bg-warning">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-3">Admin Login</h1>
                                        <img width="150" height="150" class="rounded mb-3" src="{{asset('admin_assets/img/undraw_profile_2.svg')}}" alt="">
                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                            </symbol>
                                        </svg>
                                        @if(Session::has('error'))
                                            <div class="bg-danger text-white rounded mb-3 p-1">
                                                <svg class="bi flex-shrink-0 me-2" width="18" height="18" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg> {{Session::get('error')}}
                                            </div>
                                        @endif
                                    </div>
                                    <form class="user" method="POST" action="{{route('admin.login.post')}}">
                                        @csrf
                                        <div class="form-group mb-4">
                                            <input type="email" required="" value="{{old('email')}}" name="email" class="form-control @error('email') is-invalid @enderror form-control-user"id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                                            @error('email')
                                                <small class="text-danger text-center ml-3" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </small>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-4">
                                            <input type="password" required="" name="password" class="form-control @error('email') is-invalid @enderror form-control-user" id="exampleInputPassword" placeholder="Password">
                                            @error('password')
                                                <small class="text-danger text-center ml-3" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </small>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('admin_assets/adminvendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{asset('admin_assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{asset('admin_assets/js/sb-admin-2.min.js')}}"></script>

</body>

</html>