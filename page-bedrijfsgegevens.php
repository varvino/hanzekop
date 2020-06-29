<head>
    <?php wp_head();
    get_template_part('template-parts/header');
    ?>

    <main class="container">

        <h1><?php the_title() ?></h1>
        <p class="text--muted">Hier kunt u onze bedrijfsgegevens vinden.</p>
        <div class="grid grid-column--two">
            <div>
                <h2>Algemene gegevens</h2>
                <div>
                    <?php
                    if (have_rows('general_details')) :
                        while (have_rows('general_details')) : the_row(); ?>

                            <ul>
                                <?php if (get_sub_field('company_name')) : ?>
                                    <li>
                                        <strong>
                                            Bedrijfsnaam
                                        </strong>
                                        <div>
                                            <?php the_sub_field('company_name'); ?>
                                        </div>
                                    </li>
                                <?php else :
                                endif; ?>

                                <li>
                                    <strong>
                                        Bedrijfsadres
                                    </strong>
                                    <div>
                                        Grote Kranerweerd 7<br>
                                        8064 PE Zwartsluis
                                    </div>
                                </li>
                                
                                <?php if (get_sub_field('ceo')) : ?>
                                    <li>
                                        <strong>
                                            Management
                                        </strong>
                                        <div>
                                            <?php the_sub_field('ceo'); ?>
                                        </div>
                                    </li>
                                <?php else :
                                endif; ?>

                                <?php if (get_sub_field('company_email')) : ?>
                                    <li>
                                        <strong>
                                            Email
                                        </strong>
                                        <div>
                                            <?php the_sub_field('company_email'); ?>
                                        </div>
                                    </li>
                                <?php else :
                                endif; ?>

                                <?php if (get_sub_field('company_phone_number')) : ?>
                                    <li>
                                        <strong>
                                            Telefoon
                                        </strong>
                                        <div>
                                            <?php the_sub_field('company_phone_number'); ?>
                                        </div>
                                    </li>
                                <?php else :
                                endif; ?>
                            </ul>

                    <?php endwhile;
                    else :
                    endif;
                    ?>
                </div>
            </div>
            <div>
                <h2>Financiële gegevens</h2>
                <?php

                // check if the repeater field has rows of data
                if (have_rows('financial_details')) :

                    // loop through the rows of data
                    while (have_rows('financial_details')) : the_row(); ?>

                        <ul>
                            <?php if (get_sub_field('tax_number')) : ?>
                                <li>
                                    <strong>
                                        BTW-nummer
                                    </strong>
                                    <div>
                                        <?php the_sub_field('tax_number'); ?>
                                    </div>
                                </li>
                            <?php else :
                            endif; ?>
                        </ul>

                <?php endwhile;

                else :

                // no rows found

                endif;

                ?>
            </div>
        </div>

    </main>

    <?php get_template_part('template-parts/footer'); ?>