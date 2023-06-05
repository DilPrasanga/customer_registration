<!-- delete.blade.php -->
@extends('welcome')
@section('content')
    <div class="container">
        <h1>Delete Customer</h1>
        <p>Are you sure you want to delete this customer?</p>
        <form action="{{ route('destroy',$customer->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
            <a href="{{ route('index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

    <style>
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 30px;
        }

        .btn {
            padding: 8px 12px;
            border-radius: 4px;
            text-decoration: none;
            font-weight: bold;
            color: #fff;
            cursor: pointer;
        }

        .btn-danger {
            background-color: #dc3545;
            border: none;
        }

        .btn-secondary {
            background-color: #6c757d;
            border: none;
            margin-left: 10px;
        }
    </style>
@endsection
