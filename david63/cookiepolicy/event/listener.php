<?php
/**
*
* @package Cookie Policy Extension
* @copyright (c) 2014 david63
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace david63\cookiepolicy\event;

/**
* @ignore
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\template\twig\twig */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	/* @var \phpbb\controller\helper */
	protected $helper;

	/**
	* Constructor for listener
	*
	* @param \phpbb\config\config		$config		Config object
	* @param \phpbb\template\twig\twig	$template	Template object
	* @param \phpbb\user                $user		User object
	* @return \david63\cookiepolicy\event\listener
	* @access public
	*/
	public function __construct(\phpbb\config\config $config, \phpbb\template\twig\twig $template, \phpbb\user $user, \phpbb\controller\helper $helper)
	{
		$this->config		= $config;
		$this->template		= $template;
		$this->user			= $user;
		$this->helper		= $helper;
	}

	/**
	* Assign functions defined in this class to event listeners in the core
	*
	* @return array
	* @static
	* @access public
	*/
	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup'	=> 'load_language_on_setup',
			'core.page_header'	=> 'page_header',
			'core.page_footer'	=> 'page_footer',
		);
	}

	/**
	* Load common cookie policy language files during user setup
	*
	* @param object $event The event object
	* @return null
	* @access public
	*/
	public function load_language_on_setup($event)
	{
		$lang_set_ext	= $event['lang_set_ext'];
		$lang_set_ext[]	= array(
			'ext_name' => 'david63/cookiepolicy',
			'lang_set' => 'cookiepolicy',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}

	/**
	* Create the options to show the cookie acceptance box
	*
	* @param object $event The event object
	* @return null
	* @access public
	*/
	public function page_header($event)
	{
		$cookie_enabled = $this->config['cookie_policy_enabled'];

		if (($this->config['cookie_policy_enabled'] == false && $this->config['cookie_eu_detect'] == true) || ($this->config['cookie_policy_enabled'] == true && $this->config['cookie_not_eu_detect'] == true))
		{
			// Setting this to true here means that if there is a problem with the IP lookup
			// then the cookie will be enabled - just in case we have got it wrong!
			$cookie_enabled = true;

			// Check that the server is available
			$server_ok = false;
			$server_ok = @fsockopen('www.ip-api.com', 80);
			if ($server_ok)
			{
				$eu_array = array('AT', 'BE', 'BG', 'CY', 'CZ', 'DE', 'DK', 'EE', 'ES', 'EU', 'FI', 'FR', 'FX', 'GB', 'GR', 'HR', 'HU', 'IE', 'IM', 'IT', 'LT', 'LU', 'LV', 'MT', 'NL', 'PL', 'PT', 'RO', 'SE', 'SI', 'SK', 'UK');

				$ip_query = file_get_contents('http://ip-api.com/json/' . $this->user->data['session_ip'] . '?fields=status,countryCode');
				$ip_array = json_decode($ip_query, true);

				if ($ip_array['status'] == 'success' && !in_array($ip_array['countryCode'], $eu_array))
				{
					// IP not in an EU country therefore we do not need to invoke the Cookie Policy
					$cookie_enabled = false;
				}
				else if ($ip_array['status'] != 'success' && $this->config['cookie_log_errors'] == true)
				{
					$this->phpbb_log->add('admin', 'LOG_COOKIE_ERROR', $this->user->data['user_id']);
				}
			}
			else
			{
				$this->phpbb_log->add('admin', 'LOG_SERVER_ERROR', $this->user->data['user_id']);
			}
		}

		$this->template->assign_vars(array(
			'COOKIE_CLASS'			=> $this->config['cookie_box_position'] ? 'cookie-box rightside' : 'cookie-box leftside',
			'COOKIE_ENABLED'		=> $cookie_enabled,
			'COOKIE_EXPIRES'		=> $this->config['cookie_expire'],
			'COOKIE_EXPLAIN_TEXT'	=> sprintf($this->user->lang['COOKIE_TEXT'], $this->config['sitename']),
			'COOKIE_NAME'			=> $this->config['cookie_name'],
			'COOKIE_RETAINED'		=> $this->config['cookie_policy_retain'],
			'SHOW_COOKIE_ACCEPT'	=> isset($_COOKIE[$this->config['cookie_name'] . '_ca']) ? false : true,
			'SITE'					=> $this->config['sitename'],
		));
	}

	public function page_footer($event)
	{
		$this->template->assign_vars(array(
			'COOKIE_ON_INDEX'		=> $this->config['cookie_on_index'],
			'COOKIE_SHOW_POLICY'	=> $this->config['cookie_show_policy'],
			'U_COOKIE_PAGE'			=> $this->helper->route('david63_cookiepolicy_controller', array('name' => 'cookie')),
		));
	}
}
