@extends('admin.admin_master')
@section('admin')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Blogs</h4>


                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Blog Category</th>
                            <th>Title</th>
                            <th>Tags</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i = 1)
                        @foreach($blogs as $blog )
                            <tr>
                                <td>{{$i++ }}</td>
                                <td>{{$blog['category']['blog_category']}}</td>
                                <td>{{$blog->title}}</td>
                                <td>{{$blog->tags}}</td>
                                <td><img src="{{asset($blog->img)}}" class="w-50 h-50" alt=""></td>
                                <td><a href="{{route('blog.edit',$blog->id)}}" class="btn btn-info sm" title=""><i class=" fas fa-edit"></i></a><a
                                        href="{{route('blog.delete',$blog->id)}}" id="delete" class="btn mx-3 btn-danger sm" title=""><i class="fas fa-trash"></i></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
