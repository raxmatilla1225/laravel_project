@extends("admin.layouts.layout")


@section("content")

    <div class="container">
        <div class="row">
            <div class="col-md-12 my-5">
                <a class="btn btn-primary float-right" href="">create category</a>
            </div>
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>id</th> <th>name</th> <th>action</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach(\App\Models\Users::all() as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}  </td>
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
