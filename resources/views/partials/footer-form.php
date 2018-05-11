<footer>
  <div class="form-section" id="quote-form">
    <div class="text--center text">
      <h5 class="font--white"><?php the_field('quote_form_title'); ?></h5>
      <h6 class="font--400 font--white"><?php the_field('quote_form_body'); ?></h6>
    </div>
    <?php echo do_shortcode('[contact-form-7 id="24" title="Homepage Form"]'); ?>
  </div>
  <div class="social">
    <a href="https://www.linkedin.com/company/peak-dry-ice-blasting-llc" target="_blank" rel="noopener">
      <img src="<?= get_template_directory_uri(); ?>/assets/images/linkedin.svg" alt="linkedin">
    </a>
    <a href="https://www.facebook.com/pg/PeakDryIceBlasting/about/" target="_blank" rel="noopener">
      <img src="<?= get_template_directory_uri(); ?>/assets/images/facebook.svg" alt="facebook">
    </a>
  </div>
</footer>
