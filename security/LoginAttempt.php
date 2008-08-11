<?php
/**
 * Record all login attempts through the {@link LoginForm} object.
 * This behaviour is disabled by default.
 *
 * Enable through a setting in your _config.php:
 * <code>
 * Security::set_login_recording(true);
 * </code>
 * 
 * @package sapphire
 * @subpackage security
 */
class LoginAttempt extends DataObject {
	
	static $db = array(
		'Email' => 'Varchar(255)', 
		'Status' => "Enum('Success,Failure')", 
	);
	
	static $has_one = array(
		'Member' => 'Member', // only linked if the member actually exists
	);
	
}
?>