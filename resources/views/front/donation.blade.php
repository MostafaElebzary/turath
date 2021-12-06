@extends('frontlayout.master')
@section('styles')
    <link rel='stylesheet' href='{{url('front')}}/content/photography3/css/bootstrap.min.css'>
<style>
    .wrapper-class input[type="radio"] {
        width: 15px;
    }

    .wrapper-class label {
        display: inline;
        margin-left: 5px;
    }
</style>
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
                                        <div class="placeholder"> &nbsp;</div>
                                    </div>
                                    <div class="column mcb-column two-third column_column">
                                        <div class="column_attr clearfix align_center">
                                            <img
                                                src="{{url('front')}}/content/photography3/images/LineDecorationflip.png"
                                                style="width:60%;"/>
                                            <h2 style="color:#99782f;">
                                                خدمات التبرع
                                            </h2>
                                            <img src="{{url('front')}}/content/photography3/images/LineDecoration.png"
                                                 style="width:60%;"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section mcb-section equal-height-wrap full-width bg-contain"
                         style="padding-top:50px;padding-bottom:100px;
                             padding-left:8%;padding-right:8%;background-color:#e1d4c8;
                             background-image:url({{url('front')}}/content/photography3/images/photography3-section-bg1.png);background-repeat:no-repeat;background-position:center top;direction:rtl;">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="vission">
                                    <fieldset>
                                        <legend>طلب تواصل للتبرع</legend>
                                        <form action="{{url('donation')}}" method="post">
                                            @csrf
                                        <div class="row donate">

                                                <div class="col-md-6">
                                                    <label>اسم المتبرع</label>
                                                    <input type="text" name="name" placeholder="اسم المتبرع" required/>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>رقم الجوال</label>
                                                    <input type="text" name="phone" placeholder="رقم الجوال" required/>
                                                </div>
                                                <div class="col-md-4 wrapper-class">
                                                 <input type="radio" name="type" value="Build" id="Build" checked>    <label for="Build">المساهمة في بناء  </label>
                                                </div>
                                                <div class="col-md-4 wrapper-class">
                                                    <input type="radio" name="type" value="Repair" id="Repair"> <label for="Repair">المساهمة في ترميم</label>
                                                </div>
                                                <div class="col-md-4 wrapper-class">
                                                    <input type="radio" name="type" value="Other" id="Other"> <label for="Other">أخرى</label>
                                                </div>

                                                <div class="col-md-3">
                                                    <input type="submit" value="ارسال"/>
                                                </div>

                                        </div>
                                        </form>
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
                                                                            alt="photography3-icon3" title width="133"
                                                                            height="13"></div>
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
