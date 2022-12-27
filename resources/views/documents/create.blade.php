@extends('layouts.master')

@section('css')
@endsection

@section('breadcrumb')
    <!-- Page-Title -->
    <br>
    <div class="app-content content container-fluid">
        <div class="breadcrumb-wrapper col-xs-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">لوحة التحكم</a>
                </li>
                <li class="breadcrumb-item"><a href="{{route('documents.index')}}">
                    الوثائق
                    </a>
                </li>
                <li class="breadcrumb-item">
                    إضافة  وثيقة جديدة
                </li>
            </ol>
        </div>
    </div>
    <!-- end page title end breadcrumb -->
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            @include('layouts.errors')

            <div class="card m-b-20">
                <div class="card-body">
                    {{ Form::open( ['route' => ['documents.store'],'method'=>'post','files'=> true ] ) }}
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2">عنوان الوثيقة</label>
                        <div class="col-sm-10">
                            <input name="name" class="form-control" type="text" value="{{old('name')}}"
                                   placeholder="عنوان الملف" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2">الملف</label>

                        <div class="col-sm-10">
                            {{ Form::file('image',array('class'=>'form-control')) }}

                        </div>
                    </div>
                    <div style="text-align: center">
                        {{ Form::submit( trans('admin.Add') ,['class'=>'btn btn-info','style'=>" font-weight: bold"]) }}
                        {{ Form::close() }} </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

@endsection

@section('script')
@endsection

