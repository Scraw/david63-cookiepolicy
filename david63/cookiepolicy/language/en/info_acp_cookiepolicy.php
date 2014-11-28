<?php
/**
*
* @package Cookie Policy Extension
* @copyright (c) 2014 david63
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'COOKIE_DETECT'				=> 'Detect if cookie is required',
	'COOKIE_DETECT_EXPLAIN'		=> 'This will try to detect if the user is in an EU state and will only require cookie acceptance for these users.<br /><br />Note 1: This may not be accurate and it is not recommended for boards where the majority of users are expected to be from the EU.<br /><br />Note 2: This option will only be effective if Cookie policy is disabled.',
	'COOKIE_EXPIRE'				=> 'Cookie expires',
	'COOKIE_EXPIRE_EXPLAIN'		=> 'Setting this to yes will require the user to re accept the Cookie Policy annually.',
	'COOKIE_LOG_ERRORS'			=> 'Log errors',
	'COOKIE_LOG_ERRORS_EXPLAIN'	=> 'Log any errors that are detected when looking up the user\'s IP address.',
	'COOKIE_POLICY'				=> 'Cookie policy',
	'COOKIE_POLICY_EXPLAIN'		=> 'Enable/disable all user\'s reqirement to accept the use of cookies, under EU Cookie directive (2012), on this board.',
	'COOKIE_RETAIN'				=> 'Retain cookie policy',
	'COOKIE_RETAIN_EXPLAIN'		=> 'Retain the cookie policy nav bar link once the cookie policy has been accepted.',
	'COOKIE_UN_DETECT'			=> 'Detect if cookie is not required',
	'COOKIE_UN_DETECT_EXPLAIN'	=> 'This will try to detect if the user is not in an EU state and therefore not be required to accept the cookie policy.<br /><br />Note 1: This may not be accurate but could be useful for boards where there is a possibility that some users may be from an EU state.<br /><br />Note 2: This option will only be effective if Cookie policy is enabled.',
));

?>