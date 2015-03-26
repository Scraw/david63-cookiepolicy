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
	'ALL'								=> 'Tutte',

	'COOKIE_BOX_POSITION'				=> 'Posizione del box',
	'COOKIE_BOX_POSITION_EXPLAIN'		=> 'Posizionare il box dei cookies a sinistra o a destra.',

	'COOKIE_DETECT'						=> 'Controllare se i cookies sono richiesti',
	'COOKIE_DETECT_EXPLAIN'				=> 'Si tenterà di rilevare se l’utente appartiene ad uno stato dell’Unione Europea e se è richiesta l’accettazione dei cookies.<br /><strong>Nota:</strong> Questo controllo potrebbe non essere preciso e ne è sconsigliato l’utilizzo sui forum in cui la maggior parte degli utenti potrebbe appartenere all’UE.',

	'COOKIE_EXPIRE'						=> 'Scadenza dei cookies',
	'COOKIE_EXPIRE_EXPLAIN'				=> 'Se impostato su <strong>Si</strong>, verrà chiesto all’utente di riaccettare la politica sui cookies ogni anno.',

	'COOKIE_LEFT'						=> 'Sinistra',
	'COOKIE_LOG_ERRORS'					=> 'Log errori',
	'COOKIE_LOG_ERRORS_EXPLAIN'			=> 'Log di eventuali errori rilevati durante la ricerca dell’indirizzo IP dell’utente.',

	'COOKIE_POLICY'						=> 'Gestione dei cookies',
	'COOKIE_POLICY_ENABLE'				=> 'Abilita cookies',
	'COOKIE_POLICY_ENABLE_EXPLAIN'		=> 'Abilitare/disabilitare l’accettazione dei cookies, ai sensi della direttiva UE Cookie (2012), su questo forum.',
	'COOKIE_POLICY_EXPLAIN'				=> 'Impostare le opzioni per la gestione dei cookies.',
	'COOKIE_POLICY_LOG'					=> '<strong>Impostazioni della politica sui cookies aggiornate </strong>',
	'COOKIE_POLICY_MANAGE'				=> 'Impostazioni',
	'COOKIE_POLICY_ON_INDEX'			=> 'Mostra solo in index',
	'COOKIE_POLICY_ON_INDEX_EXPLAIN'	=> 'Mostra il box di accettazione dei cookies su tutte le pagine o solo su index.',
	'COOKIE_POLICY_OPTIONS'				=> 'Opzioni',

	'COOKIE_RIGHT'						=> 'Destra',

	'COOKIE_SHOW_POLICY'				=> 'Mostra Politica sui cookies',
	'COOKIE_SHOW_POLICY_EXPLAIN'		=> 'Se impostato su <strong>Si</strong>, verrà mostrato il link <strong>Politica sui cookies</strong> sulla navbar quando l’opzione <strong>Abilita cookies</strong> è disabilitata. Per esempio, è possibile avere una politica sui cookies senza la necessità di visualizzare il box di accettazione.',

	'LOG_COOKIE_ERROR'					=> '<strong>Ricerca IP non riuscita</stong>',
	'LOG_SERVER_ERROR'					=> '<strong>Impossibile connettersi al server IP</strong>',
));
