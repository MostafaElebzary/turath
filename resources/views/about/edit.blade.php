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
                        الرؤية والرسالة والاهداف
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

                    {!! Form::model($maindata , ['route' => ['goals.update',$maindata->id] , 'method'=>'put','files'=> true ]) !!}
                    {{ csrf_field() }}
                    <div class="row">

                        <div class="col-sm-12">
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2">الرؤية </label>
                                <div class="col-sm-10">
                                    <textarea name="vision" id="" cols="100" rows="10" required>
                                    {{$maindata->vision}}
                                    </textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2">الرسالة </label>

                                <div class="col-sm-10">
                                    <textarea name="message" id="" cols="100" rows="10" required>
                                    {{$maindata->message}}
                                    </textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2">القيم </label>

                                <div class="col-sm-10">
                                    <textarea name="value" id="" cols="100" rows="10" required>
                                    {{$maindata->value}}
                                    </textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2">الاهداف </label>

                                <div class="col-sm-10">
                                    <textarea name="goals" id="" cols="100" rows="10" required>
                                    {{$maindata->goals}}
                                    </textarea>
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

