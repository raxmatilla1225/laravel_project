@extends("admin.layouts.layout")


@section("content")

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form method="post"   action="{{route('update.category')}}"  enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <input type="hidden" value="{{$id}}" name="id">

                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Name</label>
                        <input value="{{$name}}" type="text" class="form-control" id="exampleInputName" name="name">
                    </div>

                    <div class="custom-file">
                        <label class="custom-file-label" for="img">Image</label>
                        <input  type="file" value="" class="custom-file-input" id="img" name="image">
                    </div>

                    <button type="submit" class="btn btn-primary my-3">Submit</button>
                </form>
            </div>
            <div class="col-md-6">
                <img width="400" src="{{asset("/uploads/category_images/".$image) }}" alt="">

            </div>
        </div>





@endsection
