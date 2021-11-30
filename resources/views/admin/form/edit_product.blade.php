@extends("admin.layouts.layout")


@section("content")

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form method="post" action="{{route('update.product')}}" enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <input type="hidden" value="{{$id}}" name="id">

                    <div class="form-group">
                        <label for="exampleInputName" class="form-label">Name</label>
                        <input value="{{$name}}" type="text" class="form-control" id="exampleInputName"
                               aria-describedby="emailHelp" name="name">
                    </div>

                    <div class="form-group">
                        <label for="price">Price</label>
                        <input value="{{$price}}" type="number" class="form-control" id="price" name="price">
                    </div>

                    <div class="form-group">
                        <label for="desc">Description</label>
                        <textarea class="form-control" name="desc" id="desc" rows="5">{{$desc}}</textarea>
                    </div>

                    <div class="form-group">
                        <select name="c_id" id="" class="form-control">
                            <option value=" ">Select category</option>
                            @foreach(\App\Models\Category::all() as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary my-3">Submit</button>
                </form>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <img width="400" src="{{asset("/uploads/product_images/".$image) }}" alt="">
                </div>

                <div class="custom-file">
                    <label class="custom-file-label" for="img">Image</label>
                    <input  type="file" value="" class="custom-file-input" id="img" name="image">
                </div>
            </div>


        </div>
    </div>





@endsection
