@extends('frontlayout.master')
@section('slider')
    <div class="mfn-main-slider mfn-rev-slider">
        <p class="rs-p-wp-fix"></p>
        <rs-module-wrap id="rev_slider_1_1_wrapper" data-source="gallery"
                        style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
            <rs-module id="rev_slider_1_1" data-version="6.2.23">
                <rs-slides>
                    <rs-slide data-key="rs-1" data-title="Slide"
                              data-anim="ei:d;eo:d;s:1000;r:0;t:fade;sl:0;"><img
                            src="{{url('front')}}/content/photography3/images/photography3-slider-bg.png"
                            data-bg="f:contain;" data-parallax="off" class="rev-slidebg">

                        <rs-layer id="slider-1-slide-1-layer-1" class="rs-pxl-1" data-type="image"
                                  data-rsp_ch="on" data-xy="x:c;yo:410px,410px,270px,158px;"
                                  data-text="w:normal;s:20,20,7,4;l:0,0,9,6;"
                                  data-dim="w:598px,598px,458px,370px;h:723px,723px,554px,447px;"
                                  data-frame_0="sX:0.8;sY:0.8;" data-frame_1="e:power4.out;st:200;sp:1000;"
                                  data-frame_999="o:0;st:w;" style="z-index:8;padding: 22px;"><img
                                src="{{$sliders[0]->image}}" width="598"
                                height="723"></rs-layer>

                        <rs-layer id="slider-1-slide-1-layer-2" class="rs-pxl-2" data-type="image"
                                  data-rsp_ch="on" data-xy="xo:200px,200px,80px,49px;yo:510px,510px,206px,127px;"
                                  data-text="w:normal;s:20,20,7,4;l:0,0,9,6;"
                                  data-dim="w:348px,348px,140px,86px;h:403px,403px,162px,99px;"
                                  data-vbility="t,t,f,f" data-frame_0="sX:0.9;sY:0.9;"
                                  data-frame_1="st:250;sp:600;" data-frame_999="o:0;st:w;" style="z-index:9;"><img
                                src="{{$sliders[1]->image}}" width="348" height="403">
                        </rs-layer>
                        <rs-layer id="slider-1-slide-1-layer-3" class="rs-pxl-3" data-type="image"
                                  data-rsp_ch="on"
                                  data-xy="x:r;xo:100px,100px,40px,24px;yo:360px,360px,145px,89px;"
                                  data-text="w:normal;s:20,20,7,4;l:0,0,9,6;"
                                  data-dim="w:415px,415px,167px,103px;h:356px,356px,143px,88px;"
                                  data-vbility="t,t,f,f" data-frame_0="sX:0.9;sY:0.9;"
                                  data-frame_1="st:300;sp:600;" data-frame_999="o:0;st:w;" style="z-index:10;">
                            <img src="{{$sliders[2]->image}}" width="415" height="356">
                        </rs-layer>
                        <rs-layer id="slider-1-slide-1-layer-4" class="rs-pxl-2" data-type="image"
                                  data-rsp_ch="on"
                                  data-xy="x:r;xo:80px,80px,31px,19px;yo:930px,930px,376px,231px;"
                                  data-text="w:normal;s:20,20,7,4;l:0,0,9,6;"
                                  data-dim="w:508px,508px,205px,126px;h:359px,359px,145px,89px;"
                                  data-vbility="t,t,f,f" data-frame_0="sX:0.9;sY:0.9;"
                                  data-frame_1="st:350;sp:600;" data-frame_999="o:0;st:w;" style="z-index:11;">
                            <img src="{{$sliders[3]->image}}" width="508" height="359">
                        </rs-layer>
                        <rs-layer id="slider-1-slide-1-layer-5" class="rs-pxl-3" data-type="image"
                                  data-rsp_ch="on" data-xy="xo:80px,80px,31px,19px;yo:1190px,1190px,481px,296px;"
                                  data-text="w:normal;s:20,20,7,4;l:0,0,9,6;"
                                  data-dim="w:564px,564px,227px,140px;h:323px,323px,130px,80px;"
                                  data-vbility="t,t,f,f" data-frame_1="st:400;sp:600;" data-frame_999="o:0;st:w;"
                                  style="z-index:12;">
                            <img src="{{$sliders[4]->image}}" width="564"
                                 height="323"></rs-layer>


                        <rs-layer id="slider-1-slide-1-layer-8" data-type="text" data-color="#99782f"
                                  data-rsp_ch="on" data-xy="x:c;xo:0,0,0,5px;yo:300px,300px,141px,49px;"
                                  data-text="w:normal;s:50,50,40,25;l:65,65,50,35;a:center;"
                                  data-frame_0="y:-50,-50,-19,-11;" data-frame_1="st:500;sp:600;"
                                  data-frame_999="o:0;st:w;" style="z-index:18">
                            جمعية التراث والوثائق
                            <br> بمحافظة عنيزة
                        </rs-layer>

                    </rs-slide>
                </rs-slides>
            </rs-module>
        </rs-module-wrap>
    </div>

