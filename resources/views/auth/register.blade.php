@extends('base')

@section('content')

    <div class="container col-md-6 offset-md-3 mt-5">
        <h1 class="text-center text-white">Register for an Account</h1>
        <hr>

        <form action="{{ '/register' }}" method="POST">
            {{ csrf_field() }}

            <div class="form-group mb-3">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control">
                @error('email')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            </div>

            <div class="form-group mb-3">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control">
                @error('password')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            </div>

            <div class="form-group mb-3">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                @error('password_confirmation')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="d-flex">
                <div class="flex-grow-1">
                    <a href="{{ '/' }}">Already have an account? Log in</a>
                </div>
                <button class="btn btn-primary px-5" type="submit">Register</button>
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