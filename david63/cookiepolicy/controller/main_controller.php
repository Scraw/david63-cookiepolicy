<?php
/**
*
* @package Cookie Policy Extension
* @copyright (c) 2014 david63
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace david63\cookiepolicy\controller;

class main_controller implements main_interface
{
	/** @var \phpbb\config\config */
	protected $config;

	/* @var \phpbb\controller\helper */
	protected $helper;

	/* @var \phpbb\template\template */
	protected $template;

	/* @var \phpbb\user */
	protected $user;

	/**
	* Constructor
	*
	* @param \phpbb\config\config		$config
	* @param \phpbb\controller\helper	$helper
	* @param \phpbb\template\template	$template
	* @param \phpbb\user				$user
	*/
	public function __construct(\phpbb\controller\helper $helper, \phpbb\template\template $template, \phpbb\user $user, \phpbb\config\config $config)
	{
		$this->config	= $config;
		$this->helper	= $helper;
		$this->template	= $template;
		$this->user		= $user;
	}

	/**
	* Controller for route /cookiepolicy/{name}
	*
	* @param string		$name
	* @return \Symfony\Component\HttpFoundation\Response A Symfony Response object
	*/
	public function display($name)
	{
		$this->template->assign_var('COOKIE_MESSAGE', $this->user->lang('COOKIE_TEXT', $this->config['sitename']));

		return $this->helper->render('cookie_body.html', $name);
	}
}
