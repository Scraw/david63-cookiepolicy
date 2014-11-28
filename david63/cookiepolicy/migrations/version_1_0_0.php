<?php
/**
*
* @package Cookie Policy Extension
* @copyright (c) 2014 david63
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace david63\cookiepolicy\migrations;

class version_1_0_0 extends \phpbb\db\migration\migration
{
	public function update_data()
	{
		return array(
			array('config.add', array('cookie_eu_detect', '0')),
			array('config.add', array('cookie_expire', '0')),
			array('config.add', array('cookie_log_errors', '0')),
			array('config.add', array('cookie_not_eu_detect', '0')),
			array('config.add', array('cookie_policy_enabled', '0')),
			array('config.add', array('cookie_policy_retain', '0')),
			array('config.add', array('version_cookiepolicy', '1.0.0')),
		);
	}
}
