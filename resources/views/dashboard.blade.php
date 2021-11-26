@extends('app')

@section('content')

    <div class="container">
        <div class="row">

            <div class="col-md-4 offset-4">
                <h1>Dashboard</h1>

                {{--                {{$data = \App\Models\User::all()}}--}}
{{--                <h1>{{$data->name}}</h1>--}}
            </div>

            <div class="col-md-4 p-5"><a href="{{route('user.logout')}}" class="btn btn-info">Log Out</a></div>
        </div>
    </div>

@endsection
