<?= $this->extend('template/index') ?>

<?= $this->section('content')  ?>
<section class="section bg-lightgray">
	<header class="container text-center">
        <h1 class="section-title">Réseaux & contact</h1>
    </header>
    <div class="container">
    	<div class="row g-0">
            <div class="col-lg-3">
                <!-- Tab nav -->
                <ul class="nav nav-tabs flex-column nav-tabs-left" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="description-tab7" data-bs-toggle="tab" data-bs-target="#description7" type="button" role="tab" aria-controls="description" aria-selected="true">Moroni</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="details-tab7" data-bs-toggle="tab" data-bs-target="#details7" type="button" role="tab" aria-controls="details" aria-selected="false">Mutsamudu</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="comments-tab7" data-bs-toggle="tab" data-bs-target="#comments7" type="button" role="tab" aria-controls="comments" aria-selected="false">Ntsaoueni</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="video-tab7" data-bs-toggle="tab" data-bs-target="#video7" type="button" role="tab" aria-controls="video" aria-selected="false">Mitsoudje</button>
                    </li>
                </ul>
            </div><!-- End .col-lg-3 -->

            <div class="col-lg-9">
                <!-- Tab panes -->
                <div class="tab-content tab-content-border">
                    <div class="tab-pane fade show active" id="description7" role="tabpanel" aria-labelledby="description-tab7">
                        <p>Sed volutpat ac massa eget lacinia. Suspendisse non purus semper, tellus vel, tristique urna. Aenean volutpat lacus at dolor blandit, vitae lobortis ante semper. In ut rutrum diam, ac congue turpis. Ut bibendum metus fringilla, blandit elit at, commodo neque. Maecenas vehicula volutpat elit, in interdum lacus faucibus sit amet. Nulla accumsan lacus vel neque consequat imperdiet. Proin interdum lectus vitae odio porta lobortis. </p>
                        <p>Sed sed interdum diam. Donec sit amet enim tempor, dapibus nunc eu, tincidunt mi. Vivamus dignissim nisl eu euismod ullamcorper. Donec pellentesque diam id est 
                        tristique vestibulum. Donec eget feugiat ante. Integer arcu libero, dictum nec congue sed, faucibus sit amet lectus. Phasellus consequat id purus in convallis. Nulla quis nunc auctor, pretium enim nec, tristique magna. Vivamus vitae arcu faucibus, dictum magna vel, adipiscing justo. Sed nec ullamcorper lacus. Aenean tincidunt tincidunt ligula.</p>
                        <p>Donec id dui tellus. In ultrices pretium condimentum. Fusce nec sem tortor. Nunc vel leo ipsum. Sed eros nibh, accumsan eget tincidunt non, auctor vitae turpis. Morbi at consectetur mi. Sed eget sapien dapibus, facilisis libero sed, pellentesque lectus. Maecenas malesuada consequat dapibus. Aliquam vel augue laoreet, auctor arcu vitae, accumsan arcu. Sed iaculis tortor non feugiat venenatis. Nam porttitor at euismod auctor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                    </div><!-- End .tab-pane -->

                    <div class="tab-pane fade" id="details7" role="tabpanel" aria-labelledby="details-tab7">
                        <p class="list-margin">The perfect mix of portability and performance in a slim 1" form factor:</p>
                        <ul class="list-style list-square">
                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis maxime, ipsa consectetur.</li>
                            <li>Nam porttitor at euismod auctor. Vestibulum ante ipsum primis.</li>
                            <li>Sed eget sapien dapibus, facilisis libero sed, pellentesque lectus.</li>
                            <li>Donec eget feugiat ante. Integer arcu libero, dictum nec congue sed, faucibus sit amet lectus.</li>
                            <li>Maecenas vehicula volutpat elit, in interdum lacus faucibus sit amet. Nulla accumsan lacus vel neque consequat imperdiet.</li>
                            <li>Windows 8 Pro available liquam fringilla tempus mauris, sit amet mattis nisl egestas;</li>
                            <li>Donec id dui tellus. In ultrices pretium condimentum. Fusce nec sem tortor.</li>
                            <li>Nam porttitor at euismod auctor. Vestibulum ante ipsum primis in.</li>
                            <li>Fugiat ex error tempora, placeat! Repellat deserunt aliquam laborum odio perspiciatis itaque nobis vitae magni.</li>
                        </ul>
                    </div><!-- End .tab-pane -->

                    <div class="tab-pane fade" id="comments7" role="tabpanel" aria-labelledby="comments-tab7">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure animi aperiam, iusto odit rem tenetur molestiae eos. Ipsum dolor, nemo aspernatur laudantium quae pariatur amet, ab explicabo aut, blanditiis dolorem.</p>
                        <p>Fugiat ex error tempora, placeat! Repellat deserunt aliquam laborum odio perspiciatis itaque nobis vitae magni, cum possimus aliquid eius quaerat nisi dignissimos in quia fugit dolor laudantium dolores unde. Necessitatibus.</p>
                    </div><!-- End .tab-pane -->

                    <div class="tab-pane fade" id="video7" role="tabpanel" aria-labelledby="video-tab7">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure animi aperiam, iusto odit rem tenetur molestiae eos. Ipsum dolor, nemo aspernatur laudantium quae pariatur amet, ab explicabo aut, blanditiis dolorem.</p>
                        <p>Fugiat ex error tempora, placeat! Repellat deserunt aliquam laborum odio perspiciatis itaque nobis vitae magni, cum possimus aliquid eius quaerat nisi dignissimos in quia fugit dolor laudantium dolores unde. Necessitatibus.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure animi aperiam, iusto odit rem tenetur molestiae eos. Ipsum dolor, nemo aspernatur laudantium quae pariatur amet, ab explicabo aut, blanditiis dolorem.</p>
                    </div><!-- End .tab-pane -->
                </div><!-- End .tab-content -->
            </div><!-- End .col-lg-9 -->
        </div><!-- End .row -->
    </div>
</section>
<?= $this->endSection();  ?>