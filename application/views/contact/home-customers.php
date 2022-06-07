<section class="section brands section">
    <header class="container text-center p-0 mb-0">
        <br>
        <h1 class="section-title">Ils nous font confiance</h1>
    </header>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="slider responsive">
                    <?php foreach ($customers as $customer): ?>
                        <?php if (!$customer->desactive): ?>
                            <div class="mac_slider_item">
                                <div class="mac_slider_img ">
                                    <img src="<?php echo $customer->img ?>" alt="">
                                </div>
                            </div>
                        <?php endif ?>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</section>