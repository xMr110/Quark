@extends('admin.layouts.app')

@section('title')
    Literatures Managements
@endsection


@section('bread')
    <li class="breadcrumb-item active">Literatures Managements</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-body">
                        <h3 class="card-title">Literatures Management</h3>
                        @if(!count($literatures))
                            <h1 class="text-danger">There is no Literatures Yet..<i class="mdi mdi-emoticon-neutral"></i>
                            </h1><br>
                        @else
                            <div class="table-responsive m-t-40">
                                <table  id="Rtable" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>title</th>
                                        <th>description</th>
                                        <th>Industry</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($literatures as $literature)
                                        <tr>
                                            <td>{{$literature->id}}</td>
                                            <td>{{$literature->title}}</td>
                                            <td>{!! str_limit(strip_tags($literature->description),10)!!}</td>
                                            <td>{{$literature->industry->title}}</td>
                                            <td>
                                                <a href="{{action('Admin\LiteratureController@edit',$literature)}}" data-toggle="tooltip"
                                                   data-original-title="edit"> <i
                                                        class="fa fa-pencil text-inverse m-r-10"></i></a>
                                                <a href="#" data-toggle="tooltip" data-delete data-original-title="Delete">
                                                    <i
                                                        class="fa fa-trash text-danger"></i> </a>
                                                <form id="delete" method="post"
                                                      action="{{action('Admin\LiteratureController@destroy',$literature)}}"
                                                >
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
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
