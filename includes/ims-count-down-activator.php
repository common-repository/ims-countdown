<?php

/**
 * Fired during plugin activation
 *
 * @link       http://acewebx.com
 * @since      1.0.0
 *
 * @package    ims-countdown
 * @subpackage ims-countdown/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    ims-countdown
 * @subpackage ims-countdown/includes
 * @author     AceWebx Team <developer@acewebx.com>
 */
class ims_countdown_Activator
{

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate()
	{
		if (get_option('ims-countdown-default-status') != 1) {
			update_option('ims-countdown-default-status', 1);
			// update_option('-whatsapp-setting-field-M', array(
			// 	'whatsapp_start_chat' => "Hello! I am interested in your service",
			// 	'whatsapp_content' => "ACEWEBX Live Support",
			// ));
		}
	}
}
