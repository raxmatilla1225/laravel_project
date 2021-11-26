@extends("admin.layouts.layout")


@section("content")

    <div class="container">
        <div class="row">
            <div class="col-md-12 my-5">
                <a class="btn btn-primary float-right" href="{{route('add.admin')}}">create admin</a>
            </div>
            <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>image</th>
                        <th>action</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach(\App\Models\Admin::all() as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}  </td>
{{--                            <td><img width="100" src="{{asset("storage/".$item->image)}}" alt=""></td>--}}
                            <td><img src="{{asset("/uploads/admin_images/".$item->image) }}" width="100px"></td>
                            <td>
                                <a href="{{url('/admin_edit/'.$item->id)}}" class="btn btn-success">Edit</a>
                                <a href="" class="btn btn-danger">delete </a>
                                <a href="" class="btn btn-info">show </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
