@extends("admin.layouts.layout")


@section("content")

    <div class="container">
        <div class="row">
            <div class="col-md-12 my-5">
                <a class="btn btn-primary float-right" href="">create user</a>
            </div>
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>id</th> <th>name</th> <th>surname</th>  <th>status</th>  <th>image</th>   <th>action</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach(\App\Models\Users::all() as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}  </td>
                            <td>{{$item->surname}}  </td>
                            <td>{{$item->status}}  </td>
                            <td><img src="{{$item->image}}" alt=""> </td>
                            <td>
                                <a href="" class="btn btn-success" >edit </a>  <a href="" class="btn btn-danger" >delete </a>
                                <a href="" class="btn btn-info" >show </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
