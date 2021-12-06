@extends('layouts.master')

@section('css')
@endsection

@section('breadcrumb')
<!-- Page-Title -->
<br>
    <div class="app-content content container-fluid">
        <div class="breadcrumb-wrapper col-xs-12">
            <ol class="breadcrumb">
            <li class="breadcrumb-item">
                     لوحة التحكم
                </li>
                <li class="breadcrumb-item"><a href="{{ url()->previous() }}">
                       المشاريع
                    </a>
                    </li>

                    <li class="breadcrumb-item">
                     اضافة مشروع جديد
                </li>

            </ol>
        </div>
    </div>
<!-- end page title end breadcrumb -->
@endsection

@section('content')
             <div class="row" >
                    <div class="col-12">
                    @include('layouts.errors')

                        <div class="card m-b-20">
                            <div class="card-body" >

                            {{ Form::open( ['url' => ['projects'],'method'=>'post','files'=> true] ) }}
                                 {{ csrf_field() }}

                                <div class="form-group row">
                                     <label for="example-text-input" class="col-sm-2 col-form-label">العنوان الرئيسي</label>
                                    <div class="col-sm-10">
                                        <input name="title" class="form-control" type="text" value="{{old('title')}}"   required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                     <label for="example-text-input" class="col-sm-2 col-form-label">المدينة</label>
                                    <div class="col-sm-10">
                                        <input name="city" class="form-control" type="text" value="{{old('city')}}"   required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2">الوصف </label>
                                    <div class="col-sm-10">
                                    <textarea name="description" id="" cols="120" rows="5" required>

                                    </textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2">الصورة</label>

                                    <div class="col-sm-10">
                                        {{ Form::file('image',array('class'=>'form-control')) }}

                                    </div>
                                </div>


                                {{ Form::submit( trans('admin.Add') ,['class'=>'btn btn-info btn-block']) }}
            {{ Form::close() }}
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

@endsection

@section('script')
@endsection

