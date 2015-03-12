<?php
/**
*
* @package Cookie Policy Extension
* @copyright (c) 2014 david63
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace david63\cookiepolicy\acp;

class cookiepolicy_module
{
	public $u_action;

	function main($id, $mode)
	{
		global $phpbb_container, $user;

		$this->tpl_name		= 'cookiepolicy_manage';
		$this->page_title	= $user->lang('COOKIE_POLICY');

		// Get an instance of the admin controller
		$admin_controller = $phpbb_container->get('david63.cookiepolicy.admin.controller');

		$admin_controller->display_options();
	}
}
