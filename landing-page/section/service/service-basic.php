<?php
$serviceBasicData = [
    [
        'title' => "Frizură bărbați",
        'content' => "Frizură bărbătească ce include spălarea capului și nemijlocit frizură și styling.",
        'price' => "250-300 MDL"
    ],
    [
        'title' => "Modelarea bărbii",
        'content' => "Modelarea formei bărbii, crearea conturului perfect pentru barba ta și aranjarea acesteia cu ajutorul produselor cosmetice.",
        'price' => "150-200 MDL"
    ],
    [
        'title' => "Ras royal",
        'content' => "Curățarea și tratarea pielii cu aburi, atenuarea părului țepos cu pre-shave, aplicarea spumei de ras, și, nemijlocit bărbieritul în cîteva etape.",
        'price' => "150-250 MDL"
    ],
    [
        'title' => "Camuflarea părului",
        'content' => "Camuflarea părului este un serviciu conceput pentru bărbați, care vă permite să schimbați culoarea părului cu un colorant special în doar cîteva minute.",
        'price' => "250-600 MDL"
    ],
    [
        'title' => "Camuflarea bărbii",
        'content' => "O procedura simplă și rapidă de tonare, care prevede alegerea maximal potrivită nuanței naturale a bărbii dvs.",
        'price' => "200-500 MDL"
    ],
    [
        'title' => "Epilare față cu ceară",
        'content' => "Este o precedura dureroasă, dar efectivă. Poți scăpa de părul nedorit simplu și rapid.",
        'price' => "100-250 MDL"
    ],
    [
        'title' => "Mask (clay gold black)",
        'content' => "Tratarea pielii cu aburi, curățarea tenului cu scrab, aplicarea măștii, hidratarea pielii și masajul feței.",
        'price' => "200 MDL"
    ],
    [
        'title' => "Curățarea urechilor",
        'content' => "Componentele naturale ale lumânării în timpul procesului de ardere creează efectul încălzirii și masajului, înmoaie dopurile de sulf, ceea ce contribuie la îndepărtarea rapidă și nedureroasă a acestora.",
        'price' => "200 MDL"
    ],
    [
        'title' => "Complex",
        'content' => "Complexul include frizură bărbatească și modelarea bărbii.",
        'price' => "400-450 MDL"
    ],
    [
        'title' => "Frizură copii 7+",
        'content' => "Frizură stilată pentru fiul dvs include: nemijlocit tunsoarea propriu–zisă, spălarea capului și styling.",
        'price' => "250-300 MDL"
    ],
    [
        'title' => "Tată + fiul",
        'content' => "Serviciul dat include o frezură stilată pentru tine si fiul dumnevoastră.\n\n",
        'price' => "<span>-10% (Frizură + Frizură)</span>"
    ],
    [
        'title' => "Tată + fiul",
        'content' => "Serviciul dat include un complex pentru tine si o frezură stilată fiului dumnevoastră.\n\n",
        'price' => "<span>-10% (Complex + Frizură)</span>"
    ]
];
?>

<div class="accordion" id="serviceBasicAccordion">
    <?php foreach ($serviceBasicData as $index => $item):
        $collapseId = "collapse{$index}";
        $headingId = "heading{$index}";
        $isFirst = $index === 0 ? "show" : "";
        ?>
        <div class="accordion-item">
            <h2 class="accordion-header" id="<?= $headingId ?>">
                <div class="rm-accordion-heading <?= $isFirst ? '' : 'collapsed' ?>"
                     type="button"
                     data-bs-toggle="collapse"
                     data-bs-target="#<?= $collapseId ?>"
                     aria-expanded="<?= $isFirst ? 'true' : 'false' ?>"
                     aria-controls="<?= $collapseId ?>">
                    <div class="rm-accordion-heading-title"><?= $item['title'] ?></div>
                    <div class="rm-accordion-heading-price"><?= $item['price'] ?></div>
                </div>
            </h2>
            <div id="<?= $collapseId ?>" class="accordion-collapse collapse <?= $isFirst ?>"
                 data-bs-parent="#serviceBasicAccordion">
                <div class="accordion-body">
                    <?= $item['content'] ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
