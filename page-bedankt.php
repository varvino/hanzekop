<?php wp_head();
get_template_part('template-parts/header') ?>

<main class="container grid align-items--center">
    <div class="grid grid-spacing--one">
        <h1 class="heading--xl margin--none text-align--center">Bedankt voor uw e-mail!</h1>
        <div class="grid justify-content--center">
            <p class="margin-bottom--lg">Wij zullen u binnen 24 uur beantwoorden.</p>
            <a href="<?php echo site_url(); ?>" class="button button--secondary">Terug naar voorpagina</a>
        </div>
    </div>
</main>

<?php get_template_part('template-parts/footer'); ?>