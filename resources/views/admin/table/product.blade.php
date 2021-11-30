@extends("admin.layouts.layout")


@section("content")

    <div class="container">
        <div class="row">
            <div class="col-md-12 my-5">
                <a class="btn btn-primary float-right" href="{{route('add.product')}}">create product</a>
            </div>
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>price</th>
                        <th>description</th>
                        <th>c_id</th>
                        <th>image</th>
                        <th>action</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach(\App\Models\Product::all() as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}  </td>
                            <td>{{$item->price}}  </td>
                            <td>{{$item->desc}}</td>
                            <td>{{$item->c_id}}</td>
                            <td><img class="rounded-circle" src="{{asset("/uploads/product_images/".$item->image) }}" width="100px"></td>
                            <td>
                                <a href="{{url('/product_edit/'.$item->id)}}" class="btn btn-success">Edit</a>
                                <a href="" class="btn btn-danger" >delete </a>
                                <a href="" class="btn btn-info" >show </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