@endsection

@section('content')
    <div id="Content">
        <div class="content_wrapper clearfix">
            <div class="sections_group">
                <div class="entry-content">
                    <div class="section mcb-section mcb-section-1r9gtfuat equal-height-wrap full-width">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap mcb-wrap-vnxbfhkkw one-second valign-top clearfix"
                                 style="background-image:url('{{url('/')}}/front/content/photography3/images/ebook-bg-pattern.png');float: left;">
                                <div class="mcb-wrap-inner"></div>
                            </div>
                            <div class="wrap mcb-wrap mcb-wrap-v1diexgml one-second valign-middle clearfix"
                                 style="padding:70px 50px 15px;background-color:#e1d4c8">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column mcb-item-5kr8wq5pe three-fourth column_column"
                                         style="float:left;">
                                        <div class="column_attr clearfix"> <span
                                                style="margin-right:20px; font-weight:700;"><a
                                                    href="{{$setting->facebook}}">Facebook</a></span><span
                                                style="margin-right:20px; font-weight:700;"><a
                                                    href="{{$setting->instagram}}">Instagram</a></span><span
                                                style="font-weight:700;"><a
                                                    href="{{$setting->linkedin}}">LinkedIn</a></span></div>
                                    </div>
                                    <div class="column mcb-column mcb-item-k1j2guzeu one-fourth column_image">
                                        <div
                                            class="image_frame image_item no_link scale-with-grid alignright no_border">
                                            <div class="image_wrapper"><img class="scale-with-grid"
                                                                            src="{{url('front')}}/content/photography3/images/photography3-icon4.png"
                                                                            alt="photography3-icon4" title width="103"
                                                                            height="13"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section mcb-section mcb-section-0srrco1f9 equal-height-wrap full-width bg-contain"
                         style="padding-top:130px;padding-bottom:90px;padding-left:8%;padding-right:8%;background-color:#e1d4c8;background-image:url({{url('front')}}/content/photography3/images/photography3-section-bg1.png);background-repeat:no-repeat;background-position:center top">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap mcb-wrap-w4qsra3kl two-fifth valign-middle clearfix"
                                 style="padding: 0px 0px 0px 5%;
									height: 485px;
									text-align: right;">
                                <div class="mcb-wrap-inner">
                                    <div
                                        class="column mcb-column mcb-item-n5utv05n0 one column_column column-margin-30px">
                                        <div class="column_attr clearfix">
                                            <h3>


                                                {!! $knowus->text !!}

                                            </h3>
                                            <hr class="no_line" style="margin:0 auto 15px">
                                        </div>
                                    </div>
                                    <div class="column mcb-column mcb-item-bcf6dwnr8 one column_button"><a
                                            class="button button_size_2"
                                            href="{{url('visionTargetsMessages')}}"><span
                                                class="button_label"
                                                style="font-size:20px; font-weight:bold">تعرف علينا</span></a></div>
                                </div>
                            </div>
                            <div class="wrap mcb-wrap mcb-wrap-23gydvqcv three-fifth valign-middle clearfix">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column mcb-item-qtfscouit one column_slider">
                                        <div class="content_slider flat hide-arrows">
                                            <ul class="content_slider_ul">
                                                @foreach($knowus->images as $key=>$image)
                                                    <li class="content_slider_li_{{$key+1}}"><img width="1200"
                                                                                                  height="800"
                                                                                                  src="{{$image->image}}"
                                                                                                  class="scale-with-grid wp-post-image"
                                                                                                  alt loading="lazy">
                                                    </li>

                                                @endforeach
                                            </ul>
                                            <div class="slider_pager slider_pagination"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section mcb-section mcb-section-jsvu333w3"
                         style="padding-bottom:90px;background-image:url({{url('front')}}/content/photography3/images/photography3-section-bg2.png);background-repeat:no-repeat;background-position:center">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap mcb-wrap-4vlz9pm9s one valign-top move-up clearfix"
                                 style="margin-top:-66px">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column mcb-item-vbatdzvew one column_image">
                                        <div
                                            class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                            <div class="image_wrapper"><img class="scale-with-grid"
                                                                            src="{{url('front')}}/content/photography3/images/photography3-icon1.png"
                                                                            alt="photography3-icon1" title width="13"
                                                                            height="133"></div>
                                        </div>
                                    </div>
                                    <div class="column mcb-column mcb-item-8ymfy5h5u one column_divider">
                                        <hr class="no_line" style="margin:0 auto 40px">
                                    </div>
                                </div>
                            </div>

                            @foreach($prgrams as $prgram)
                                <div class="wrap mcb-wrap mcb-wrap-9607wos58 one-third valign-top clearfix"
                                     style="padding:0 2%">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column mcb-item-boslufknc one column_icon_box">
                                            <div class="icon_box icon_position_top no_border">
                                                <div class="image_wrapper">
                                                    <a href="{{url('program/'.$prgram->id)}}">
                                                    <img
                                                        src="{{$prgram->image}}" width="150px" height="150px"
                                                        class="scale-with-grid">
                                                    </a>
                                                </div>
                                                <div class="desc_wrapper">
                                                    <a href="{{url('program/'.$prgram->id)}}">
                                                    <h4 class="title">{{$prgram->title}}</h4>
                                                    <div class="desc">
                                                        <p>
                                                            {{\Illuminate\Support\Str::limit( $prgram->description  , 100, $end='...')}}

                                                        </p>
                                                    </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="wrap mcb-wrap mcb-wrap-qtr9rjn9z one valign-top clearfix">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column mcb-item-efcf17w1p one column_divider">
                                        <hr class="no_line" style="margin:0 auto 80px">
                                    </div>
                                </div>
                            </div>
                            <div class="wrap mcb-wrap mcb-wrap-umah2k2ap one valign-middle clearfix"
                                 style="padding:60px 5% 20px;background-image:url('{{url('front')}}/content/photography3/images/ebook-bg-pattern.png')">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column mcb-item-txg6uy27j one-second column_image"
                                         style="float: left;">
                                        <div class="image_frame image_item no_link scale-with-grid no_border">
                                            <div class="image_wrapper"><img class="scale-with-grid"
                                                                            src="{{$vision->image}}"
                                                                            alt="photography3-home-pic5" title
                                                                            width="780" height="903">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column mcb-column mcb-item-ys4w2sol1 one-second column_column">
                                        <div class="column_attr clearfix"
                                             style="padding:40px 5% 0; text-align:right;direction:rtl">
                                            <h3 style="color:#99782f;">{{$vision->title}}</h3>
                                            <hr class="no_line" style="margin:0 auto 15px">
                                            <ul>
                                                @foreach($vision->visionDetails as $details)

                                                    <li style="color:#caeee3;font-size: 18px;">{{$details->text}}</li>
                                                @endforeach
                                            </ul>
                                            <hr class="no_line" style="margin:0 auto 25px">
                                            <a
                                                class="button button_size_2 button_theme"
                                                href="{{url('visionTargetsMessages')}}"><span
                                                    class="button_label">رؤيتنا</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap mcb-wrap mcb-wrap-c70paceod one valign-top clearfix">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column mcb-item-abndzu0dg one column_divider">
                                        <hr class="no_line" style="margin:0 auto 80px">
                                    </div>
                                    <div class="column mcb-column mcb-item-10cshfxlq one column_image">
                                        <div
                                            class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                            <div class="image_wrapper"><img class="scale-with-grid"
                                                                            src="{{url('front')}}/content/photography3/images/photography3-icon2.png"
                                                                            alt="photography3-icon2" title width="13"
                                                                            height="43"></div>
                                        </div>
                                    </div>
                                    <div class="column mcb-column mcb-item-vl30ad3qu one column_divider">
                                        <hr class="no_line" style="margin:0 auto 40px">
                                    </div>
                                </div>
                            </div>
                            <div class="wrap mcb-wrap mcb-wrap-fsqtthbg6 one valign-top bg-contain clearfix"
                                 style="background-image:url({{url('front')}}/content/photography3/images/photography3-wrap-bg1.png);background-repeat:no-repeat;background-position:center">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column mcb-item-4uprm11ob one column_testimonials">
                                        <div class="testimonials_slider single-photo">
                                            <ul class="testimonials_slider_ul">
                                                @foreach($metsonomias as $metsonomia)
                                                <li>
                                                    <div class="single-photo-img"><img width="85" height="85"
                                                                                       src="{{$metsonomia->image}}"
                                                                                       class="scale-with-grid wp-post-image"
                                                                                       alt
                                                                                       loading="lazy"></div>
                                                    <div class="bq_wrapper">
                                                        <blockquote>
                                                            <h2>{{$metsonomia->text}}</h2>
                                                           <br>
                                                           <br>
                                                           <br>
                                                        </blockquote>
                                                    </div>
                                                    <div class="hr_dots"><span></span><span></span><span></span>
                                                    </div>
                                                    <div class="author">
                                                        <h5>{{$metsonomia->name}}</h5><span class="company">
																 {{$metsonomia->job}}</span>
                                                    </div>
                                                </li>
                                                @endforeach

                                            </ul>
                                            <div class="slider_pager slider_pagination"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section mcb-section mcb-section-fx657zb9v full-width">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap mcb-wrap-izmwiuorp one-second valign-top clearfix"
                                 style="padding:40px 50px 0px;background-image:url('content/photography3/images/ebook-bg-pattern.png')">
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
