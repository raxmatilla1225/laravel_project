@extends("admin.layouts.layout")


@section("content")

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form method="post"   action="{{route('store.admin')}}"  enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
                    </div>

                    <div class="custom-file">
                        <label class="custom-file-label" for="img">Image</label>
                        <input type="file" class="custom-file-input" id="img" name="image">
                    </div>

                    <button type="submit" class="btn btn-primary my-3">Submit</button>
                </form>
            </div>
        </div>
    </div>


@endsection
