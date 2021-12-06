@extends('layouts.master')

@section('css')
@endsection

@section('breadcrumb')
    <!-- Page-Title -->
    <!-- Page-Title -->
    <br>
    <div class="app-content content container-fluid">
        <div class="breadcrumb-wrapper col-xs-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    التواصل
                </li>
                <li class="breadcrumb-item"><a href="{{ url()->previous() }}">
                        التواصل والشكاوى
                    </a>
                </li>

                <li class="breadcrumb-item">
                    عرض
                </li>

            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="row" style="text-align:center">
        <div class="col-12">
            @include('layouts.errors')

            <div class="card m-b-20">
                <div class="card-body" style='text-align:right'>


                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">الموضوع</label>
                        <div class="col-sm-10">
                            <input name="title" class="form-control" type="text" value="{{$user_data->subject}}"
                                   readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">الاسم</label>
                        <div class="col-sm-10">
                            <input name="title" class="form-control" type="text" value="{{$user_data->name}}"
                                   readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">رقم الجوال</label>
                        <div class="col-sm-10">
                            <input name="title" class="form-control" type="text" value="{{$user_data->phone}}"
                                   readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">البريد الاليكتروني</label>
                        <div class="col-sm-10">
                            <input name="title" class="form-control" type="text" value="{{$user_data->email}}"
                                   readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">النوع</label>
                        <div class="col-sm-10">
                            <input name="title" class="form-control" type="text"
                                   value="{{trans('admin.'.$user_data->type)}}"
                                   readonly>
                        </div>
                    </div>



                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2">الرسالة </label>
                        <div class="col-sm-10">
                                    <textarea name="description" id="" cols="90" rows="5" readonly>
                                    {{$user_data->msg}}
                                    </textarea>
                        </div>
                    </div>


                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

@endsection

@section('script')
@endsection

