<?php

  $posts = blahlab_value($this->instance, 'options.posts');

  $query = array(
    'sort_order' => 'asc',
    'sort_column' => 'post_title',
    'hierarchical' => 1,
    'exclude' => '',
    'include' => '',
    'meta_key' => '',
    'meta_value' => '',
    'authors' => '',
    'child_of' => 0,
    'parent' => -1,
    'exclude_tree' => '',
    'number' => '',
    'offset' => 0,
    'post_type' => 'page',
    'post_status' => 'publish'
  );

  $query['include'] = $posts;

  if (count($posts) > 0) {
    $posts = get_pages($query);
  } else {
    $posts = array();
  }

  wp_reset_postdata();

?>

<div class="full dark no-b-padding">
  <div class="row">
    <div class="large-12 columns">
      <h3 class="sub-title"><?php echo esc_html(blahlab_value($this->instance, 'options.small_title')) ?></h3>
    </div>
  </div>
  <div class="superbig-title b-padding">
    <h2 class="white wow slideInUp"><?php echo esc_html(blahlab_value($this->instance, 'options.title')) ?></h2>
  </div>
</div>

<div class="full no-padding">
  <div class="latest-posts">
    <div class="row">
      <?php foreach ($posts as $index => $the_post): ?>        
        <?php 
          global $post;
          $post = $the_post;
        ?>
        <?php setup_postdata( $post ); ?>
        <?php 
          $end_class = $index == count($posts) - 1 ? 'end' : '';
        ?>
        <div class="large-4 medium-4 columns <?php echo esc_attr(blahlab_value($end_class)) ?>">
          <div class="post">
            <?php the_post_thumbnail(); ?>
            <div class="post-content">
              <h3><a href="<?php echo esc_url(get_permalink()); ?>"><?php echo get_the_title() ?></a></h3>
              <div class="three spacing"></div>
              <p class="read-more"><a href="<?php echo esc_url(get_permalink()); ?>" class="button boxed red tiny">Read more</a></p>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</div>
