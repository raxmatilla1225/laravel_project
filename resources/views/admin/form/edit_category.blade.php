@extends("admin.layouts.layout")


@section("content")

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="post" action="" enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <div class="form-group">
                        <label for="name">name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>

                    <button type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>


@endsection
