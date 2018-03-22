<footer class="content-info">
  @php
    if (! is_active_sidebar('first-footer-widget-area')
      && ! is_active_sidebar('second-footer-widget-area')
      && ! is_active_sidebar('third-footer-widget-area')
      && ! is_active_sidebar('fourth-footer-widget-area')
    )
    return;
  @endphp

  <div class="grid grid--collapse">
    <div>
      <ul class="first quarter left">
        <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
      </ul>
    </div>
    <div>
      <ul class="second quarter">
        <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
      </ul>
    </div>
    <div>
      <ul class="third quarter">
        <?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
      </ul>
    </div>
    <div>
      <ul class="fourth quarter right">
        <?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
      </ul>
    </div>
  </div>

</footer>
