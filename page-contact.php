<?php wp_head();
get_template_part('template-parts/header');
get_template_part('template-parts/components/contactform-config'); ?>

<main class="container">
    <div class="grid grid-spacing--four">
        <div class="grid grid-column--two grid-spacing--two">
            <div>
                <h1>Wij luisteren naar uw feedback!</h1>
                <div>
                    <p>Als u feedback of klachten heeft horen wij deze maar al te graag.</p>
                    <p>Doormiddels uw hulp kunnen wij onze service verbeteren en uw wensen beter vervullen bij uw volgende verblijf.</p>
                </div>
            </div>

            <form class="grid grid-spacing--one" action="<?php the_permalink(); ?>" method="post">
                <div class="grid">
                    <label class="small-caps" for="contactName"><strong>Naam</strong></label>
                    <input type="text" name="contactName" id="contactName" value="" placeholder="Voer alstublieft uw volledige naam in." />
                </div>
                <div class="grid">
                    <label class="small-caps" for="email"><strong>Email</strong></label>
                    <input type="email" name="email" id="email" value="" placeholder="Voer alstublieft uw e-mail in." />
                </div>
                <div class="grid">
                    <label class="small-caps" for="messageText"><strong>Bericht</strong></label>
                    <textarea name="message" id="messageText" placeholder="Hallo Hanzekop, ik/wij.."></textarea>
                </div>
                <div class="grid">
                    <button class="button button--primary justify-self--end" type="submit">Versturen</button>
                </div>
                <input type="hidden" name="submitted" id="submitted" value="true" />
            </form>
        </div>
        <hr>
        <div class="grid grid-spacing--one">
            <div>
                <h2>Waar zijn wij te vinden?</h2>
                <p>U kunt onze apartementen vinden in het pitoreske Stavoren in Friesland (Gemeente Súdwest-Fryslân).</p>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2407.5048854941906!2d5.354309715963539!3d52.885331616842265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c8bfb2597943bb%3A0xc3d232f67a4ce708!2sHavenweg%2014%2C%208715%20EM%20Stavoren!5e0!3m2!1sen!2snl!4v1588848272390!5m2!1sen!2snl" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
</main>

<?php get_template_part('template-parts/footer'); ?>