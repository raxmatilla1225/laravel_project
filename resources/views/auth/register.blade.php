@extends('app')

@section('content')

    <div class="container">

        <div class="row m-5">

            <div class="col-md-4 offset-4">

                <h1>Register</h1>

                <form method="post" action="{{route('register.custom')}}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputUsername">Name</label>
                        <input type="text" class="form-control" id="exampleInputUsername" name="name" placeholder="Enter Username" required>
                        @if($errors->has('name'))
                            <span class="text-danger">{{$errors->first('name')}}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email" required>
                        @if($errors->has('email'))
                            <span class="text-danger">{{$errors->first('email')}}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1"  name="password" placeholder="Password" required>
                        @if($errors->has('password'))
                            <span class="text-danger">{{$errors->first('password')}}</span>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>

        </div>

    </div>

@endsection
