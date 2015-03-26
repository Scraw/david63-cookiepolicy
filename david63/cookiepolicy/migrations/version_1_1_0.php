<?php
/**
*
* @package Cookie Policy Extension
* @copyright (c) 2014 david63
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace david63\cookiepolicy\migrations;

class version_1_1_0 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('david63\cookiepolicy\migrations\version_1_0_0');
	}

	public function update_data()
	{
		return array(
			array('config.update', array('version_cookiepolicy', '1.1.0')),

			array('config.add', array('cookie_box_bg_colour', '#00608F')),
			array('config.add', array('cookie_box_href_colour', '#FFFFFF')),
			array('config.add', array('cookie_box_txt_colour', '#DBDB00')),
			array('config.add', array('cookie_custom_box', 0)),
			array('config.add', array('cookie_custom_page', 0)),
			array('config.add', array('cookie_page_bg_colour', '#FFFFFF')),
			array('config.add', array('cookie_page_txt_colour', '#000000')),

			array('config.remove', array('cookie_not_eu_detect')),
			array('config.remove', array('cookie_policy_retain')),
		);
	}
}
