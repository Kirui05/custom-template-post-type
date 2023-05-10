<?php get_header(); ?>
<?php
$args = array('post_type' => 'foods',
    );

    $posts = new WP_Query( $args ); 
        
    while ( $posts->have_posts() ) : $posts->the_post(); 
        the_title();

        the_taxonomies();
       
        the_content();
        
        the_post_thumbnail(); 
    endwhile;
?>
<?php get_footer(); ?>
