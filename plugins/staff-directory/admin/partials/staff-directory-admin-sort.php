<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       haltameemi2763.sb.cis
 * @since      1.0.0
 *
 * @package    Staff_Directory
 * @subpackage Staff_Directory/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<?php
	query_posts( "post_type=staff_directory".$query_string."&meta_key=staff_directory_sort_order&orderby=meta_value_num&order=ASC" );

	
?>
<fieldset class = "outer">
<legend>Staff Directory Sort Order</legend>

 <?php 
 if ( have_posts() ) : while ( have_posts() ) : the_post(); 
 $custom = get_post_custom($post->ID);
// echo '<label class="staff-directory-label">';
// echo $custom["staff_directory_first_name"][0].' ';
 //echo $custom["staff_directory_last_name"][0].' ';
// echo $custom["staff_directory_job_position"][0].' ';
// echo $custom["staff_directory_email"][0].' ';
 //echo '</label>';
 //echo '<input class="staff-directory-input" type = "text" value = "'.$custom["staff_directory_sort_order"][0].'"><br>';
 echo '<li class="ui-state-default">'.the_post_thumbnail(array(100, 100)).'</li>';
 endwhile; else : 
	echo '<p> '._e( 'Sorry, no staff directory posts to sort.' ); 
endif; 
?>
</ul>
</fieldset>
https://jqueryui.com/sortable/<br>
<!--
<ul id="sortable">
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 1</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 2</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 3</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 4</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 5</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 6</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 7</li>
</ul>
-->