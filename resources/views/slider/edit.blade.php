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
           لوحه التحكم
            </li>
            <li class="breadcrumb-item"><a href="{{ url()->previous() }}"> سليدر
                                </a>
            </li>

            <li class="breadcrumb-item">
            تعديل صورة
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

                {!! Form::model($slider, ['route' => ['slider.update',$slider->id] , 'method'=>'put' ,'files'=> true ]) !!}
                {{ csrf_field() }}

                <div class="form-group row">
                            <label for="example-text-input" class="col-sm-3">الصورة</label>

                            <div class="col-sm-9">
                                {{ Form::file('image',array('class'=>'form-control')) }}
                                <br>
                                <img src="{{url($slider->image) }}"  />

                            </div>
                        </div>

                <div style="text-align: center">
                    {{ Form::submit( trans('admin.edit') ,['class'=>'btn btn-info','style'=>" font-weight: bold"]) }}
                </div>
                {{ Form::close() }}
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    @endsection

    @section('script')
    @endsection
