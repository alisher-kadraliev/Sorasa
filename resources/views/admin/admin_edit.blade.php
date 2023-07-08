@extends('admin.admin_master')
@section('admin')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
            integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Edit Profile</h4>
                    <form action="{{route('admin.profile.upload', $editData->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder="Name" id="name" name="name"
                                       value="{{$editData->name}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder="username" name="username"
                                       id="username" value="{{$editData->username}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder="Email" name="email" id="email"
                                       value="{{$editData->email}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Profile Image</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="image" name="profile_image">
                            </div>
                            <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                            <img class="rounded avatar-lg w-25 h-25 my-3" id="showImage"
                                 src="{{ (!empty($editData->profile_image))? url('upload/admin_image/'.$editData->profile_image) : url('upload/no_image.jpg')}}">
                        </div>


                        <!-- end row -->
                        <button class="btn btn-success btn-rounded waves-effect waves-light" type="submit">Update
                            Profile
                        </button>
                        <a href="{{route('admin.profile')}}"
                           class="btn btn-primary btn-rounded waves-effect waves-light">Back</a>
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
