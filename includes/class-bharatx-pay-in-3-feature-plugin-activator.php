<?php

/**
 * Fired during plugin activation
 *
 * @link       https://www.bharatx.tech
 * @since      1.2.0
 *
 * @package    Bharatx_Pay_In_3_Feature_Plugin
 * @subpackage Bharatx_Pay_In_3_Feature_Plugin/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.2.0
 * @package    Bharatx_Pay_In_3_Feature_Plugin
 * @subpackage Bharatx_Pay_In_3_Feature_Plugin/includes
 * @author     BharatX <Karan@bharatx.tech>
 */
class Bharatx_Pay_In_3_Feature_Plugin_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.2.0
	 */
	public static function activate() {
		require_once plugin_dir_path( __FILE__ ) . 'class-bharatx-pay-in-3-feature-plugin.php';
		$tableName = Bharatx_Pay_In_3_Feature_Plugin::get_transactions_table_name();

		global $wpdb;

		$wpdb->query("
			create table if not exists $tableName (
				orderKey varchar(255) primary key,
				bharatxTransactionId varchar(255) not null
			);
		");
	}
}
