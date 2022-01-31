<!-- Home Slider -->
<section id="home" class="section gfullscreen-rest" style="background: linear-gradient(90deg, #969593 0%, #0092e0 100%)">
    <div class="rev_slider_wrapper fullwidthbanner-container tiny_bullet_slider" data-alias="classic4export" data-source="gallery" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
        <div id="irev-slider-4" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
            <ul>
                <?php $i=1; foreach ($APISlider as $slide) : ?>
                <!-- SLIDE  -->
                <li data-index="rs-<?= $i++; ?>" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300">
                    <!-- MAIN IMAGE -->
                    <img src="#" class="rev-slidebg" data-bgcolor='linear-gradient(90deg, #969593 0%, #0092e0 100%)' alt="transparent image">
                    <!-- LAYERS -->
    
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption rev-btn  tp-resizeme" 
                        id="slide-1-layer-1" 
                        data-x="['left','left','left','left']" data-hoffset="['170','120','70','40']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['150','150','150','110']" 
                        data-width="none"
                        data-height="none"
                        data-whitespace="normal"
                        data-type="button" 
                        data-responsive_offset="on" 
                        data-frames='[{"delay":500,"speed":1000,"sfxcolor":"#f8d61b","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(0,0,0);bg:rgb(255,255,255);"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[30,30,30,30]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[30,30,30,30]"
    
                        style="z-index: 5; white-space: normal; font-size: 15px; line-height: 50px; font-weight: 400; color: rgba(255,255,255,1); letter-spacing: 2px; border-color:rgb(255,255,255);border-style:solid;border-width:1px 1px 1px 1px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                        À&nbsp;PROPOS
                    </div>
    
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption   tp-resizeme rs-parallaxlevel-2" 
                        id="slide-1-layer-2" 
                        data-x="['center','center','center','center']" data-hoffset="['500','500','390','220']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-type="image" 
                        data-responsive_offset="on" 
                        data-frames='[{"delay":400,"speed":750,"sfxcolor":"#2f3b4a","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        style="z-index: 6;"><img src="<?php echo $slide->img; ?>" alt="" data-ww="['1000px','1000px','800px','500px']" data-hh="['563px','563px','450','281']" width="1200" height="675" data-no-retina> </div>
    
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption tp-resizeme text-uppercase" 
                        id="slide-1-layer-3" 
                        data-x="['left','left','left','left']" data-hoffset="['150','100','50','20']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-177','-177','-177','-157']" 
                        data-width="none"
                        data-height="none"
                        data-whitespace="normal"
                        data-type="text" 
                        data-responsive_offset="on" 
                        data-frames='[{"delay":300,"speed":750,"sfxcolor":"#f8d61b","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[10,10,10,10]"
                        data-paddingright="[20,20,20,20]"
                        data-paddingbottom="[10,10,10,10]"
                        data-paddingleft="[20,20,20,20]"
    
                        style="z-index: 7; white-space: normal; font-size: 20px; line-height: 20px; font-weight: 600; color: #ffffff; letter-spacing: 4px;"><?php echo $slide->titre; ?></div>
    
                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-1-layer-4" 
                        data-x="['left','left','left','left']" data-hoffset="['150','100','50','20']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-30','-30','-30','-30']" 
                        data-fontsize="['70','70','70','48']"
                        data-lineheight="['70','70','70','50']"
                        data-width="['650','650','620','380']"
                        data-height="none"
                        data-whitespace="normal"
                        data-type="text" 
                        data-responsive_offset="on" 
                        data-frames='[{"delay":200,"speed":750,"sfxcolor":"#f8d61b","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[20,20,20,20]"
                        data-paddingright="[20,20,20,20]"
                        data-paddingbottom="[30,30,30,30]"
                        data-paddingleft="[20,20,20,20]"
                        style="z-index: 8; min-width: 650px; max-width: 650px; white-space: normal; font-size: 70px; line-height: 70px; font-weight: 400; color: #ffffff; letter-spacing: -2px; font-family: serif;"><?php echo $slide->sous_titre; ?>. </div>
                </li>
                <!-- SLIDE  -->
                <?php endforeach; ?>

            </ul>
            <div class="tp-bannertimer" style="height: 5px; background-color: rgba(255, 255, 255, 0.5);"></div>	
        </div><!-- End .rev_slider -->
    </div><!-- End .rev_slider_wrapper -->
</section>
<!-- End #home-slider -->
