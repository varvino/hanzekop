    <head>
        <?php wp_head();
        get_template_part('template-parts/header');
        ?>

        <main class="container grid grid-spacing--two">
            <div>
                <h1 class="margin-bottom--none"><?php the_title(); ?></h1>
                <p class="text--muted margin-bottom--md"><?php the_field('introduction') ?></p>
            </div>
            <div>
                <div class="gallery spotlight-group">
                    <?php
                    $images = get_field('apartment_gallery');
                    if ($images) : ?>
                        <?php foreach ($images as $image) : ?>
                            <a class="gallery__item spotlight" href="<?php echo wp_get_attachment_url($image['ID']) ?>" data-lightbox="<?php echo get_the_ID(); ?>">
                                <img src="<?php echo esc_url($image['url']); ?>" />
                            </a>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="grid grid-column--two grid-spacing--two">
                <div>
                    <div class="margin-bottom--md">
                        <h2>Voorzieningen</h2>
                        <p class="text--muted">Onze appartementen zijn voorzien van de onderstaande voorzieningen.</p>
                    </div>
                    <div>
                        <?php
                        // Load field settings and values.
                        $field = get_field_object('facilities');
                        $facilities = $field['value'];

                        // Display labels.
                        if ($facilities) : ?>
                            <ul class="list--reset">
                                <?php foreach ($facilities as $facility) : ?>
                                    <li><?php echo $field['choices'][$facility]; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
                <div>
                    <div class="margin-bottom--md">
                        <h2>Huisregels</h2>
                        <p class="text--muted">We vragen u om zich te houden aan onze huisregels.</p>
                    </div>
                    <div class="margin-bottom--md">
                        <ul class="checkout-times list--reset">
                            <li>
                                <strong>Check-in</strong><span>Na 15:00 uur.</span>
                            </li>
                            <li>
                                <strong>Check-out</strong><span>Voor 10.00 uur.</span>
                            </li>
                        </ul>
                    </div>
                    <a href="<?php site_url('terms-services') ?>" target="_blank" class="button button--primary">Bekijk huisregels</a>
                </div>
                <div>
                    <h2>Annuleringsvoorwaarden</h2>
                    <p class="text--muted">Als u binnen 7 dagen van aankomsttijd annuleert ontvangt u geen betaling retour.</p>
                </div>
                <?php if (get_field('file')) : ?>
                    <div>
                        <h2>Beschikbaarheid</h2>
                        <p class="text--muted">Bekijk alstublieft de beschikbaarheid voor uw data met onze spreadsheet (dit is een tijdelijke oplossing).</p>
                        <a href="<?php the_field('file') ?>" target="_blank" class="button button--primary">Bekijk</a>
                    </div>
                <?php endif; ?>

                <div class="grid grid-column__span--two grid-spacing--two">
                    <div>
                        <h2>Locatie</h2>
                        <p class="text--muted">Stavoren - Friesland</p>
                        <h3>Ligging</h3>
                        <p>Direct liggend aan de waterkant van Stavoren heeft u een prachtig zicht op het IJsselmeer!
                        </p>
                        <h3>Buurt</h3>
                        <p>Binnen een paar minuten bevindt u zichzelf in het pittoreske dorp van Stavoren, hier kunt u verscheidene winkeltjes en restaurantjes vinden - hieronder valt ook een grote supermarkt.</p>
                        <h3>Openbaar vervoer</h3>
                        <p>Net buiten het dorp bevind zich het treinstation van Stavoren, hier kunt u elk uur een trein naar Leeuwarden pakken voor een leuke city-trip.</p>
                        <a href="https://www.ns.nl/stationsinformatie/stv/stavoren" target="_blank" class="button button--primary">Bekijk stationsinformatie</a>
                    </div>
                    <div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2407.5048854941906!2d5.354309715963539!3d52.885331616842265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c8bfb2597943bb%3A0xc3d232f67a4ce708!2sHavenweg%2014%2C%208715%20EM%20Stavoren!5e0!3m2!1sen!2snl!4v1588848272390!5m2!1sen!2snl" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </main>

        <?php get_template_part('template-parts/footer'); ?>