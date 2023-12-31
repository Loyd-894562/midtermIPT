@extends('base')

@section('content')

    <div class="container col-md-6 offset-md-3 mt-5">
        <h1 class="text-center text-white">Welcome to Luxury Homes Inc.</h1>
        
        @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif


        <form action="{{ '/' }}" method="POST">
            {{ csrf_field() }}

            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>

            <div class="d-flex">
                <div class="flex-grow-1">
                    <a href="{{ '/register' }}">Sign up for an account</a>
                </div>
                <button class="btn btn-primary px-5" type="submit">Login</button>
            </div>
        </form>
    </div>

    <style>
        body {
            background-image: url("http://prgpowerrealtygroup.com/wp-content/uploads/sites/118/2016/03/095-183059-DSC_6400_3670860.jpg");
            background-size: cover;
        }
    </style>


@endsection