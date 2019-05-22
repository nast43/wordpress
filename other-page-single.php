<?php
$post = $wp_query->post;

if ( in_category( 'work' ) ) {
  include( TEMPLATEPATH.'/single-work-cat.php' );
} 
else {
  include( TEMPLATEPATH.'/single-generic.php' );
}
?>
