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


    if($('.brands_slider').length)
    {
        var brandsSlider = $('.brands_slider');

        brandsSlider.owlCarousel(
        {
            loop:true,
            autoplay:true,
            autoplayTimeout:5000,
            nav:false,
            dots:false,
            autoWidth:true,
            items:8,
            margin:100
        });

        if($('.brands_prev').length)
        {
            var prev = $('.brands_prev');
            prev.on('click', function()
            {
                brandsSlider.trigger('prev.owl.carousel');
            });
        }

        if($('.brands_next').length)
        {
            var next = $('.brands_next');
            next.on('click', function()
            {
                brandsSlider.trigger('next.owl.carousel');
            });
        }
    }

    // slick produits

    var services = $('.service_slider');

    services.owlCarousel(
    {
        loop:true,
        autoplay:true,
        autoplayTimeout:5000,
        nav:false,
        dots:false,
        autoWidth:true,
        items:4,
        margin:25
    });

    // slick customers

    var customers = $('.customer_slider');

    customers.owlCarousel(
    {
        loop:false,
        autoplay:true,
        autoplayTimeout:5000,
        nav:false,
        dots:false,
        autoWidth:true,
        items:4,
        margin:25

    }); 


}); /*ready*/