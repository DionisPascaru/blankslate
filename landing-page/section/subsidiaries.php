<?php ?>
<section id="branches">
    <div class="container">
        <div class="rm-subsidiaries">
            <div class="rm-section-head">
                <div>
                    <h2 class="rm-heading">FILIALE</h2>
                </div>
                <div>
                    <p class="rm-section-head-text">Găsește filiala cea mai apropiată de tine și fă o programare!</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mb-5">
                    <div class="rm-subsidiary-block rm-subsidiary-block-one">
                        <div class="rm-subsidiary-block-address">
                            <span>Chișinău,</span>
                            <span>bd. Grigore Vieru, 20</span>
                        </div>
                        <div class="rm-subsidiary-block-logo">
                            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/icon-barbershop.svg" alt="barbershop"></div>
                            <div class="rm-subsidiary-block-logo-text">Nr.1</div>
                        </div>
                        <div class="rm-subsidiary-block-button">
                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#subsidiaryOne">Deschide</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mb-5">
                    <div class="rm-subsidiary-block rm-subsidiary-block-two">
                        <div class="rm-subsidiary-block-address">
                            <span>Chișinău,</span>
                            <span>bd. Dacia, 4</span>
                        </div>
                        <div class="rm-subsidiary-block-logo">
                            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/icon-barbershop.svg" alt="barbershop"></div>
                            <div class="rm-subsidiary-block-logo-text">Nr.2</div>
                        </div>
                        <div class="rm-subsidiary-block-button">
                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#subsidiaryTwo">Deschide</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mb-5">
                    <div class="rm-subsidiary-block rm-subsidiary-block-three">
                        <div class="rm-subsidiary-block-address">
                            <span>Chișinău,</span>
                            <span>str. Alba-Iulia 160</span>
                        </div>
                        <div class="rm-subsidiary-block-logo">
                            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/icon-barbershop.svg" alt="barbershop"></div>
                            <div class="rm-subsidiary-block-logo-text">Nr.3</div>
                        </div>
                        <div class="rm-subsidiary-block-button">
                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#subsidiaryThree">Deschide</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mb-5">
                    <div class="rm-subsidiary-block rm-subsidiary-block-four">
                        <div class="rm-subsidiary-block-address">
                            <span>Chișinău,</span>
                            <span>str. Alexei Şciusev, 55</span>
                        </div>
                        <div class="rm-subsidiary-block-logo">
                            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/icon-barbershop.svg" alt="barbershop"></div>
                            <div class="rm-subsidiary-block-logo-text">Nr.4</div>
                        </div>
                        <div class="rm-subsidiary-block-button">
                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#subsidiaryFour">Deschide</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <?php get_template_part('landing-page/section/subsidiaries/subsidiary-one'); ?>
            <?php get_template_part('landing-page/section/subsidiaries/subsidiary-two'); ?>
            <?php get_template_part('landing-page/section/subsidiaries/subsidiary-three'); ?>
            <?php get_template_part('landing-page/section/subsidiaries/subsidiary-four'); ?>
        </div>
    </div>
</section>