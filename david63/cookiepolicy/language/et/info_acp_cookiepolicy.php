<?php
/**
*
* @package Cookie Policy Extension [Estonian]
* @copyright (c) 2014 david63; Estonian translation by phpBBeesti.com
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
	'COOKIE_BOX_POSITION'				=> 'Küpsisite teabe asukoht',
	'COOKIE_BOX_POSITION_EXPLAIN'		=> 'Kas "küpsisite teabe" akent näidatakse lehe paremalt või vasakul pool.',
	'COOKIE_DETECT'						=> 'Tuvasta kas küpsised on nõutud',
	'COOKIE_DETECT_EXPLAIN'				=> 'Antud seadistus üritab tuvastada kas liige on pärit EL\'ist, ning nõuab küpsistega nõustumist ainult neilt liikmetelt.<br /><strong>Märkus 1:</strong> See ei pruugi olla alati täpne, ning ei ole soovitatav foorumitele kuhu oodatakse liikmeid just EL\'ist.<br /><strong>Märkus 2:</strong> See valik on tõhus ainult siis kui küpsiste teave on keelatud.',
	'COOKIE_EXPIRE'						=> 'Küpsis aegub',
	'COOKIE_EXPIRE_EXPLAIN'				=> 'Seadistades selle "Jah", siis nõutakse liikmetelt korra aastas uuesti nõustumist “küpsiste teabega”.',
	'COOKIE_LEFT'						=> 'Vasakul pool',
	'COOKIE_LOG_ERRORS'					=> 'Salvesta vigu',
	'COOKIE_LOG_ERRORS_EXPLAIN'			=> 'Salvesta kõik vead, mis on seotud liikmete IP aadresside tuvastamisega.',
	'COOKIE_POLICY'						=> 'Küpsiste teave',
	'COOKIE_POLICY_ENABLE'				=> 'Luba või keela "Küpsiste teave"',
	'COOKIE_POLICY_ENABLE_EXPLAIN'		=> 'Luba või keela küpsistega nõustumine kõigile kasutajatele.',
	'COOKIE_POLICY_EXPLAIN'				=> 'Siin saad seadistada laienduse "Küpsiste teave" valikuid.',
	'COOKIE_POLICY_LOG'					=> '<strong>Küpsiste teabe seaded on uuendatud </strong>',
	'COOKIE_POLICY_MANAGE'				=> 'Halda seadeid',
	'COOKIE_POLICY_ON_INDEX'			=> 'Näita küpsiste teabe akent',
	'COOKIE_POLICY_ON_INDEX_EXPLAIN'	=> 'Näita küpsiste teabega nõustumise akent kõigil lehtedel või ainult esilehel.',
	'COOKIE_POLICY_OPTIONS'				=> 'Laienduse "Küpsiste teabe" valikud',
	'COOKIE_RETAIN'						=> 'Säilita küpsiste teabe aken',
	'COOKIE_RETAIN_EXPLAIN'				=> 'Säilita küpsiste teabe aken seniks, kuni nendega on nõustutud.',
	'COOKIE_RIGHT'						=> 'Paremal pool',
	'COOKIE_SHOW_POLICY'				=> 'Näita küpsiste teavet',
	'COOKIE_SHOW_POLICY_EXPLAIN'		=> 'Seadistades selle "Jah", siis näidatakse linki küpsiste teabe lehele navigatsiooni ribal, ilma et peaksid kuvama küpsiste teabe akent.',
	'COOKIE_UN_DETECT'					=> 'Tuvasta kas küpsised ei ole nõutud',
	'COOKIE_UN_DETECT_EXPLAIN'			=> 'Antud seadistus üritab tuvastada kas liige ei ole pärit EL\'ist, ning peale seda ei nõuta ka temalt “küpsiste teabega” nõustumist.<br /><strong>Märkus 1:</strong>See ei pruugi olla täpne, kuid on kasulik foorumitele, kus on mõned liikmed EL\'ist.<br /><strong>Märkus 2:</strong> See valik on tõhus ainult siis kui küpsiste teave on lubatud.',
));

?>
