@extends('admin.admin_master')
@section('admin')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
            integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Portfolio Edit</h4>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{route('blog_category.update',$category->id)}}" method="post" >
                        @csrf
                        @method('put')
                        <div class="row mb-3">
                            <label  class="col-sm-2 col-form-label">Blog Category Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder="category" id="blog_category" name="blog_category" value="{{$category->blog_category}}">
                            </div>
                        </div>
                        <button class="btn btn-success btn-rounded waves-effect waves-light" type="submit">Update Blog Category</button>
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
