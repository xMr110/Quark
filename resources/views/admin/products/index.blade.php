@extends('admin.layouts.app')

@section('title')
    Products Managements
@endsection


@section('bread')
    <li class="breadcrumb-item active">Products Managements</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                        <div class="form-body">
                            <h3 class="card-title">Products Management</h3>
                            @if(!count($products))
                                <h1 class="text-danger">There is no Products Yet..<i class="mdi mdi-emoticon-neutral"></i>
                                </h1><br>
                            @else
                                <div class="table-responsive m-t-40">
                                    <table  id="Rtable" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>title</th>
                                            <th>description</th>
                                            <th>Producer</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($products as $product)
                                            <tr>
                                                <td>{{$product->id}}</td>
                                                <td>{{$product->title}}</td>
                                                <td>{!! str_limit(strip_tags($product->description),10)!!}</td>
                                                <td>{{($product->partner_id != null)?$product->partner->title:($product->company!=null?$product->company:'No Producer')}}</td>
                                                <td>
                                                    <a href="{{action('Admin\ProductController@edit',$product)}}" data-toggle="tooltip"
                                                       data-original-title="edit"> <i
                                                            class="fa fa-pencil text-inverse m-r-10"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-delete data-original-title="Delete">
                                                        <i
                                                            class="fa fa-trash text-danger"></i> </a>
                                                    <form id="delete" method="post"
                                                          action="{{action('Admin\ProductController@destroy',$product)}}"
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
