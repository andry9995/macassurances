<!--  Begin Home Contact -->
<section id="contactus" class="section bg-lightgray">
    <header class="container text-center">
        <h1 class="section-title">Contactez-nous</h1>
    </header>

    <div class="container">
        
        <div class="row">
            <div class="col-lg-6 wow fadeInLeftBig">
                <div id="map"></div><!-- End #map -->
                
            </div>
            <div class="col-lg-6 wow fadeInRightBig">
                <div class="row justify-content-center">
                    <div class="col-sm-12">
                        <!-- <h2 class="text-center lg-margin">Entrer en contact</h2> -->
                        <form action="<?php echo site_url('welcome/post'); ?>" id="contact-form" method="post" novalidate>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="contactname" id="contactname" required class="form-control form-control-lg">
                                        <label for="contactname" class="animated-label">Nom *</label>
                                    </div><!-- End .form-group -->
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" name="contactemail" id="contactemail" required class="form-control form-control-lg">
                                        <label for="contactemail" class="animated-label">Email *</label>
                                    </div><!-- End .form-group -->
                                </div>
                            </div>


                            <div class="form-group">
                                <input type="text" name="contactsubject" id="contactsubject" class="form-control form-control-lg">
                                <label for="contactsubject" class="animated-label">Objet</label>
                            </div><!-- End .form-group -->

                            <div class="form-group">
                                <textarea name="contactmessage" id="contactmessage" class="form-control form-control-lg" cols="30" rows="7"></textarea>
                                <label for="contactmessage" class="animated-label textarea-label">Message *</label>
                            </div><!-- End .form-group -->

                            <div class="form-group text-right mb-0">
                                <input type="submit" class="btn btn-mac btn-lg" value="Envoyer">
                            </div><!-- End .form-group -->
                        </form>
                    </div><!-- End .col-md-10 -->
                </div><!-- End .row -->
                
            </div>
        </div>

    </div><!-- End .container -->
</section>
<!-- #End Home Contact -->