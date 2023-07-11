@extends('admin.admin_master')
@section('admin')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
            integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Edit Multi Image </h4>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{route('update.multi.image')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <input type="hidden" name="id" value="{{$editMultiImage->id }}">
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">About Multi Image</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="image" name="multi_image">
                            </div>
                            <label for="" class="col-sm-2 col-form-label"></label>
                            <img class="rounded avatar-lg w-25 h-25 my-3" id="showImage"
                                 src="{{asset($editMultiImage->multi_image)}}">
                        </div>
                        <!-- end row -->
                        <button class="btn btn-success btn-rounded waves-effect waves-light" type="submit">Edit About Multi Image </button>
                        <a href="{{route('all.multi.image')}}" class="btn btn-warning btn-rounded waves-effect waves-light" type="submit">Back</a>
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
