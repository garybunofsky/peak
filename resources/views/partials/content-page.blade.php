<div class="page-content--wrapper page-content--subpage">
  @if (get_page_template_slug() == 'views/template-locations.blade.php')
    <h1>{!! App::title() !!}</h1>
    <h2><?php the_field('subheading') ?></h2>
  @endif
  @php(the_content())
  {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
</div>
