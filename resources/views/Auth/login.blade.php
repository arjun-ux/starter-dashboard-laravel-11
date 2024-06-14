<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Boostrap 5</title>
    <link href="{{ asset('dist/css/lineicons.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.min.css') }}">
</head>
<style>
    html,body {
        margin: 0;
        padding: 0;
        height:  100%;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-color: rgba(32, 66, 32, 0.897);
        {{--  background-image: url({{ asset('img/bg-zakat.jpg') }});  --}}
    }
    .register {
        margin-top: 20px;
        text-align: center;
    }
    .register a{
        text-decoration: none;
    }
</style>
<body>
    <div class="container">
        <div class="row justify-content-center py-5">
            <div class="col-md-4 col-sm-8 col-lg-4 py-5">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('doLogin') }}" method="post">
                            @csrf
                            <h4 class="text-center">LOGIN</h4>
                            <div>
                                <label for="exampleInputUsername" class="form-label"></label>
                                <input type="text" class="form-control" id="exampleInputUsername" autofocus name="username" placeholder="Username">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label"></label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                              </div>
                              <div class="text-center mt-4">
                                  <button type="submit" class="btn btn-success">Login</button>
                              </div>
                        </form>
                        <div class="register">
                            Dont have an account?  <a href="{{ route('register') }}">Register Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="{{ asset('dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
