@extends('admin.admin_master')
@section('admin')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">All Multi Image</h4>


                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>About Multi Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i = 1)
                        @foreach($allMultiImage as $img )
                            <tr>
                                <td>{{$i++ }}</td>
                                <td><img src="{{asset($img->multi_image)}}" alt=""></td>
                                <td><a href="{{route('edit.multi.image',$img->id)}}" class="btn btn-info sm" title=""><i class=" fas fa-edit"></i></a><a
                                        href="{{route('delete.multi.image',$img->id)}}" id="delete" class="btn mx-3 btn-danger sm" title=""><i class="fas fa-trash"></i></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection
