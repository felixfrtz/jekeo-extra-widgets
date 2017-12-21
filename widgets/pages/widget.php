<?php

class Blahlab_Pages_Widget extends Blahlab_Vue_Widget {

  public $widget_title = "Pages";
  public $widget_id = 'pages';
  public $post_type = '';
  public $taxonomy = '';
  public $classname = '';

  public $defaults = array(
    'small_title' => '',
    'title' => '',
    'posts' => array()
  );

}

?>