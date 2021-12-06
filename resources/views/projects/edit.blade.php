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
                    ادارة الصفحات
                </li>
                <li class="breadcrumb-item"><a href="{{ url()->previous() }}">
                       المشاريع
                    </a>
                </li>

                <li class="breadcrumb-item">
                    تعديل بيانات مشروع
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

                    {!! Form::model($user_data, ['route' => ['projects.update',$user_data->id] , 'method'=>'put' ,'files'=> true ]) !!}
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">العنوان الرئيسي</label>
                        <div class="col-sm-10">
                            <input name="title" class="form-control" type="text" value="{{$user_data->title}}"
                                     required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">المدينة</label>
                        <div class="col-sm-10">
                            <input name="city" class="form-control" type="text" value="{{$user_data->city}}"   required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2">الوصف </label>
                        <div class="col-sm-10">
                                    <textarea name="description" id="" cols="120" rows="5" required>
                                    {{$user_data->description}}
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

                    {{ Form::submit( trans('admin.edit') ,['class'=>'btn btn-info btn-block']) }}
                    {{ Form::close() }}
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

@endsection

@section('script')
@endsection
