<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       bl4cksta
 * @since      1.0.0
 *
 * @package    Rekruutjobs
 * @subpackage Rekruutjobs/admin/partials
 */
?>
<div class="wrap">
	<h1>Rekruut Integrations</h1>
	<form method="post"> 
		<?php settings_fields( 'rekruut-settings' ); ?>
		<table class="form-table">
			<tbody>
				<tr>
					<th scope="row"><label for="blogname">Rekruut Client ID</label></th>
					<td>
						<input name="rekruut_client_id" type="text" id="blogname" value="<?php echo get_option('rekruut_client_id') ?>" class="regular-text">
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="blogname">Rekruut Client Secret</label></th>
					<td>
						<input name="rekruut_client_secret" type="text" id="blogname" value="<?php echo get_option('rekruut_client_secret') ?>" class="regular-text">
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="blogname">App URL</label></th>
					<td>
						<input name="rekruut_app" type="text" id="blogname" value="<?php echo get_option('rekruut_app') ?>" class="regular-text">
					</td>
				</tr>
			</tbody>
		</table>
		<?php submit_button(); ?>
	</form>
</div>