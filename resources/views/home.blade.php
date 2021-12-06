@extends('layouts.master')

@section('css')
    <!-- DataTables -->
    @if(session('lang')=='en')
        <!-- DataTables -->
        <link href="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
              type="text/css"/>
        <link href="{{ URL::asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet"
              type="text/css"/>
        <!-- Responsive datatable examples -->
        <link href="{{ URL::asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet"
              type="text/css"/>

        <link href="{{ URL::asset('assets/plugins/c3/c3.min.css') }}" rel="stylesheet" type="text/css"/>
    @else
        <!-- DataTables -->
        <link href="{{ URL::asset('rtl/assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
              type="text/css"/>
        <link href="{{ URL::asset('rtl/assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet"
              type="text/css"/>
        <!-- Responsive datatable examples -->
        <link href="{{ URL::asset('rtl/assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet"
              type="text/css"/>

        <link href="{{ URL::asset('assets/plugins/c3/c3.min.css') }}" rel="stylesheet" type="text/css"/>
    @endif

@endsection

@section('breadcrumb')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="btn-group pull-right">
                    <ol class="breadcrumb hide-phone p-0 m-0">
                    </ol>
                </div>
                <h4 class="page-title"></h4>
            </div>
        </div>
    </div>
@endsection

@section('content')


    @include('layouts.errors')


    <div class="row">
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="mini-stat clearfix bg-white">
                <span class="mini-stat-icon bg-purple mr-0 float-right"><i class="fa fa-users"></i></span>
                <div class="mini-stat-info">
                    <span class="counter text-black float-center">{{\App\Project::all()->count()}}</span>
                    عدد المشاريع
                </div>
                <div class="clearfix"></div>
            </div>
        </div>


        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="mini-stat clearfix bg-white">
                <span class="mini-stat-icon bg-blue-grey mr-0 float-right"><i class="fa fa-ban"></i></span>
                <div class="mini-stat-info">
                    <span class="counter text-black float-center">{{\App\Program::all()->count()}}</span>
                    عدد البرامج
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="mini-stat clearfix bg-white">
                <span class="mini-stat-icon bg-blue-grey mr-0 float-right"><i class="fa fa-comment"></i></span>
                <div class="mini-stat-info">
                    <span class="counter text-black float-center">{{\App\Coverage::all()->count()}}</span>
                    عدد التغطيات
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="mini-stat clearfix bg-white">
                <span class="mini-stat-icon bg-blue-grey mr-0 float-right"><i class="fa fa-medium"></i></span>
                <div class="mini-stat-info">
                    <span class="counter text-black float-center">{{\App\MediaReport::all()->count()}}</span>
                    عدد التقارير الاعلامية
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>




    <div class="row">


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

