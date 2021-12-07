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
                <li class="breadcrumb-item"><a href="{{ url()->previous() }}">
                 كلمة الموظفين
                    </a>
                </li>

                <li class="breadcrumb-item">
                   تعديل
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

                    {!! Form::model($user_data, ['route' => ['metsonomia.update',$user_data->id] , 'method'=>'put' ,'files'=> true ]) !!}
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">الاسم</label>
                        <div class="col-sm-10">
                            <input name="name" class="form-control" type="text" value="{{$user_data->name}}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">الوظيفة</label>
                        <div class="col-sm-10">
                            <input name="job" class="form-control" type="text" value="{{$user_data->job}}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2">الكلمة </label>
                        <div class="col-sm-10">
                                    <textarea name="text" id="" cols="100" rows="5" required>
                                    {{$user_data->text}}
                                    </textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2">الصورة</label>

                        <div class="col-sm-10">
                            {{ Form::file('image',array('class'=>'form-control')) }}
                            <br>
                            <img src="{{url($user_data->image) }}" style="width:50%;height:150px;" />

                        </div>
                    </div>

<div style="text-align: center">
                    {{ Form::submit( trans('admin.edit') ,['class'=>'btn btn-info','style'=>" font-weight: bold"]) }}
                    {{ Form::close() }} </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

@endsection

@section('script')
@endsection

