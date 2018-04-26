<header class="banner">
  <a class="brand" href="{{ home_url('/') }}">
    <img alt="Peak Dry Ice Blasting" src="<?= get_template_directory_uri(); ?>/assets/images/peak-dry-ice-blasting.png">
  </a>
  <nav class="nav-primary navbar navbar-expand-lg">
    <button class="ml-auto navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </div>
  </nav>
</header>
