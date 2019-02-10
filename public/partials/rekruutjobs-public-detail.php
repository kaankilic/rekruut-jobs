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
<div class="job-post">
	<div class="post-title">
		<?php echo $post->title; ?>
	</div>
	<div class="post-subtitle">
		<ul>
			<li><?php echo $post->location->name; ?></li>
			<li><?php echo $post->category->title; ?></li>
			<li><?php echo $post->type; ?></li>
		</ul>
	</div>
	<div class="post-content">
			<?php echo $post->description; ?>
	</div>
	<div class="post-requirements">
		<?php echo $post->requirements; ?>
	</div>
	<div class="post-apply">
		<a href="<?php echo $endpoint."/apply/".$post->hash ?>" class="btn btn-primar">Apply Now</a>
	</div>
</div>
