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
	global $post;
	$custom = get_post_custom($post->ID);
	$staff_directory_first_name = $custom["staff_directory_first_name"][0];

	$staff_directory_last_name = $custom["staff_directory_last_name"][0];
	$staff_directory_job_position = $custom["staff_directory_job_position"][0];
	
	$staff_directory_email = $custom["staff_directory_email"][0];

	
	$staff_directory_sort_order = $custom["staff_directory_sort_order"][0];
		
?>
<fieldset class = "outer">
<legend>Staff Directory Fields</legend>
	<label class="staff-directory-label">First Name:</label>
	<input class="staff-directory-input"  name="staff_directory_first_name" type="text" value="<?php echo $staff_directory_first_name; ?>" placeholder="John"  required /><br>
	<label class="staff-directory-label">Last Name:</label>
	<input class="staff-directory-input"  name="staff_directory_last_name" type="text" value="<?php echo $staff_directory_last_name; ?>" placeholder="Doe" required /><br>
	
	<label class="staff-directory-label">Email:</label>
	<input class="staff-directory-input"  name="staff_directory_email" type="email" value="<?php echo $staff_directory_email; ?>" placeholder="your email@example" required /><br>
	
	
	<label class="staff-directory-label">Job Position:</label>
	<input class="staff-directory-input"  name="staff_directory_job_position" type="text" value="<?php echo $staff_directory_job_position; ?>" placeholder="Job Position" required /><br>
	

	
	<label class="staff-directory-label">Sort Order:</label>
	<input class="staff-directory-input"  name="staff_directory_sort_order" type="number" value="<?php echo $staff_directory_sort_order; ?>"  required /><br>
	</fieldset>