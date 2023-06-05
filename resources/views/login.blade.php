@extends('welcome')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border-radius: 3px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        .btn {
            display: inline-block;
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border-radius: 3px;
            text-decoration: none;
        }

        .button-group {
            text-align: center;
            margin-top: 20px;
        }

        .button-group a {
            display: inline-block;
            margin: 0 10px;
            text-decoration: none;
            color: #666;
        }
    </style>
</head>
<body>

<div class="container login-card">
<h2>Login</h2>
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4"><div class="card" style="width: 18rem;">
            <div class="card-body">
                <form action="login" method="POST" >
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1"  class="form-label">Email address</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1"  class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                    @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                     @endforeach
                      </ul>
                    </div>
                     @endif
                    <button type="submit" class="btn btn-primary">Sign In</button>
                    <a class="btn btn-primary" href="{{ route('register') }}"> Create Profile</a>
                    <!-- <button type="submit" class="btn btn-primary">Create Account</button> -->
                  </form>
            </div>
          </div></div>
    </div>
</div>
</body>
</html>


@endsection