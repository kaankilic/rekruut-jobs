<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       bl4cksta
 * @since      1.0.0
 *
 * @package    Rekruutjobs
 * @subpackage Rekruutjobs/public/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<tr>
	<td><a href="?post_id=<?php echo $post->id; ?>"><?php echo $post->title; ?></a></td>
	<td><a href="?post_id=<?php echo $post->id; ?>"><?php echo $post->category->title; ?></a></td>
	<td><a href="?post_id=<?php echo $post->id; ?>"><?php echo $post->location->name; ?></a></td>
</tr>