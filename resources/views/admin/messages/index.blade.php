@extends('admin.layouts.app')

@section('title')
    Messages Managements
@endsection


@section('bread')
    <li class="breadcrumb-item active">Messages Managements</li>
@endsection


@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data" class="form-material" >
                        {{csrf_field()}}
                        <div class="form-body">
                            <h3 class="card-title">Messages Management</h3>
                            @if(!count($messages))
                                <h1 class="text-danger">There is no Messages Yet..<i class="mdi mdi-emoticon-neutral"></i>
                                </h1><br>
                            @else
                                <div class="table-responsive m-t-40">
                                    <table id="Rtable" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($messages as $message)
                                            <tr>
                                                <td>{{$message->name}}</td>
                                                <td>{{$message->phone}}</td>
                                                <td>{{$message->email}}</td>
                                                <td><span class="label label-{{ $message->status == 0 ? 'warning' : ($message->status == 1 ? 'success' :'') }}">{{$message->status==0 ? 'New Message' :( $message->status==1 ? 'Viewed' : '') }}</span></td>
                                                <td>

                                                    <a href="{{action('Admin\MessageController@show',$message)}}" data-toggle="tooltip"
                                                       data-original-title="Show"> <i
                                                                class="fa fa-eye text-inverse m-r-10"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @endif

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection



@section('script')
    <!-- This is data table -->
    <script src="/assets/backend/js/jquery.dataTables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <script>
        $(document).ready(function() {
            $('#Rtable').DataTable();

        });
    </script>
@endsection
