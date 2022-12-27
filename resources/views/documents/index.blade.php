@extends('layouts.master')
@section('css')
    @if(session('lang')=='en')
        <!-- DataTables -->
        <link href="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
              type="text/css"/>
        <link href="{{ URL::asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet"
              type="text/css"/>
        <!-- Responsive datatable examples -->
        <link href="{{ URL::asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet"
              type="text/css"/>
    @else
        <!-- DataTables -->
        <link href="{{ URL::asset('rtl/assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
              type="text/css"/>
        <link href="{{ URL::asset('rtl/assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet"
              type="text/css"/>
        <!-- Responsive datatable examples -->
        <link href="{{ URL::asset('rtl/assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet"
              type="text/css"/>
    @endif
@endsection
@section('breadcrumb')
    <!-- Page-Title -->
    <br>
    <div class="app-content content container-fluid">
        <div class="breadcrumb-wrapper col-xs-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">لوحة التحكم</a>
                </li>
                <li class="breadcrumb-item">
                    الوثائق
                </li>
            </ol>
        </div>
    </div>
    <!-- end page title end breadcrumb -->
@endsection
@section('content')
    @include('layouts.errors')
    <div class="row">
        <div class="col-12">
            <div class="text-center">
                <a href="{{route('documents.create')}}" class="btn btn-info btn-lg">
                    اضافة وثيقة جديدة</a>
            </div>
            <div class="card m-b-20">
                <div class="card-body">

                    <table id="datatable" class="table table-striped  table-bordered dt-responsive nowrap"
                           cellspacing="0" width="100%">
                        <thead>
                        <tr style='text-align:center'>
                            <th>العنوان</th>
                            <th>النوع</th>
                            <th>الملف</th>
                            <th>تعديل وحذف</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $row)
                            <tr style='text-align:center'>
                                <td>{{$row->name}}</td>
                                <td>{{$row->type}}</td>
                                <td>
                                    @if($row->type == 'pdf')
                                        <a class="btn btn-danger" href="{{url($row->image)}}" target="_blank">
                                            <i class="fa fa-file-pdf-o"></i>
                                        </a>
                                    @elseif($row->type == 'docx')
                                        <a class="btn btn-primary" href="{{url($row->image)}}" target="_blank">
                                            <i class="fa fa-file-word-o"></i>
                                        </a>
                                    @else
                                            <a href="{{url($row->image)}}" target="_blank">
                                                <img src="{{$row->image}}" class="img-thumbnail" style="width: 100px">
                                            </a>
                                        @endif
                                </td>
                                <td>
                                    <form method="get" id='delete-form-{{ $row->id }}'
                                          action="{{url('documents/'.$row->id.'/delete')}}"
                                          style='display: none;'>
                                    {{csrf_field()}}
                                    <!-- {{method_field('delete')}} -->
                                    </form>
                                    <button onclick="if(confirm('{{trans('admin.deleteConfirmation')}}'))
                                        {
                                        event.preventDefault();
                                        document.getElementById('delete-form-{{ $row->id }}').submit();
                                        }else {
                                        event.preventDefault();
                                        }
                                        " class='btn btn-raised btn-danger btn-sml' href=" ">
                                        <i class="fa fa-trash" aria-hidden='true'></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
@section('script')
    <!-- Required datatable js -->
    <script src="{{ URL::asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Buttons examples -->
    <script src="{{ URL::asset('assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/buttons.colVis.min.js') }}"></script>
    <!-- Responsive examples -->
    <script src="{{ URL::asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

    <!-- Datatable init js -->
    <script src="{{ URL::asset('assets/pages/datatables.init.js') }}"></script>
@endsection
