<?php
    $args = array(
        'post_type' => ['notices'], /* Your Custom Post Type slug */
        'post_status' => ['publish'], /*Post Status*/
        'numberposts' => 3, /*Number of posts to be displayed, -1 means all*/
        'orderby' => 'post_date', /*Post order*/
        'order' => 'DESC', /* Post order*/
        'suppress_filters' => true
    );
    $postslist = get_posts( $args );
    foreach ( $postslist as $post ) :
        setup_postdata( $post ); 
        //here goes your code
    endforeach;
    wp_reset_postdata();
?>