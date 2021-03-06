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
                    {{trans('admin.websiteControll')}}
                </li>
                <li class="breadcrumb-item"><a href="{{ url()->previous() }}"> {{trans('admin.slider')}}
                    </a>
                </li>

                <li class="breadcrumb-item">
                    {{trans('admin.addslider')}}
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

                    {{ Form::open( ['url' => ['sliders'],'method'=>'post','files'=> true] ) }}

                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-3">{{trans('admin.title_ar')}}</label>

                        <div class="col-sm-9">
                            <input name="title_ar" class="form-control" type="text" value="{{old('title_ar')}}"
                                   placeholder="{{trans('admin.title_ar')}}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-3">{{trans('admin.title_en')}}</label>

                        <div class="col-sm-9">
                            <input name="title_en" class="form-control" type="text" value="{{old('title_en')}}"
                                   placeholder="{{trans('admin.title_en')}}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-3">{{trans('admin.sub_title_ar')}}</label>

                        <div class="col-sm-9">
                            <input name="sub_title_ar" class="form-control" type="text" value="{{old('sub_title_ar')}}"
                                   placeholder="{{trans('admin.sub_title_ar')}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-3">{{trans('admin.sub_title_en')}}</label>

                        <div class="col-sm-9">
                            <input name="sub_title_en" class="form-control" type="text" value="{{old('sub_title_en')}}"
                                   placeholder="{{trans('admin.sub_title_en')}}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-3">{{trans('admin.sliderimage')}}</label>

                        <div class="col-sm-9">
                            {{ Form::file('image',array('class'=>'form-control')) }}

                        </div>
                    </div>
                    <div style="text-align: center">
                        {{ Form::submit( trans('admin.edit') ,['class'=>'btn btn-info','style'=>" font-weight: bold"]) }}
                        {{ Form::close() }}
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

@endsection

@section('script')
@endsection
