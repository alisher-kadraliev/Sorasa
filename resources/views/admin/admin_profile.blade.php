@extends('admin.admin_master')
@section('admin')
    <div class="row">
        <div class="col-lg-6">
            <div class="card ">
                <img class="img-thumbnail m-auto rounded-circle avatar-xl w-50 h-75" src="{{ (!empty($adminData->profile_image))? url('upload/admin_image/'.$adminData->profile_image) : url('upload/no_image.jpg')}}" >
                <div class="card-body">
                    <h4 class="card-title">Name: {{$adminData->name}}</h4>
                    <hr>
                    <h4 class="card-title">Username: {{$adminData->username}}</h4>
                    <hr>
                    <h4 class="card-title">Email: {{$adminData->email}}</h4>
                    <hr>
                    <a href="{{route('admin.profile.edit',$adminData->id)}}" class="btn btn-info btn-rounded waves-effect waves-light my-3">Edit Profile</a>
                    <p class="card-text">
                        <small class="text-muted">Last updated {{$timeDifference}}</small>
                    </p>
                </div>
            </div>
        </div>


    </div>
@endsection
