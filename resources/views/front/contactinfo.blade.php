@extends('frontlayout.master')
@section('styles')
    <link rel='stylesheet' href='{{url('front')}}/content/photography3/css/bootstrap.min.css'>

    <style type="text/css">
        /* Set the size of the div element that contains the map */
        #map {
            height: 400px;
            /* The height is 400 pixels */
            width: 100%;
            /* The width is the width of the web page */
        }
    </style>
    <script>
        // Initialize and add the map
        function initMap() {
            // The location of Uluru
            const uluru = { lat:   {{$setting->lat}}, lng:  {{$setting->lng}} };
            // The map, centered at Uluru
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 9,
                center: uluru,
            });
            // The marker, positioned at Uluru
            const marker = new google.maps.Marker({
                position: uluru,
                map: map,
            });
        }
    </script>
@endsection
@section('content')

    <div id="Content">
        <div class="content_wrapper clearfix">
            <div class="sections_group">
                <div class="entry-content">
                    <div class="section mcb-section"
                         style="padding-top:200px;padding-bottom:60px;
                         background-image:url('{{url('front')}}/content/photography3/images/ebook-bg-pattern.png')">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one valign-top clearfix">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one-sixth column_placeholder">
                                        <div class="placeholder"> &nbsp; </div>
                                    </div>
                                    <div class="column mcb-column two-third column_column">
                                        <div class="column_attr clearfix align_center">
                                            <img src="{{url('front')}}/content/photography3/images/LineDecorationflip.png"
                                                 style="width:60%;" />
                                            <h2 style="color:#99782f;">
                                                تواصل معنا
                                            </h2>
                                            <img src="{{url('front')}}/content/photography3/images/LineDecoration.png"
                                                 style="width:60%;" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section mcb-section equal-height-wrap full-width bg-contain"
                         style="padding-top:50px;padding-bottom:100px;padding-left:8%;padding-right:8%;background-color:#e1d4c8;background-image:url(content/photography3/images/photography3-section-bg1.png);background-repeat:no-repeat;background-position:center top;direction:rtl;">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="vission">
                                    <fieldset>
                                        <legend>تواصل معانا</legend>
                                        <div class="section_wrapper mcb-section-inner">

                                            <div class="wrap mcb-wrap one-second valign-middle clearfix"
                                                 style="padding: 0px 4% 0px 0px; height: 706px;">
                                                <div class="mcb-wrap-inner" style="color: green">
                                                    <div class="column mcb-column one column_column">

                                                    </div>
                                                    <div class="column mcb-column one column_column column-margin-10px">
                                                        <div class="column_attr clearfix" style="
                                                        background-repeat:no-repeat;
                                                        background-position:left top; padding:0 60px 0 0">
                                                            <h4>العنوان</h4>
                                                            <p style="color: #1C2A25">
                                                                {{$setting->address}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="column mcb-column one column_column column-margin-10px">
                                                        <div class="column_attr clearfix" style=" background-repeat:no-repeat; background-position:left top; padding:0 60px 0 0">
                                                            <h4>رقم الهاتف</h4>
                                                            <p style="color: #1C2A25">
                                                                {{$setting->phone}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="column mcb-column one column_column column-margin-10px">
                                                        <div class="column_attr clearfix" style=" background-repeat:no-repeat; background-position:left top; padding:0 60px 0 0">
                                                            <h4>البريد الالكترونى</h4>
                                                            <p style="color: #1C2A25">
                                                                {{$setting->email}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="column mcb-column one column_column column-margin-10px">
                                                        <div class="column_attr clearfix" style=" background-repeat:no-repeat; background-position:left top; padding:0 60px 0 0">
                                                            <h4>الموقع الالكترونى</h4>
                                                            <p style="color: #1C2A25">
                                                                {{$setting->website}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wrap mcb-wrap one-second valign-middle clearfix" style="height: 706px;">
                                                <div class="mcb-wrap-inner">
                                                    <div class="column mcb-column one column_image">
                                                        <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                                            <div class="image_wrapper">
                                                                {{--                                                                map--}}
                                                                <div id="map"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section mcb-section mcb-section-fx657zb9v full-width">
                        <div class="section_wrapper mcb-section-inner" style="background-color: #e1d4c8;">
                            <div class="wrap mcb-wrap mcb-wrap-izmwiuorp one-second valign-top clearfix"
                                 style="padding:40px 50px 0px;background-image:url('{{url('front')}}/content/photography3/images/ebook-bg-pattern.png')">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column mcb-item-8b333l87j one column_image">
                                        <div
                                            class="image_frame image_item no_link scale-with-grid alignright no_border">
                                            <div class="image_wrapper"><img class="scale-with-grid"
                                                                            src="{{url('front')}}/content/photography3/images/photography3-icon3.png"
                                                                            alt="photography3-icon3" title width="133" height="13"> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')


{{--    <script src="https://maps.google.com/maps/api/js?sensor=false&key=AIzaSyAIcQUxj9rT_a3_5GhMp-i6xVqMrtasqws"></script>--}}
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIcQUxj9rT_a3_5GhMp-i6xVqMrtasqws&callback=initMap&v=weekly"
        async
    ></script>
@endsection
