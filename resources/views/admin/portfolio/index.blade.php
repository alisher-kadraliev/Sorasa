@extends('admin.admin_master')
@section('admin')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Portfolio</h4>


                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i = 1)
                        @foreach($portfolio as $img )
                            <tr>
                                <td>{{$i++ }}</td>
                                <td>{{$img->name}}</td>
                                <td>{{$img->title}}</td>
                                <td><img src="{{asset($img->img)}}" class="w-50 h-50" alt=""></td>
                                <td><a href="{{route('portfolio.edit',$img->id)}}" class="btn btn-info sm" title=""><i class=" fas fa-edit"></i></a><a
                                        href="{{route('portfolio.delete',$img->id)}}" id="delete" class="btn mx-3 btn-danger sm" title=""><i class="fas fa-trash"></i></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
