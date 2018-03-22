<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<div class="subpage-header" style="background-image: url('<?php echo $backgroundImg[0]; ?>'); background-repeat: no-repeat;">
  <div class="subpage-content">
    <h1>{!! App::title() !!}</h1>
    <h2><?php the_field('subheading') ?></h2>
  </div>
</div>
