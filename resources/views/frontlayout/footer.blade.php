
<footer id="Footer" class="clearfix">
    <div class="widgets_wrapper">
        <div class="container">
            <div class="column one-fourth">
                <aside class="widget_text widget widget_custom_html">
                    <div class="textwidget custom-html-widget">
                        <p> <img src="{{$setting->logo}}" style="width: 100%;"> </p>
                    </div>
                </aside>
            </div>
            <div class="column one-third">
                <aside class="widget_text widget widget_custom_html">
                </aside>
            </div>
            <div class="column one-fourth" style="direction: rtl;">
                <aside class="widget_text widget widget_custom_html">
                    <div class="textwidget custom-html-widget">
                        <div>
                            <h4
                                style="color:#99782f;margin-bottom: 24px;border-bottom: 2px solid #99782f;padding-bottom: 15px;">
                                وسائل التواصل</h4>
                            <p><i class="icon-phone"
                                  style="font-size: 24px;padding: 10px;color:#99782f"></i>{{$setting->phone}} </p>
                            <p> <i class="fa fa-envelope"
                                   style="font-size: 24px;padding: 10px;color:#99782f"></i>{{$setting->email}}
                            </p>
                            <p> <i class="fa fa-globe"
                                   style="font-size: 24px;padding: 10px;color:#99782f"></i>{{$setting->website}} </p>
                            <p> <i class="fa fa-map-marker"
                                   style="font-size: 24px;padding: 10px;color:#99782f"></i>
                                {{$setting->address}}
                                   </p>
                        </div>
                    </div>
                </aside>
            </div>

        </div>
    </div>
    <div class="footer_copy">
        <div class="container">
            <div class="column one"> <a id="back_to_top" class="footer_button" href><i
                        class="icon-up-open-big"></i></a>
                <div class="copyright"> &copy; All right reserved.Created by UramIT</div>
                <ul class="social">
                    <li class="facebook"> <a href="{{$setting->facebook}}" title="Facebook"><i class="icon-facebook"></i></a> </li>
                    <li class="twitter"> <a href="{{$setting->twitter}}" title="Twitter"><i class="icon-twitter"></i></a> </li>
                    <li class="linkedin"> <a href="{{$setting->linkedin}}" title="LinkedIn"><i class="icon-linkedin"></i></a> </li>
                    <li class="instagram"> <a href="{{$setting->instagram}}" title="Instagram"><i class="icon-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</div>
<div id="Side_slide" class="right dark" data-width="250">
    <div class="close-wrapper"> <a href="#" class="close"><i class="icon-cancel-fine"></i></a> </div>
    <div class="menu_wrapper"></div>
    <div class="extras">
        <div class="extras-wrapper"></div>
    </div>
    <ul class="social">
        <li class="facebook"> <a href="{{$setting->facebook}}"  title="Facebook"><i class="icon-facebook"></i></a> </li>
        <li class="twitter"> <a href="{{$setting->twitter}}" title="Twitter"><i class="icon-twitter"></i></a> </li>
        <li class="linkedin"> <a href="{{$setting->linkedin}}" title="LinkedIn"><i class="icon-linkedin"></i></a> </li>
        <li class="instagram"> <a href="{{$setting->instagram}}" title="Instagram"><i class="icon-instagram"></i></a> </li>
    </ul>
</div>
<div id="body_overlay"></div>
<!-- JS -->
<script src="{{url('front')}}/js/jquery-2.1.4.min.js"></script>
<script src="{{url('front')}}/js/mfn.menu.js"></script>
<script src="{{url('front')}}/js/jquery.plugins.js"></script>
<script src="{{url('front')}}/js/jquery.jplayer.min.js"></script>
<script src="{{url('front')}}/js/animations/animations.js"></script>
<script src="{{url('front')}}/js/translate3d.js"></script>
<script src="{{url('front')}}/js/scripts.js"></script>
<script src="{{url('front')}}/js/email.js"></script>
<script src="{{url('front')}}/plugins/rs-plugin-6.custom/js/revolution.tools.min.js"></script>
<script src="{{url('front')}}/plugins/rs-plugin-6.custom/js/rs6.min.js"></script>
<script>
    var revapi1, tpj;

    function revinit_revslider11() {
        jQuery(function () {
            tpj = jQuery;
            revapi1 = tpj("#rev_slider_1_1");
            if (revapi1 == undefined || revapi1.revolution == undefined) {
                revslider_showDoubleJqueryError("rev_slider_1_1");
            } else {
                revapi1.revolution({
                    sliderType: "hero",
                    sliderLayout: "fullwidth",
                    visibilityLevels: "1240,1240,778,480",
                    gridwidth: "1920,1920,778,480",
                    gridheight: "1500,1500,960,720",
                    spinner: "spinner9",
                    perspective: 600,
                    perspectiveType: "global",
                    spinnerclr: "#caeee3",
                    editorheight: "1500,768,960,720",
                    responsiveLevels: "1240,1240,778,480",
                    progressBar: {
                        disableProgressBar: true
                    },
                    navigation: {
                        onHoverStop: false
                    },
                    parallax: {
                        levels: [1, 2, 4, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 30],
                        type: "mouse",
                        speed: 0
                    },
                    fallbacks: {
                        allowHTML5AutoPlayOnAndroid: true
                    },
                });
            }
        });
    }
    var once_revslider11 = false;
    if (document.readyState === "loading") {
        document.addEventListener('readystatechange', function () {
            if ((document.readyState === "interactive" || document.readyState === "complete") && !once_revslider11) {
                once_revslider11 = true;
                revinit_revslider11();
            }
        });
    } else {
        once_revslider11 = true;
        revinit_revslider11();
    }
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-52CM7KJK0K"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'G-52CM7KJK0K');
</script>

@yield('js')

</body>

</html>
