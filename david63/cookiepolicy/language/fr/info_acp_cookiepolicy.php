<?php
/**
*
* @package Cookie Policy Extension
* @copyright (c) 2014 david63
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @translated into French by Galixte (http://www.galixte.com)
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

/// DEVELOPERS PLEASE NOTE
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ALL'								=> 'Tous',

	'COOKIE_BOX_POSITION'				=> 'Position de la boite des cookies',
	'COOKIE_BOX_POSITION_EXPLAIN'		=> 'Position de la boite d’acceptation des cookies sur la gauche ou la droite.',

	'COOKIE_DETECT'						=> 'Détecter si le cookie est nécessaire',
	'COOKIE_DETECT_EXPLAIN'				=> 'Tente de détecter si l’utilisateur <strong>est situé</strong> dans un état de l’UE et implique l’acceptation des cookies pour cet utilisateur.<br /><strong>Note 1 :</strong> La détection peut ne pas être exacte et elle n’est pas recommandée pour les forums où la majorité des utilisateurs proviennent de l’UE.<br /><strong>Note 2 :</strong> Cette option ne sera efficace que si la politique des cookies est désactivée.',

	'COOKIE_EXPIRE'						=> 'Expiration du cookie',
	'COOKIE_EXPIRE_EXPLAIN'				=> 'Paramétrer cette option sur oui oblige l’utilisateur à accepter la politique des cookies chaque année.',

	'COOKIE_LEFT'						=> 'Gauche',

	'COOKIE_LOG_ERRORS'					=> 'Journal des erreurs',
	'COOKIE_LOG_ERRORS_EXPLAIN'			=> 'Ce journal vous fournit la liste des erreurs détectées par adresse IP de l’utilisateur.',

	'COOKIE_POLICY'						=> 'Politique des cookies',
	'COOKIE_POLICY_ENABLE'				=> 'Activer la politique des cookies',
	'COOKIE_POLICY_ENABLE_EXPLAIN'		=> 'Active / désactive sur le forum la condition requise d’accepter les cookies pour tous les utilisateurs étant concernés par la directive EU Cookie (2012).',
	'COOKIE_POLICY_EXPLAIN'				=> 'Définir les options pour gérer la politique des cookies.',
	'COOKIE_POLICY_LOG'					=> '<strong>Les paramètres de la politique des cookies ont été mise à jour</strong>',
	'COOKIE_POLICY_MANAGE'				=> 'Gestion des paramètres',
	'COOKIE_POLICY_ON_INDEX'			=> 'Afficher uniquement sur l’index du forum',
	'COOKIE_POLICY_ON_INDEX_EXPLAIN'	=> 'Afficher la boite d’acceptation de la politique des cookies sur toutes les pages ou seulement sur la page de l’index.',
	'COOKIE_POLICY_OPTIONS'				=> 'Options de la politique des cookies',

	'COOKIE_RETAIN'						=> 'Conserver la politique des cookies',
	'COOKIE_RETAIN_EXPLAIN'				=> 'Conserver le lien de la barre de navigation de la politique des cookies une fois que la politique des cookies a été acceptée.',
	'COOKIE_RIGHT'						=> 'Droite',

	'COOKIE_SHOW_POLICY'				=> 'Afficher la politique des cookies',
	'COOKIE_SHOW_POLICY_EXPLAIN'		=> 'Paramétrer cette option sur oui affichera le lien de la barre de navigation de la politique des cookies lorsque la politique des cookies est désactivée, par exemple vous pouvez avoir une politique des cookies sans la nécessité d’avoir la boîte d’acceptation.',

	'COOKIE_UN_DETECT'					=> 'Détecter si les cookies ne sont pas nécessaires',
	'COOKIE_UN_DETECT_EXPLAIN'			=> 'Tente de détecter si l’utilisateur <strong>n’est pas situé</strong> dans un état de l’UE et donc ne sera pas tenu d’accepter la politique des cookies.<br /><strong>Note 1 :</strong> La détection peut ne pas être exacte mais elle peut être utile pour les forums où il y a une possibilité que certains utilisateurs proviennent de l’UE.<br /><strong>Note 2 :</strong> Cette option ne sera efficace que si la politique des cookies est activée.',
));
