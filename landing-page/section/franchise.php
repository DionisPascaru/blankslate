<?php ?>
<section id="franchise">
    <div class="rm-franchise">
        <div class="container">
            <div class="rm-franchise-heading">
                <h2>FRANCIZA</h2>
            </div>
            <div class="rm-franchise-buttons">
                <div class="rm-franchise-button">
                    <button type="button" class="rm-btn" data-bs-toggle="modal" data-bs-target="#franchiseReadMoreModal">
                        Afla mai multe
                    </button>
                </div>
                <div class="rm-franchise-button">
                    <button type="button" class="rm-btn" data-bs-toggle="modal" data-bs-target="#receiveOfferModal">
                        Primește oferta
                    </button>
                </div>
            </div>

            <!-- Franchise read more modal -->
            <div class="rm-modal modal fade" id="franchiseReadMoreModal" tabindex="-1" aria-hidden="true">
                <div class="rm-modal-dialog modal-dialog modal-xl">
                    <div class="rm-modal-content modal-content">
                        <div class="rm-modal-header modal-header">
                            <div class="rm-modal-title modal-title">Franciza REALMEN</div>
                            <button type="button" class="btn rm-btn-close" data-bs-dismiss="modal"><i
                                        class="icon-close"></i></button>
                        </div>
                        <div class="rm-modal-body modal-body">
                            <div class="rm-modal-body-title">Privilegii:</div>
                            <div class="rm-modal-body-content">
                                <p>* Unul dintre cele mai recunoscute și neobișnuite barbeshopuri pe piață;</p>
                                <p>* Oferirea suportului consultativ în legătura cu crearea, lansarea și promovarea
                                    locației;</p>
                                <p>* Brandbook complet;</p>
                                <p>* Susținerea în găsirea și perfectarea specialiștilor (barberi, administratori,
                                    etc);</p>
                                <p>* Oferirea softului CRM și introducerea ta în administrarea corectă a afacerii;</p>
                                <p>* Te ajutăm în conectarea ta cu branduri de talie națională și internațională;</p>
                                <p>* Multe altele...</p>
                            </div>

                            <div class="rm-modal-body-title">De ce noi?</div>
                            <div class="rm-modal-body-content">
                                <p>1. Bussines modelul companiei noastre este gândit și structurat de ani de zile…</p>
                                <p>2. Din 2017 am muncit și muncim în numele “mărcii comerciale”
                                </p>
                                <p>3. La noi există disciplină, regulament și respect reciproc.
                                </p>
                                <p>4. REAL MEN nu-i simplu barbershop pentru angajați, îi o familie unde ținem unu la
                                    altu și ne implicăm direct pentru o viață mai calitativă, iar pentru clienți îi un
                                    club pentru bărbați.
                                </p>
                            </div>

                            <div class="rm-modal-body-title">Scopurile:</div>
                            <div class="rm-modal-body-content">
                                <p>1. Promovăm excelența în toate aspectele serviciilor noastre, preferând să oferim
                                    calitate superioară în loc de cantitate.
                                </p>
                                <p>2. Serviciile noastre sunt concepute pentru a crește încrederea fiecărui bărbat în
                                    sine, contribuind la o viață de succes și echilibrată.
                                </p>
                                <p>3. Ne străduim să îmbinăm estetica masculină cu succesul personal al fiecărui client.
                                    La REAL MEN, credem că felul în care un bărbat arată îi influențează direct
                                    încrederea în sine și succesul, de aceea ne orientăm spre dezvoltarea
                                    individualității și a stilului personal al fiecăruia.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Franchise receive offer modal -->
            <div class="rm-modal modal fade" id="receiveOfferModal" tabindex="-1" aria-hidden="true">
                <div class="rm-modal-dialog modal-dialog modal-lg">
                    <div class="rm-modal-content modal-content">
                        <div class="rm-modal-header modal-header">
                            <div class="rm-modal-title modal-title">Primește oferta</div>
                            <button type="button" class="btn rm-btn-close" data-bs-dismiss="modal"><i
                                    class="icon-close"></i></button>
                        </div>
                        <div class="rm-modal-body modal-body">
                            <?php echo do_shortcode('[fluentform id="5"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>