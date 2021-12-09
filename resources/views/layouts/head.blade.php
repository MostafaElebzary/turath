<link rel="shortcut icon" href="{{$setting->logo}}">

@yield('css')

<!-- Basic Css files -->
<link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Cairo' rel='stylesheet'>

<style>
    body {
        font-family: 'Cairo';
        font-size: 18px;
    }

    label {
        font-family: 'Cairo';
        font-size: 18px;
        font-weight: bold;
    }

    th {
        font-family: 'Cairo';
        font-size: 18px;
    }

    li {
        text-align: right;
    }

    .vertical-center {
        margin: 0;
        position: absolute;
        top: 50%;
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
    }

</style>
