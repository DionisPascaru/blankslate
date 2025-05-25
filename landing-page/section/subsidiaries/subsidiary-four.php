<?php ?>
<div class="rm-modal rm-subsidiary-modal modal fade rm-subsidiary-modal-four" id="subsidiaryFour" tabindex="-1">
    <div class="rm-modal-dialog modal-dialog modal-xl">
        <div class="rm-modal-content modal-content">
            <div class="rm-modal-header modal-header">
                <div class="rm-subsidiary-modal-logo">
                    <div class="rm-subsidiary-modal-logo-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-barbershop.svg" alt="barbershop">
                    </div>
                    <div class="rm-subsidiary-modal-logo-text">Nr.4</div>
                </div>

                <button type="button" class="btn rm-btn-close" data-bs-dismiss="modal"><i class="icon-close"></i></button>
            </div>
            <div class="rm-modal-body modal-body">
                <ul class="nav nav-tabs rm-subsidiary-tabs" id="myTab" role="tablist">
                    <li class="rm-subsidiary-tab" role="presentation">
                        <div class="rm-subsidiary-tab-button active" id="subsidiaryFourTeamTab" data-bs-toggle="tab" data-bs-target="#subsidiaryFourTeamTabPane" type="button" role="tab" aria-selected="true">Echipa</div>
                    </li>
                    <li class="rm-subsidiary-tab" role="presentation">
                        <div class="rm-subsidiary-tab-button" id="subsidiaryFourAboutTab" data-bs-toggle="tab" data-bs-target="#subsidiaryFourAboutTabPane" type="button" role="tab" aria-selected="false">Despre</div>
                    </li>
                    <li class="rm-subsidiary-tab" role="presentation">
                        <div class="rm-subsidiary-tab-button" id="subsidiaryFourGraphTab" data-bs-toggle="tab" data-bs-target="#subsidiaryFourGraphTabPane" type="button" role="tab" aria-selected="false">Grafic</div>
                    </li>
                    <li class="rm-subsidiary-tab" role="presentation">
                        <div class="rm-subsidiary-tab-button" id="subsidiaryFourContactTab" data-bs-toggle="tab" data-bs-target="#subsidiaryFourContactTabPane" type="button" role="tab" aria-selected="false">Contacte</div>
                    </li>
                </ul>
                <div class="tab-content rm-subsidiary-modal-tabs-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="subsidiaryFourTeamTabPane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <?php echo do_shortcode('[simple-staff-list group="str-alba-iulia-160"]'); ?>
                    </div>
                    <div class="tab-pane fade" id="subsidiaryFourAboutTabPane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                        <div class="rm-subsidiary-tab-content-gallery">
                            <?php echo do_shortcode('[rl_gallery id="2564"]'); ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="subsidiaryFourGraphTabPane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                        <ul class="rm-list-group">
                            <li class="rm-list-group-item">
                                <div class="rm-list-group-item-day">Luni</div>
                                <div class="rm-list-group-item-time">10:00 / 20:00</div>
                            </li>
                            <li class="rm-list-group-item">
                                <div class="rm-list-group-item-day">Marti</div>
                                <div class="rm-list-group-item-time">10:00 / 20:00</div>
                            </li>
                            <li class="rm-list-group-item">
                                <div class="rm-list-group-item-day">Miercuri</div>
                                <div class="rm-list-group-item-time">10:00 / 20:00</div>
                            </li>
                            <li class="rm-list-group-item">
                                <div class="rm-list-group-item-day">Joi</div>
                                <div class="rm-list-group-item-time">10:00 / 20:00</div>
                            </li>
                            <li class="rm-list-group-item">
                                <div class="rm-list-group-item-day">Vineri</div>
                                <div class="rm-list-group-item-time">10:00 / 20:00</div>
                            </li>
                            <li class="rm-list-group-item">
                                <div class="rm-list-group-item-day">Sambata</div>
                                <div class="rm-list-group-item-time">10:00 / 20:00</div>
                            </li>
                            <li class="rm-list-group-item">
                                <div class="rm-list-group-item-day">Duminica</div>
                                <div class="rm-list-group-item-time">10:00 / 20:00</div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="subsidiaryFourContactTabPane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">
                        <div class="rm-subsidiary-modal-contacts">
                            <div class="rm-subsidiary-modal-contacts-address">+373 68 433 444</div>
                            <div class="rm-subsidiary-modal-contacts-phone">Chișinău, str. Alba-Iulia 160</div>
                            <div class="rm-subsidiary-modal-contacts-links">
                                <div>
                                    <a href="https://www.facebook.com/realmen.md">
                                        <i class="icon-facebook"></i>
                                    </a>
                                </div>
                                <div>
                                    <a href="https://www.instagram.com/realmen_buiucani">
                                        <i class="icon-instagram"></i>
                                    </a>
                                </div>
                                <div>
                                    <a href="https://www.tiktok.com/@realmen.md">
                                        <i class="icon-tick-tock"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>