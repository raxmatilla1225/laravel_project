@extends("admin.layouts.layout")


@section("content")

    <div class="container">
            <form class="row w-100" method="post" action="{{route('update.product')}}" enctype="multipart/form-data">

            <div class="col-md-6">
                    @csrf
                    @method('put')

                    <input type="hidden" value="{{$id}}" name="id">

                    <div class="form-group">
                        <label for="exampleInputName" class="form-label">Name</label>
                        <input value="{{$name}}" type="text" class="form-control" id="exampleInputName"
                               aria-describedby="emailHelp" name="name">
                    </div>
                @if($errors->has('name'))
                    <span class="text-danger">{{$errors->first('name')}}</span>
                @endif

                    <div class="form-group">
                        <label for="price">Price</label>
                        <input value="{{$price}}" type="number" class="form-control" id="price" name="price">
                    </div>
                @if($errors->has('price'))
                    <span class="text-danger">{{$errors->first('price')}}</span>
                @endif

                    <div class="form-group">
                        <label for="desc">Description</label>
                        <textarea class="form-control" name="desc" id="desc" rows="5">{{$desc}}</textarea>
                    </div>
                @if($errors->has('desc'))
                    <span class="text-danger">{{$errors->first('desc')}}</span>
                @endif

                    <div class="form-group">
                        <select name="c_id" id="" class="form-control">
                            <option value=" ">Select category</option>
                            @foreach(\App\Models\Category::all() as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                @if($errors->has('c_id'))
                    <span class="text-danger">{{$errors->first('c_id')}}</span>
                @endif

            </div>

            <div class="col-md-6">

                <h5>Image</h5>
                <div class="custom-file">
                    <label class="custom-file-label" for="image">Choose picture</label>
                    <input type="file" value="{{$image}}" class="custom-file-input" name="image" placeholder="Choose image" id="image">
                </div>
                @if($errors->has('image'))
                    <span class="text-danger">{{$errors->first('image')}}</span>
                @endif
                <div class="form-group my-5">
                    <img id="preview-image-before-upload" src="{{asset("/uploads/product_images/".$image) }}"
                         alt="preview image" style="max-height: 250px;">
                </div>

            </div>
                <button type="submit" class="btn btn-primary my-3">Submit</button>

            </form>



    </div>





@endsection
