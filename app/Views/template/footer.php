        <footer id="footer" class="pattern9 text-dark">
            <div class="footer-social-icons">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-6 col-lg-4 wow fadeInLeftBig">
                            <div class="contact-info-box text-center">
                                <span class="contact-info-icon yellowbg"><i class="fas fa-map-marked-alt"></i></span>
                                <ul class="contact-info-list">
                                    <li>Moroni Philips Grande Comores</li>
                                </ul>
                            </div><!-- End .contact-info-box -->
                        </div><!-- End .col-lg-4 -->
                        
                        <div class="col-sm-6 col-lg-4 wow fadeInDownBig">
                            <div class="contact-info-box text-center">
                                <span class="contact-info-icon lightbluebg"><i class="fas fa-mobile-alt"></i></span>
                                <ul class="contact-info-list">
                                    <li><a href="tel:#">+(269) 359 2414</a></li>
                                </ul>
                            </div><!-- End .contact-info-box -->
                        </div><!-- End .col-lg-4 -->

                        <div class="col-sm-6 col-lg-4 wow fadeInRightBig">
                            <div class="contact-info-box text-center">
                                <span class="contact-info-icon redbg"><i class="far fa-envelope"></i></span>
                                <ul class="contact-info-list">
                                    <li><a href="mailto:#">mac.assurances@gmail.com</a></li>
                                </ul>
                            </div><!-- End .contact-info-box -->
                        </div><!-- End .col-lg-4 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .footer-social-icons -->

            <div class="container">
                <p>Mac Assurances &copy; 2022</p>
            </div><!-- End .container -->
        </footer>
    </div><!-- End #wrapper -->

    <!-- scroltop -->
    <a href="#top" id="scroll-top" title="Go to top"><i class="fas fa-angle-up"></i></a>

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsNNnxMPiLLBC4VqdR_YUjLefbhYzEN_E"></script>

    <!-- Plugins -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/jquery.waypoints.min.js"></script>
    <script src="/assets/js/owl-carousel.min.js"></script>
    <script src="/assets/js/jquery.validation.min.js"></script>
    <script src="/assets/js/jquery.fittext.js"></script>
    <script src="/assets/js/jquery.hoverdir.js"></script>
    <script src="/assets/js/wow.min.js"></script>
    <script src="/assets/js/jquery.knob.min.js"></script>
    <script src="/assets/js/jquery.countTo.js"></script>
    <script src="/assets/js/isotope.min.js"></script>

    <!-- Revolution Slider -->
    <script src="/assets/js/jquery.themepunch.tools.min.js"></script>
    <script src="/assets/js/jquery.themepunch.revolution.min.js"></script>

    <!--Revolution Slider Extensions  
        (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->	
    <script src="/assets/js/extensions/revolution.addon.slicey.min.js"></script>

    <script src="/assets/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="/assets/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="/assets/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="/assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="/assets/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="/assets/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="/assets/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="/assets/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="/assets/js/extensions/revolution.extension.video.min.js"></script>

    <script src="/assets/js/main.js"></script>

    <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
    <script>
        var revapi;

        $(document).ready(function() {
        if( $("#irev-slider-4").revolution == undefined ){
            revslider_showDoubleJqueryError("#irev-slider-4");
        } else {
            revapi = $("#irev-slider-4").show().revolution({
                sliderType:"standard",
                jsFileLocation:"js/",
                sliderLayout:"fullscreen",
                dottedOverlay:"none",
                delay:9000,
                navigation: {
                    keyboardNavigation:"off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation:"off",
                    mouseScrollReverse:"default",
                    onHoverStop:"off",
                    touch:{
                        touchenabled:"on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    arrows: {
                        style:"uranus",
                        enable:true,
                        hide_onmobile:true,
                        hide_under:778,
                        hide_onleave:false,
                        tmp:'',
                        left: {
                            h_align:"left",
                            v_align:"center",
                            h_offset:15,
                            v_offset:0
                        },
                        right: {
                            h_align:"right",
                            v_align:"center",
                            h_offset:15,
                            v_offset:0
                        }
                    },
                    bullets: {
                        enable:true,
                        hide_onmobile:false,
                        style:"bullet-bar",
                        hide_onleave:false,
                        direction:"horizontal",
                        h_align:"center",
                        v_align:"bottom",
                        h_offset:0,
                        v_offset:30,
                        space:5,
                        tmp:''
                    }
                },
                viewPort: {
                    enable:true,
                    outof:"pause",
                    visible_area:"80%",
                    presize:false
                },
                responsiveLevels:[1240,1024,778,480],
                visibilityLevels:[1240,1024,778,480],
                gridwidth:[1240,1024,778,480],
                gridheight:[600,600,500,400],
                lazyType:"all",
                parallax: {
                    type:"mouse",
                    origo:"slidercenter",
                    speed:2000,
                    levels:[2,3,4,5,6,7,12,16,10,50,47,48,49,50,51,55],
                    type:"mouse",
                },
                shadow:0,
                spinner:"spinner2",
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,
                shuffle:"off",
                autoHeight:"off",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                fullScreenOffset: "90px",
                debugMode:false,
                fallbacks: {
                    simplifyAll:"off",
                    nextSlideOnWindowFocus:"off",
                    disableFocusListener:false,
                }
            });
        }
        });	/*ready*/
    </script>
</body>

</html>