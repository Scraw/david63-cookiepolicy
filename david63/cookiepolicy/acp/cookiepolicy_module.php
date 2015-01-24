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
	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\request\request */
	protected $request;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	public $u_action;

	function main($id, $mode)
	{
		global $user, $template, $request, $config, $phpbb_log;

		$this->config	= $config;
		$this->request	= $request;
		$this->template	= $template;
		$this->user		= $user;

		$this->tpl_name		= 'cookiepolicy_manage';
		$this->page_title	= $user->lang('COOKIE_POLICY');
		$form_key			= 'cookiepolicy_manage';
		add_form_key($form_key);

		if ($this->request->is_set_post('submit'))
		{
			if (!check_form_key($form_key))
			{
				trigger_error($this->user->lang('FORM_INVALID') . adm_back_link($this->u_action), E_USER_WARNING);
			}

			$this->config->set('cookie_box_position', $this->request->variable('cookie_box_position', ''));
			$this->config->set('cookie_eu_detect', $this->request->variable('cookie_eu_detect', ''));
			$this->config->set('cookie_expire', $this->request->variable('cookie_expire', 0));
			$this->config->set('cookie_log_errors', $this->request->variable('cookie_log_errors', 0));
			$this->config->set('cookie_not_eu_detect', $this->request->variable('cookie_not_eu_detect', 0));
			$this->config->set('cookie_on_index', $this->request->variable('cookie_on_index', 0));
			$this->config->set('cookie_policy_enabled', $this->request->variable('cookie_policy_enabled', ''));
			$this->config->set('cookie_policy_retain', $this->request->variable('cookie_policy_retain', 0));
			$this->config->set('cookie_show_policy', $this->request->variable('cookie_show_policy', 0));

			$phpbb_log->add('admin', $this->user->data['user_id'], $this->user->ip, 'COOKIE_POLICY_LOG');
			trigger_error($user->lang['CONFIG_UPDATED'] . adm_back_link($this->u_action));
		}

		$this->template->assign_vars(array(
			'COOKIE_BOX_POSITION'			=> isset($this->config['cookie_box_position']) ? $this->config['cookie_box_position'] : '',
			'COOKIE_POLICY_ENABLED'			=> isset($this->config['cookie_policy_enabled']) ? $this->config['cookie_policy_enabled'] : '',
			'COOKIE_POLICY_EU_DETECT'		=> isset($this->config['cookie_eu_detect']) ? $this->config['cookie_eu_detect'] : '',
			'COOKIE_POLICY_NOT_EU_DETECT'	=> isset($this->config['cookie_not_eu_detect']) ? $this->config['cookie_not_eu_detect'] : '',
			'COOKIE_POLICY_EXPIRE'			=> isset($this->config['cookie_expire']) ? $this->config['cookie_expire'] : '',
			'COOKIE_POLICY_RETAIN'			=> isset($this->config['cookie_policy_retain']) ? $this->config['cookie_policy_retain'] : '',
			'COOKIE_POLICY_LOG_ERRORS'		=> isset($this->config['cookie_log_errors']) ? $this->config['cookie_log_errors'] : '',
			'COOKIE_POLICY_ON_INDEX'		=> isset($this->config['cookie_on_index']) ? $this->config['cookie_on_index'] : '',
			'COOKIE_SHOW_POLICY'			=> isset($this->config['cookie_show_policy']) ? $this->config['cookie_show_policy'] : '',

			'U_ACTION'						=> $this->u_action,
		));
	}
}
