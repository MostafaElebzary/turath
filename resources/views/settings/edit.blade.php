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
                    لوحة التحكم
                </li>
                <li class="breadcrumb-item"><a href="{{ url()->previous() }}"> الاعدادات
                    </a>
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

                    {!! Form::model($maindata , ['route' => ['settings.update',$maindata->id] , 'method'=>'put','files'=> true ]) !!}
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2">عنوان الموقع</label>

                                <div class="col-sm-10">
                                    <input name="title" class="form-control" type="text" value="{{$maindata->title}}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2">{{trans('admin.email')}}</label>

                                <div class="col-sm-10">
                                    <input name="email" class="form-control" type="email" value="{{$maindata->email}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2">facebook</label>

                                <div class="col-sm-10">
                                    <input name="facebook" class="form-control" type="text" value="{{$maindata->facebook}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2">instagram</label>

                                <div class="col-sm-10">
                                    <input name="instagram" class="form-control" type="text" value="{{$maindata->instagram}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2"> twitter </label>

                                <div class="col-sm-10">
                                    <input name="twitter" class="form-control" type="text" value="{{$maindata->twitter}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2">linkedin</label>

                                <div class="col-sm-10">
                                    <input name="linkedin" class="form-control" type="text" value="{{$maindata->linkedin}}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2">رقم الجوال</label>

                                <div class="col-sm-10">
                                    <input name="phone" class="form-control" type="text" value="{{$maindata->phone}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2">website link</label>

                                <div class="col-sm-10">
                                    <input name="website" class="form-control" type="text" value="{{$maindata->website}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2">  العنوان	 </label>

                                <div class="col-sm-10">
                                    <input name="address" class="form-control" type="text" value="{{$maindata->address}}" required>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-6">

                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2">الشعار</label>

                                <div class="col-sm-10">
                                    {{ Form::file('logo',array('class'=>'form-control')) }}
                                    <a target="_blank" href="{{url($maindata->logo) }}">
                                    <img src="{{url($maindata->logo) }}" style="width:400px;height:150px;" />
                                    </a>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2">صورة الهيكل التنظيمي</label>

                                <div class="col-sm-10">
                                    {{ Form::file('chart_image',array('class'=>'form-control')) }}
                                    <a target="_blank" href="{{url($maindata->chart_image) }}">
                                        <img src="{{url($maindata->chart_image) }}" style="width:400px;height:150px;" />
                                    </a>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2">ملف مجلس الادارة pdf</label>

                                <div class="col-sm-10">
                                    {{ Form::file('board_directors_pdf',array('class'=>'form-control')) }}
                                 <br>
                                    <a target="_blank" class="btn btn-danger" href="{{url($maindata->board_directors_pdf) }}">
                                    <i class="fa fa-file-pdf-o"></i>
                                        اطلاع
                                     </a>
                                </div>
                            </div>
                        </div>
                    </div>






                    {{ Form::submit( trans('admin.edit') ,['class'=>'btn btn-info btn-block']) }}
                    {{ Form::close() }}
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

@endsection

@section('script')
@endsection

