<html class="no-js">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>{{$setting->title}}</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Favicons -->
    <link rel="shortcut icon" href="{{$setting->logo}}">
    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel='stylesheet' href='{{url('front')}}/css/global.css'>
    <link rel='stylesheet' href='{{url('front')}}/css/font-awesome.min.css'>
    <link rel='stylesheet' href='{{url('front')}}/content/photography3/css/structure.css'>
    <link rel='stylesheet' href='{{url('front')}}/content/photography3/css/photography3.css'>
    <link rel='stylesheet' href='{{url('front')}}/content/photography3/css/custom.css'>
    <!-- Revolution Slider -->
    <link rel="stylesheet" href="{{url('front')}}/plugins/rs-plugin-6.custom/css/rs6.css">
    <link rel='stylesheet' href='{{url('front')}}/css/style-demo.css'>
</head>

<body
    class="home page-template-default page template-slider color-custom style-simple button-custom layout-full-width if-zoom if-border-hide no-content-padding no-shadows header-split sticky-header sticky-tb-color ab-hide subheader-both-center menu-link-color menuo-no-borders mobile-tb-center mobile-side-slide mobile-mini-mr-ll tr-menu ">
<div id="Wrapper">
    <div id="Header_wrapper">
        <header id="Header">
            <div id="Top_bar" style="direction: rtl;">
                <div class="container">
                    <div class="column one">
                        <div class="top_bar_left clearfix">
                            <div class="logo">
                                <a id="logo" href="{{url('/')}}" title="BePhotography 3 - Betheme"
                                   data-height="81" data-padding="40"><img class="logo-main scale-with-grid"
                                                                           src="{{$setting->logo}}"
                                                                           data-retina="{{$setting->logo}}" data-height="81"><img
                                        class="logo-sticky scale-with-grid"
                                        src="{{$setting->logo}}"
                                        data-retina="{{$setting->logo}}" data-height="81"><img
                                        class="logo-mobile scale-with-grid"
                                        src="{{$setting->logo}}"
                                        data-retina="{{$setting->logo}}" data-height="81"><img
                                        class="logo-mobile-sticky scale-with-grid"
                                        src="{{$setting->logo}}"
                                        data-retina="{{$setting->logo}}" data-height="81"></a>
                            </div>
                            <div class="menu_wrapper">
                                <nav id="menu">
                                    <ul id="menu-main-menu" class="menu menu-main menu_right">
                                        <li class="current"><a href="{{url('/')}}">الرئيسه </a></li>
                                        <li><a href="#">عن الجمعية</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{url('visionTargetsMessages')}}">الرؤية - الرسالة - الاهداف</a></li>
                                                <li><a href="{{url('architecuture')}}">الهيكل التنظيمي</a></li>
                                                <li><a href="{{url('management')}}">مجلس الادارة</a></li>
                                                <li><a href="{{url('plans-reports')}}">الخطط والتقارير</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">اللوائح والانظمة</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{url('Systems-Policy')}}">الانظمة والسياسات</a></li>
                                                <li><a href="{{url('LecDesicions')}}">المحاضر والقرارات</a></li>
                                                <li><a href="{{route('documents.front')}}">الوثائق</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <ul id="menu-menu-right" class="menu menu-main menu_left">
                                        <li><a href="#">البرامج والمشاريع</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{url('programs-show')}}">البرامج</a></li>
                                                <li><a href="{{url('projects-show')}}">المشاريع</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">المركز الاعلامى</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{url('news-show')}}">الاخبار</a></li>
                                                <li><a href="{{url('media-reports-show')}}">التقارير الاعلامية</a></li>
                                                <li><a href="{{url('coverages-show')}}">التغطيات</a>
                                                <li><a href="{{url('parteners')}}">شركاء النجاح</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">تواصل معنا</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{url('donation-show')}}">خدمات التبرع</a></li>
                                                <li><a href="{{url('contact-show')}}">الشكاوى والاقتراحات</a></li>
                                                <li><a href="{{url('contactInfo')}}">اتصل بنا</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav><a class="responsive-menu-toggle" href="#"><i class="icon-menu-fine"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @yield('slider')
         </header>
    </div>

