<header class="banner">
  <a class="brand" href="{{ home_url('/') }}">
    <img alt="Peak Dry Ice Blasting" src="/wp-content/uploads/2018/03/peak-logo-1.png">
  </a>
  <nav class="nav-primary navbar navbar-expand-lg navbar-light">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </div>
  </nav>
</header>
