<footer>
  <div class="form-section" id="quote-form">
    <div class="text--center text">
      <h5 class="font--white"><?php the_field('quote_form_title'); ?></h5>
      <h6 class="font--400 font--white"><?php the_field('quote_form_body'); ?></h6>
    </div>
    <?php echo do_shortcode('[contact-form-7 id="24" title="Homepage Form"]'); ?>
  </div>
</footer>
