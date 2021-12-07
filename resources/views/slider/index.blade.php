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
                <li class="breadcrumb-item">
                    لوحه التحكم
                </li>
                <li class="breadcrumb-item"> صور السليدر

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
            <div>

            </div>
            <div class="card m-b-20">
                <div class="card-body">

                    <table id="datatable" class="table table-striped  table-bordered dt-responsive nowrap"
                           cellspacing="0" width="100%">
                        <thead style="font-family: Cairo;font-size: 18px;">
                        <tr style='text-align:center; font-family: Cairo;font-size: 18px;'>
                            <th>#</th>
                            <th>الصورة</th>

                            <th>تعديل</th>
                        </tr>
                        </thead>


                        <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach($sliders as $user)

                            <tr style='text-align:center'>

                                <td>{{$i}}</td>

                                <td><img src="{{url($user->image) }}" style="width:150px;height:150px;"/>
                                </td>
                                <td> <a class='btn btn-raised btn-success btn-sml'
                                        href=" {{url('slider/'.$user->id.'/edit')}}"><i class="fa fa-edit"></i></a>
                                </td>

                            </tr>
                            @php
                                $i++;
                            @endphp
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
