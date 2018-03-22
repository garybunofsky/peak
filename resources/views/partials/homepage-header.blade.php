<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<div class="homepage-header" style="background-image: url('<?php echo $backgroundImg[0]; ?>'); background-repeat: no-repeat;">
  <div class="header-content">
    <h1>{!! App::title() !!}</h1>
    <h2>Suscipit quaerendum ad, viris tacimates sea at. Et modo dictas omnesque has, eam persius labores.</h2>
    <div class="form-box">
      <input type="text" name="" value="" placeholder="Your Email Address">
      <button class="button button--blue form-control large" type="button" name="button">Get a Quote </button>
    </div>
  </div>
</div>
