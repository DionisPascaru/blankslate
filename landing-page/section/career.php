<?php ?>
<section>
    <div class="container">
        <div class="rm-section-head">
            <div>
                <h2 class="rm-heading">CARIERA</h2>
            </div>
        </div>
        <div class="rm-career">
            <div class="rm-career-content">
                <div class="rm-career-content-title">
                    FII PARTE DIN ECHIPA NOASTRA!
                </div>
                <div class="rm-career-content-text">
                    <p>Vei face parte dintr-o echipă prietenoasă și mereu gata să te ajute să atingi vârfuri noi. Sigur că
                        este vorba despre un salariu decent, achitat la timp, creștere profesională și financiară.
                    </p>
                </div>
                <div class="rm-career-content-positions">
                    <div class="rm-career-content-position">#Administrator</div>
                    <div class="rm-career-content-position">#Barber</div>
                    <div class="rm-career-content-position">#Creator de Content</div>
                </div>
                <div class="rm-career-content-button">
                    <div class="rm-franchise-button">
                        <button type="button" class="rm-btn" data-bs-toggle="modal" data-bs-target="#careerCompleteRequestModal">
                            Completează cererea
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Career complete request modal -->
        <div class="rm-modal modal fade" id="careerCompleteRequestModal" tabindex="-1" aria-hidden="true">
            <div class="rm-modal-dialog modal-dialog modal-xl">
                <div class="rm-modal-content modal-content">
                    <div class="rm-modal-header modal-header">
                        <div class="rm-modal-title modal-title">Completează cererea</div>
                        <button type="button" class="btn rm-btn-close" data-bs-dismiss="modal">
                            <i class="bi bi-x-lg"></i>
                        </button>
                    </div>
                    <div class="rm-modal-body modal-body">
                        <?php echo do_shortcode('[fluentform id="4"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
