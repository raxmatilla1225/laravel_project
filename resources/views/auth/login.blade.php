@extends('app')

@section('content')

    <div class="container">

        <div class="row m-5">

            <div class="col-md-4 offset-4">

                <h1>Login</h1>

                <form method="post" action="{{route('login.custom')}}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1"  placeholder="Enter email" name="email" required>
                        @if($errors->has('email'))
                            <span class="text-danger">{{$errors->first('email')}}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
                        @if($errors->has('password'))
                            <span class="text-danger">{{$errors->first('password')}}</span>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>

                <a class="d-flex justify-content-end" href="{{url('register')}}">Registration</a>

            </div>

        </div>

    </div>

@endsection
