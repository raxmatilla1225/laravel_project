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


                    <div class="form-group">
                        <label for="price">price</label>
                        <input type="number" class="form-control" id="price" name="price">
                    </div>

                    <div class="form-group">
                        <label for="desc">description</label>
                        <textarea name="desc" id="desc" cols="30" rows="10"></textarea>
                    </div>

                    <div class="form-group">
                        <select name="c_id" id="">
                            <option value=" ">Select category</option>

                            @foreach(\App\Models\Category::all() as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="custom-file">
                        <label class="custom-file-label">image</label>
                        <input type="file" class="custom-file-input" name="image">
                    </div>

                    <button type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>


@endsection
