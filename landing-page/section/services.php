<?php

if (function_exists('sgi_get_grouped_items')) {
    $groups = sgi_get_grouped_items();
} else {
    $groups = []; // fallback if the plugin is deactivated
}?>
<section id="services">
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
                <?php foreach ($groups as $index => $group) :
                    $lowerTabTitle = strtolower( $group['title'] );
                    $computeTabDataBsTarget = "service${group['title']}Tab";
                    $computeTabItemClass = "rm-services-tab-$lowerTabTitle";
                    ?>
                    <li class="<?php echo esc_attr( $computeTabItemClass ); ?>" role="presentation">
                        <div class="rm-services-tab <?php echo esc_attr( $index === 0 ? 'active' : '' ); ?>"
                             id="home-tab"
                             data-bs-toggle="tab"
                             data-bs-target="#<?php echo esc_attr( $computeTabDataBsTarget ); ?>"
                             type="button" role="tab"
                             aria-controls="<?php echo esc_attr( $computeTabDataBsTarget ); ?>"
                             aria-selected="true">
                            <?php echo esc_html( $group['title'] ); ?>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
            <div class="tab-content" id="myTabContent">
                <?php foreach ($groups as $groupIndex => $group) :
                    $lowerGroupTitle = strtolower( $group['title'] );
                    $computeTabDataBsTarget = "service${group['title']}Tab";
                    $computeAccordionDataBsTarget = "service${group['title']}Accordion"; #serviceGrandAccordion
                    $computeTabClass = "rm-services-tab-content-${lowerGroupTitle}";
                    $items = $group['items'];
                ?>
                    <div class="<?php echo esc_attr($computeTabClass); ?> tab-pane fade <?php echo esc_attr($groupIndex === 0 ? 'active show' : ''); ?>"
                         id="<?php echo esc_attr($computeTabDataBsTarget); ?>"
                         role="tabpanel"
                         aria-labelledby="home-tab"
                         tabindex="0">
                        <div class="accordion" id="<?php echo esc_attr($computeAccordionDataBsTarget); ?>">
                            <?php foreach ($items as $itemIndex => $item) :
                                $collapseId = "collapse{$groupIndex}_{$itemIndex}";
                                $headingId = "heading{$groupIndex}_{$itemIndex}";
                                $isFirst = $itemIndex === 0 ? 'show' : '';
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
                                         data-bs-parent="#<?php echo esc_attr($computeAccordionDataBsTarget); ?>">
                                        <div class="accordion-body">
                                            <?= $item['description'] ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>