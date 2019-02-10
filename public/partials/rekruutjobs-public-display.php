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
<table class="table table-striped table-hover" width="100%">
	<thead>
		<tr>
			<th>Title</th>
			<th>Category</th>
			<th>Location</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($posts->objects as $post): ?>
		<tr>
			<td><a href="<?php echo esc_url( add_query_arg( 'slug', $post->slug ) )?>"><?php echo $post->title; ?></a></td>
			<td><a href="?post_id=<?php echo $post->id; ?>"><?php echo $post->category->title; ?></a></td>
			<td><a href="?post_id=<?php echo $post->id; ?>"><?php echo $post->location->name; ?></a></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
