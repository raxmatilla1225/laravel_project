@extends("admin.layouts.layout")


@section("content")

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form method="post"   action="{{route('store.product')}}"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
                    </div>
                    @if($errors->has('name'))
                        <span class="text-danger">{{$errors->first('name')}}</span>
                    @endif

                    <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Price</label>
                        <input type="number" class="form-control" id="img" name="price">
                    </div>
                    @if($errors->has('price'))
                        <span class="text-danger">{{$errors->first('price')}}</span>
                    @endif

                    <div class="form-group">
                        <label class="custom-textarea-label" for="desc">Description</label>
                        <textarea name="desc" id="desc" cols="30" rows="10"></textarea>
                    </div>
                    @if($errors->has('desc'))
                        <span class="text-danger">{{$errors->first('desc')}}</span>
                    @endif

                    <div class="form-group">
                        <select name="c_id" id="">
                            <option value=" ">Select category</option>

                            @foreach(\App\Models\Category::all() as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    @if($errors->has('c_id'))
                        <span class="text-danger">{{$errors->first('c_id')}}</span>
                    @endif

                    <div class="custom-file">
                        <label class="custom-file-label" for="img">Image</label>
                        <input type="file" class="custom-file-input" id="img" name="image">
                    </div>
                    @if($errors->has('image'))
                        <span class="text-danger">{{$errors->first('image')}}</span>
                    @endif

                    <button type="submit" class="btn btn-primary my-3">Submit</button>
                </form>

            </div>
        </div>
    </div>


@endsection
