<!-- Navigation Bar-->

<header id="topnav">
    <div class="topbar-main">
        <div class="container-fluid">

            <!-- Logo container-->
        <!-- <div class="logo" >
                        <a href="{{url('/')}}" class="logo">
                            <img src="{{ URL::asset('assets/images/logo-sm.png') }}" alt="" height="30">
                        </a>

                    </div> -->
            <!-- End Logo container-->

            <div class="menu-extras topbar-custom">


                @if(session('lang')=='en')
                    <ul class="list-inline float-right mb-0">
                        @else
                            <ul class="list-inline float-left mb-0">
                            @endif


                            <!-- language-->
                                <li class="list-inline-item dropdown notification-list">

                                    {{--                                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"--}}
                                    {{--                                   aria-haspopup="false" aria-expanded="false">--}}
                                    {{--                                   @if(session('lang')=='en')--}}
                                    {{--                                    English <img src="{{ URL::asset('assets/images/flags/us_flag.jpg') }}" class="ml-2" height="16" alt=""/>--}}
                                    {{--                                    @else--}}
                                    {{--                                    العربيه <img src="{{ URL::asset('assets/images/flags/ksa.jpg') }}" class="ml-2" height="16" alt=""/>--}}
                                    {{--                                    @endif--}}

                                    {{--                                </a>--}}
                                    <div class="dropdown-menu dropdown-menu-right language-switch">
                                        <a class="dropdown-item" href="{{url('lang/en')}}"><img
                                                src="{{ URL::asset('assets/images/flags/us_flag.jpg') }}" class="ml-2"
                                                height="16" alt=""/><span> English </span></a>
                                        <a class="dropdown-item" href="{{url('lang/ar')}}"><img
                                                src="{{ URL::asset('assets/images/flags/ksa.jpg') }}" alt=""
                                                height="16"/><span> العربية </span></a>
                                    </div>
                                </li>


                                <!-- notification-->

                                <!-- User-->
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user"
                                       data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        {{Auth::user()->name}}

                                        ({{Auth::user()->job}})
                                    <!-- <img src="{{ URL::asset('assets/images/users/avatar-1.jpg') }}" alt="user" class="rounded-circle"> -->
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-left profile-dropdown ">
                                    <!-- <a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> {{trans('admin.Profile')}}</a> -->
                                    <!-- <a class="dropdown-item" href="#"><i class="dripicons-exit text-muted"></i> {{trans('admin.Logout')}}</a> -->

                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="dripicons-exit text-muted"></i>{{trans('admin.Logout')}}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            @csrf
                                        </form>


                                    </div>
                                </li>
                                <li class="menu-item list-inline-item">
                                    <!-- Mobile menu toggle-->
                                    <a class="navbar-toggle nav-link">
                                        <div class="lines">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </a>
                                    <!-- End mobile menu toggle-->
                                </li>

                            </ul>
            </div>
            <!-- end menu-extras -->

            <div class="clearfix"></div>

        </div> <!-- end container -->
    </div>
    <!-- end topbar-main -->

    <!-- MENU Start -->
    <div class="navbar-custom">
        <div class="container-fluid">

            <div id="navigation" style="text-align:right">

                <!-- Navigation Menu-->
                <ul class="navigation-menu ">


                    <li class="has-submenu ">

                    <li class="has-submenu">
                        <a href="{{url('/admin')}}"><i class="mdi mdi-view-dashboard"></i> {{trans('admin.dashboard')}}
                        </a>

                    </li>


                    <li class="has-submenu">
                        <a href="#"><i class="mdi mdi-cube-outline"></i> {{trans('admin.Controlpanel')}}</a>
                        <ul class="submenu">

                            <li class="">
                                <a href="{{url('users')}}">  {{trans('admin.employeesandper')}}</a>

                            </li>

                            <li class="">
                                <a href="{{url('settings')}}">الاعدادات العامة</a>

                            </li>

                            <li class="">
                                <a href="{{url('slider')}}"> صور السليدر</a>

                            </li>
                            <li class="">
                                <a href="{{url('knowus')}}">نبذة عنا</a>

                            </li>
                            <li class="">
                                <a href="{{url('our-vision')}}">الرؤية</a>

                            </li>
                            <li class="">
                                <a href="{{url('metsonomia')}}">كلمة الموظفين</a>

                            </li>


                        </ul>
                    </li>


                    <li class="has-submenu">
                        <a href="{{url('goals')}}"><i class="mdi mdi-cube-outline"></i> الرؤية والرسالة والاهداف</a>

                    </li>


                    <li class="has-submenu">
                        <a href="#"><i class="mdi mdi-cube-outline"></i> الملفات</a>
                        <ul class="submenu">

                            <li class="">
                                <a href="{{route('pdf',['type' => "Plan"])}}">الخطط</a>
                                <a href="{{route('pdf',['type' => "Report"])}}">التقارير</a>
                                <a href="{{route('pdf',['type' => "System"])}}">الانظمة</a>
                                <a href="{{route('pdf',['type' => "Policy"])}}">السياسات</a>
                                <a href="{{route('pdf',['type' => "Mahder"])}}">المحاضر</a>
                                <a href="{{route('pdf',['type' => "Decision"])}}">القرارات</a>

                            </li>

                        </ul>
                    </li>


                    <li class="has-submenu">
                        <a href="#"><i class="mdi mdi-cube-outline"></i>ادارة الصفحات</a>
                        <ul class="submenu">
                            <li class="">
                                <a href="{{url('programs')}}"> البرامج </a>

                            </li>
                            <li class="">
                                <a href="{{url('projects')}}"> المشاريع </a>

                            </li>
                            <li class="">
                                <a href="{{url('news')}}"> الاخبار </a>

                            </li>

                            <li class="">
                                <a href="{{url('media-report')}}"> التقارير الاعلامية </a>

                            </li>
                            <li class="">
                                <a href="{{url('coverages')}}">التغطيات</a>

                            </li>

                            <li class="">
                                <a href="{{url('partners')}}">شركاء النجاح</a>

                            </li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#"><i class="mdi mdi-cube-outline"></i> التواصل</a>
                        <ul class="submenu">

                            <li class="">
                                <a href="{{url('donations')}}">طلبات التبرع</a>

                            </li>
                            <li class="">
                                <a href="{{url('contact')}}">الشكاوي والاقتراحات</a>

                            </li>


                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="{{url('/map')}}"><i class="mdi mdi-view-dashboard"></i>   الخريطة
                        </a>

                    </li>

                </ul>
                <!-- End navigation menu -->
            </div> <!-- end #navigation -->
        </div> <!-- end container -->
    </div> <!-- end navbar-custom -->
</header>
<!-- End Navigation Bar-->
