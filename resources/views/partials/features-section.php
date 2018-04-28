<div class="grid container grid--gutters grid--collapse features-section">
  <div class="grid--item icon-box">
    <div class="icon-box-cell">
      <img src="<?= get_template_directory_uri(); ?>/assets/images/zap.svg" alt="">
    </div>
    <div class="icon-box-cell">
      <h4 class="text--xsm"><?php the_field('1st_feature_title'); ?></h4>
      <p><?php the_field('1st_feature_body'); ?></p>
    </div>
  </div>
  <div class="grid--item icon-box">
    <div class="icon-box-cell">
      <img src="<?= get_template_directory_uri(); ?>/assets/images/settings.svg" alt="">
    </div>
    <div class="icon-box-cell">
      <h4 class="text--xsm"><?php the_field('2nd_feature_title'); ?></h4>
      <p><?php the_field('2nd_feature_body'); ?></p>
    </div>
  </div>
  <div class="grid--item icon-box">
    <div class="icon-box-cell">
      <img src="<?= get_template_directory_uri(); ?>/assets/images/trending-up.svg" alt="">
    </div>
    <div class="icon-box-cell">
      <h4 class="text--xsm"><?php the_field('3rd_feature_title'); ?></h4>
      <p><?php the_field('3rd_feature_body'); ?></p>
    </div>
  </div>
</div>
