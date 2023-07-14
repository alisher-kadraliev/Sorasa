@extends('admin.admin_master')
@section('admin')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Blog Category</h4>


                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Blog Category Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i = 1)
                        @foreach($blog_category as $item )
                            <tr>
                                <td>{{$i++ }}</td>
                                <td>{{$item->blog_category}}</td>
                                <td><a href="{{route('blog_category.edit',$item->id)}}" class="btn btn-info sm" title=""><i class=" fas fa-edit"></i></a><a
                                        href="{{route('blog_category.delete',$item->id)}}" id="delete" class="btn mx-3 btn-danger sm" title=""><i class="fas fa-trash"></i></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
