<?php
/**
*
* @package Cookie Policy Extension [Estonian]
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
	'COOKIE_DETECT'				=> 'Tuvasta kas küpsised on nõutud',
	'COOKIE_DETECT_EXPLAIN'		=> 'Antud seadistus üritab tuvastada kas liige on pärit EL\'ist, ning nõuab küpsistega nõustumist ainult neilt liikmetelt.<br /><br />Märkus 1: See ei pruugi olla alati täpne, ning ei ole soovitatav foorumitele kuhu oodatakse liikmeid just EL\'ist.<br /><br />Märkus 2: See valik on tõhus ainult siis kui küpsiste teave on keelatud.',
	'COOKIE_EXPIRE'				=> 'Küpsis aegub',
	'COOKIE_EXPIRE_EXPLAIN'		=> 'Seadistades selle "Jah", siis nõutakse liikmetelt korra aastas uuesti nõustumist “küpsiste teabega”.',
	'COOKIE_LOG_ERRORS'			=> 'Logi vigu',
	'COOKIE_LOG_ERRORS_EXPLAIN'	=> 'Salvesta kõik vead mis on seotud liikmete IP aadresside tuvastamisega.',
	'COOKIE_POLICY'				=> 'Küpsiste teave',
	'COOKIE_POLICY_EXPLAIN'		=> 'Luba või keela kõigil liikmetel nõustuda küpsiste teabega selles foorumis, mis vastavad EL\'i Küpsiste direktiiviga (2012).',
	'COOKIE_RETAIN'				=> 'Säilita küpsiste teabe paneel',
	'COOKIE_RETAIN_EXPLAIN'		=> 'Säilita küpsiste teabe paneel seniks, kuni nendega on nõustutud.',
	'COOKIE_UN_DETECT'			=> 'Tuvasta kas küpsised ei ole nõutud',
	'COOKIE_UN_DETECT_EXPLAIN'	=> 'Antud seadistus üritab tuvastada kas liige ei ole pärit EL\'ist, ning peale seda ei nõuta ka temalt “küpsiste teabega” nõustumist.<br /><br />Märkus 1: See ei pruugi olla täpne, kuid on kasulik foorumitele, kus on mõned liikmed EL\'ist.<br /><br />Märkus 2: See valik o tõhus ainult siis kui küpsiste teave on lubatud.',
));

?>
