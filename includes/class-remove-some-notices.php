<?php

/**
 * @link       https://wp-rocket.me
 * @since      1.0.0
 *
 * @package    Remove_Some_Notices
 * @subpackage Remove_Some_Notices/includes
 */

/**
 * The core plugin class.
 *
 * @since      1.0.0
 * @package    Remove_Some_Notices
 * @subpackage Remove_Some_Notices/includes
 * @author     Sandy Figueroa <sandyfigueroa3@gmail.com>
 */
class Remove_Some_Notices {

	/**
	 * This method initializes the plugin
	 */
	public function init() {
		$this->removeHooks();
	}

	/**
	 * This method removes the Hooks
	 */
	public function removeHooks() {
		remove_action( 'admin_notices', 'rocket_warning_advanced_cache_permissions');
		remove_action( 'admin_notices', 'rocket_warning_htaccess_permissions');
	}
}
