<!DOCTYPE html>
<html>
<head>
    <title>Create New Customer</title>
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
        input[type="date"],
        input[type="email"],
        input[type="file"] {
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
    </style>
</head>
<body>
    <div class="container">
        <h2>Create New Customer</h2>
        <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="name">First Name:</label>
                <input type="text" id="name" name="first_name" placeholder="First Name" >
            </div>

            <div class="form-group">
                <label for="name">Last Name:</label>
                <input type="text" id="name" name="last_name" placeholder="Last Name" >
            </div>

            <div class="form-group">
                <label for="name">DOB:</label>
                <input type="date" id="dob" name="dob" placeholder="Date of Birth" >
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Email">
            </div>

            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" id="image" name="image" placeholder="image">
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
            <button type="submit" class="btn">Create</button>
            <a class="btn btn-primary" href="{{ route('index') }}"> Back</a>
        </form>
    </div>
</body>
</html>
