










<?php
get_header();
?>
This is the plugin archive template 


<?php   
//short bio
  add_filter("the_content", "plugin_myContentFilter");

  function plugin_myContentFilter($content)
  {
	  //https://stackoverflow.com/questions/3147898/how-to-set-character-limit-on-the-content-and-the-excerpt-in-wordpress
    // Take the existing content and return a subset of it
    return substr($content, 0, 52);
  }
?>


<?php
$posts =get_posts(array(

      'post_type' => 'staff_directory',
      'posts_per_page' => -1,
	  'meta_key'=> 'staff_directory_sort_order',
      'orderby'=> 'meta_value',
      'order'=> 'ASC'
    ));
if($posts):?>

 <b>archive template</b><br>
 
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 <b>Post Title:<?php the_title(sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>'); ?></b><br>
 <b>Short Bio:<?php  the_content(); ?></b><br>
 <b>Post Thumbnail:<?php  echo get_the_post_thumbnail(); ?><br><br><br><br><br><br><br><br>
 <?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
 <?php endif; ?>
 <b></b>
 </main>
 <div id = "sidebar">
	<div id="sidebar-primary" class="sidebar">
	<?php get_sidebar(); ?>
	</div>
		
	 </div> <!-- sidebar -->
 </div><!-- wrapper -->
<?php get_footer(); ?>

<?php endif; ?>








