@extends('welcome')
<!DOCTYPE html>
@section('content')
<html>
<head>
    <title>View Customer</title>
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

        .customer-details {
            margin-bottom: 20px;
        }

        .customer-details h2 {
            margin-top: 0;
        }

        .customer-details img {
            width: 100%;
            max-height: 300px;
            object-fit: cover;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .customer-details p {
            margin-bottom: 5px;
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
    <a href="{{ url('/') }}" class="btn">Back</a>
        <div class="customer-details">
            <h2>Customer Details</h2>
            <img src="/images/{{ $customer->image}}" >
            <p><strong>First Name:</strong> {{ $customer->first_name }}</p>
            <p><strong>Last Name:</strong> {{ $customer->last_name }}</p>
            <p><strong>Date of Birth:</strong> {{ $customer->dob }}</p>
            <p><strong>Email:</strong> {{ $customer->email }}</p>
        </div>

        
    </div>
   
</body>
</html>

@endsection