@extends('admin.admin_master')
@section('admin')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
            integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">About Page </h4>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{route('about.update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <input type="hidden" name="id" value="{{$about->id}}">
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder="Title" id="title" name="title"
                                       value="{{$about->title}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Short Title</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder="Short Title" name="short_title"
                                       id="short_title" value="{{$about->short_title}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Short Description</label>
                            <div class="col-sm-10">
                                <div class="mb-3">
                                        <textarea required="" name="short_description" id="short_description" class="form-control" rows="5">{{$about->short_description}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Long Description</label>
                            <div class="col-sm-10">
                                <textarea id="elm1" name="long_description">{{$about->long_description}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">About Page Image</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="image" name="about_img"
                                       value="{{$about->about_img}}">
                            </div>
                            <label for="" class="col-sm-2 col-form-label"></label>
                            <img class="rounded avatar-lg w-25 h-25 my-3" id="showImage"
                                 src="{{ (!empty($about->about_img))? url($about->about_img) : url('upload/no_image.jpg')}}">
                        </div>
                        <!-- end row -->
                        <button class="btn btn-success btn-rounded waves-effect waves-light" type="submit">Update About
                            Page
                        </button>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div>

    <script>
        $(document).ready(function () {
            $('#image').change(function (e) {
                let reader = new FileReader()
                reader.onload = function (e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            })
        })
    </script>
@endsection
