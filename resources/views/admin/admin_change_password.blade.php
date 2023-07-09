@extends('admin.admin_master')
@section('admin')


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Change Password Page</h4> <br>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{route('admin.profile.update.password')}}" method="post" >
                        @csrf
                        @method('put')

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Old Password</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="password" placeholder="Old Password" name="old_password"
                                       id="old_password" >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">New Password</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="password" placeholder="New Password" name="new_password"
                                       id="new_password" >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Confirm New Password</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="password" placeholder=" Confirm New Password" name="confirm_password"
                                       id="confirm_password" >
                            </div>
                        </div>
                        <br>


                        <!-- end row -->
                        <button class="btn btn-success btn-rounded waves-effect waves-light" type="submit">Change Password
                        </button>
                        <a href="{{route('admin.profile')}}"
                           class="btn btn-primary btn-rounded waves-effect waves-light">Back</a>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div>

@endsection
