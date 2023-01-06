<?php
add_theme_support('category-thumbnails');
add_theme_support( 'post-thumbnails' );

//add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
add_theme_support('post-thumbnails', array('post', 'page'));
add_theme_support('post-formats', array(
    'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video', 'thumbnail'
    
));

remove_filter('the_content', 'wpautop');