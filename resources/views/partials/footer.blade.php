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


<!--footer class="content-info">
  @php
  if (   ! is_active_sidebar( 'first-footer-widget-area'  )
        && ! is_active_sidebar( 'second-footer-widget-area' )
        && ! is_active_sidebar( 'third-footer-widget-area'  )
        && ! is_active_sidebar( 'fourth-footer-widget-area' )
    )
    return;
  @endphp
  <div class="grid">
    @php(dynamic_sidebar('sidebar-footer'))
    <div class="">
      <h5>About Us</h5>
      <ul>
        <li>
          <a href="#">Item</a>
        </li>
        <li>
          <a href="#">Item</a>
        </li>
        <li>
          <a href="#">Item</a>
        </li>
        <li>
          <a href="#">Item</a>
        </li>
      </ul>
    </div>

    <div class="">
      <h5>Blog</h5>
      <ul>
        <li>
          <a href="#">Item</a>
        </li>
        <li>
          <a href="#">Item</a>
        </li>
        <li>
          <a href="#">Item</a>
        </li>
        <li>
          <a href="#">Item</a>
        </li>
      </ul>
    </div>

    <div class="">
      <h5>Contact Us</h5>
      <ul>
        <li>
          <a href="#">Item</a>
        </li>
        <li>
          <a href="#">Item</a>
        </li>
        <li>
          <a href="#">Item</a>
        </li>
        <li>
          <a href="#">Item</a>
        </li>
      </ul>
    </div>

    <div class="">
      <h5>Stay in Touch</h5>
      <ul>
        <li>
          <a href="#">Item</a>
        </li>
        <li>
          <a href="#">Item</a>
        </li>
        <li>
          <a href="#">Item</a>
        </li>
        <li>
          <a href="#">Item</a>
        </li>
      </ul>
    </div>

  </div>
</footer-->
