@extends('admin.admin_master')
@section('admin')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
            integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Home Slide Page</h4>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{route('home.slide.update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <input type="hidden"  name="id" value="{{$HomeSlider->id}}">
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder="Title" id="title" name="title"
                                       value="{{$HomeSlider->title}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder="Description" name="description"
                                       id="description" value="{{$HomeSlider->description}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Video Url</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder="Video " name="home_video"
                                       id="home_video" value="{{$HomeSlider->home_video}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Home Slide Image</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="image" name="home_img"  value="{{$HomeSlider->home_img}}">
                            </div>
                            <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                            <img class="rounded avatar-lg w-25 h-25 my-3" id="showImage"
                                 src="{{ (!empty($HomeSlider->home_img))? url($HomeSlider->home_img) : url('upload/no_image.jpg')}}">
                        </div>


                        <!-- end row -->
                        <button class="btn btn-success btn-rounded waves-effect waves-light" type="submit">Update Home Slide</button>

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
