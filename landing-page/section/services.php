<?php ?>
<section>
    <div class="container">
        <div class="rm-services">
            <div class="rm-section-head">
                <div>
                    <h2 class="rm-heading">SERVICII</h2>
                </div>
                <div>
                    <p class="rm-section-head-text">SELECTEAZA CATEGORIA DE BARBER</p>
                </div>
            </div>
            <ul class="nav nav-tabs rm-services-tabs" id="myTab" role="tablist">
                <li class="rm-services-tab-basic" role="presentation">
                    <div class="rm-services-tab active" id="home-tab" data-bs-toggle="tab" data-bs-target="#serviceBasicTab" type="button" role="tab" aria-controls="serviceBasicTab" aria-selected="true">Basic</div>
                </li>
                <li class="rm-services-tab-pro" role="presentation">
                    <div class="rm-services-tab" id="profile-tab" data-bs-toggle="tab" data-bs-target="#serviceProTab" type="button" role="tab" aria-controls="serviceProTab" aria-selected="false">Pro</div>
                </li>
                <li class="rm-services-tab-top" role="presentation">
                    <div class="rm-services-tab" id="profile-tab" data-bs-toggle="tab" data-bs-target="#serviceTopTab" type="button" role="tab" aria-controls="serviceTopTab" aria-selected="false">Top</div>
                </li>
                <li class="rm-services-tab-grand" role="presentation">
                    <div class="rm-services-tab" id="profile-tab" data-bs-toggle="tab" data-bs-target="#serviceGrandTab" type="button" role="tab" aria-controls="serviceGrandTab" aria-selected="false">Grand</div>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="rm-services-tab-content-basic tab-pane fade show active" id="serviceBasicTab" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                    <?php get_template_part('landing-page/section/service/service-basic'); ?>
                </div>
                <div class="rm-services-tab-content-pro tab-pane fade" id="serviceProTab" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                    <?php get_template_part('landing-page/section/service/service-pro'); ?>
                </div>
                <div class="rm-services-tab-content-top tab-pane fade" id="serviceTopTab" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                    <?php get_template_part('landing-page/section/service/service-top'); ?>
                </div>
                <div class="rm-services-tab-content-grand tab-pane fade" id="serviceGrandTab" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                    <?php get_template_part('landing-page/section/service/service-grand'); ?>
                </div>
            </div>
        </div>
    </div>
</section>