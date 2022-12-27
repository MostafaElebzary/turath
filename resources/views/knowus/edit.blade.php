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
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">
                    لوحة التحكم
                    </a>
                </li>
                <li class="breadcrumb-item"> نبذه عنا</li>
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

                    {!! Form::model($maindata , ['route' => ['knowus.update',$maindata->id] , 'method'=>'put','files'=> true ]) !!}
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-6">

                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2"> نبذه عنا </label>

                                <div class="col-sm-10">
                                    <textarea name="text" class="form-control" id="" cols="30" rows="10" required>
                                        {{$maindata->text}}
                                    </textarea>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-6">

                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2">ارفق الصور</label>

                                <div class="col-sm-10">
                                    {{ Form::file('image[]',array('class'=>'form-control','multiple'=>'multiple')  ) }}

                                </div>
                            </div>

                            <div class="form-group row">
                                 @if($maindata->images->count() > 0)
                                    @foreach($maindata->images as $image)
                                        <div class="col-sm-10" style="text-align: left">
                                            <br>
                                            <img src="{{url($image->image)}}" style="width:400px;height:150px;padding: 40px"/>

                                            <a  class="btn btn-danger"
                                               href="{{url("delete_img/".$image->id) }}">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
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

