@extends("admin.layouts.layout")


@section("content")

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="post" action="" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>

                    <div class="form-group">
                        <label for="surname">surname</label>
                        <input type="text" class="form-control" id="surname" name="surname">
                    </div>

                    <div class="form-group">
                        <label for="status">status</label>
                        <input type="number" class="form-control" id="status" name="status">
                    </div>

                    <div class="form-group">
                        <label for="image">image</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>

                    <button type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>


@endsection
