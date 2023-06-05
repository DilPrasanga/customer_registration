<!-- customers.blade.php -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


@extends('welcome')
@section('content')
    <div class="container">
        <div class="header">
            <h1>Customer List</h1>
            <label class="label-green">{{Session::get('user')['name']}}</label>
            <a href="{{ url('create') }}" class="btn btn-primary">Add New Customer</a>
            <div class="dropdown">
            <form action="{{ route('logout') }}" method="POST">
           @csrf
           <button type="submit" class="btn btn-secondary">Logout</button>
            </form> 
            </div>
          </div>
        <table class="table">
            <thead>
                <tr>
                <th>Image</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>DOB</th>
                <th>Email</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                    <tr>
                    <td><img src="/images/{{ $customer->image }}" width="100px"></td>
                    <td>{{ $customer->first_name }}</td>
                    <td>{{ $customer->last_name }}</td>
                    <td>{{ $customer->dob }}</td>
                    <td>{{ $customer->email }}</td>
                    <td width="350px">
                            <a href="{{ route('show',$customer->id) }}" class="btn btn-link"><i class="fas fa-eye"></i></a>
                            <a href="{{ route('edit',$customer->id) }}" class="btn btn-link"><i class="fas fa-edit"></i></a>
                            <a href="{{ route('delete',$customer->id) }}" class="btn btn-link"><i class="fas fa-trash-alt"></i></a>
                           

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <style>
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        h1 {
            margin: 0;
        }

        .table {
            width: 140%;
            margin-bottom: 20px;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 13px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .btn {
            padding: 8px 12px;
            border-radius: 4px;
            text-decoration: none;
            font-weight: bold;
            color: #fff;
            background-color: #007bff;
            border: none;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #007bff;
        }
        .btn-logout {
            background-color: #AAA3A2;
        }

        .btn-secondary {
            background-color: #6c757d;
        }

        .btn-link {
            padding: 0;
            background: none;
            border: none;
            color: #007bff;
            cursor: pointer;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-menu {
            position: absolute;
            right: 0;
            min-width: 150px;
            z-index: 1;
        }

        .dropdown-item {
            padding: 8px 16px;
            display: block;
            clear: both;
            font-weight: normal;
            color: #212529;
            text-align: inherit;
            white-space: nowrap;
            background-color: transparent;
            border: 0;
            text-decoration: none;
        }
        .custom-label {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 4px;
            font-weight: bold;
            background-color: #007bff;
            color: #fff;
        }

        .label-green {
            color: #31D016;
            font-weight: bold;
        }
    </style>
@endsection
