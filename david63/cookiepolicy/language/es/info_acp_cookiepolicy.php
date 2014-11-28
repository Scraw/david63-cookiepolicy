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
	'COOKIE_DETECT'				=> 'Detectar si se requieren las cookies',
	'COOKIE_DETECT_EXPLAIN'		=> 'Este intentará detectar si el usuario está en un estado de la UE y sólo requerirá la aceptación de las cookies para estos usuarios.<br /><br />Nota 1: Esto puede no ser exactaoy no se recomienda para los foros donde se espera que la mayoría de los usuarios sean parte de la UE.<br /><br />Nota 2: Esta opción sólo será eficaz si la política de cookies está deshabilitada.',
	'COOKIE_EXPIRE'				=> 'Caducidad de cookies',
	'COOKIE_EXPIRE_EXPLAIN'		=> 'Fijar esto a sí, requerirá al usuario que vuelva aceptar la Política de Cookies anualmente.',
	'COOKIE_LOG_ERRORS'			=> 'Registro de errores',
	'COOKIE_LOG_ERRORS_EXPLAIN'	=> 'Registrar los errores que se detectan cuando se busca la dirección IP del usuario.',
	'COOKIE_POLICY'				=> 'Política de Cookies',
	'COOKIE_POLICY_EXPLAIN'		=> 'Habilitar/deshabilitar el requisito de que todos los usuarios acepten el uso de cookies bajo la directiva EU Cookie (2012) en este foro.',
	'COOKIE_RETAIN'				=> 'Retener política de cookies',
	'COOKIE_RETAIN_EXPLAIN'		=> 'Retener el panel política de cookies una vez que la política de cookies ha sido aceptada.',
	'COOKIE_UN_DETECT'			=> 'Detectar si no se requieren las cookies',
	'COOKIE_UN_DETECT_EXPLAIN'	=> 'Esto intentará detectar si el usuario no está en un estado de la UE, y por lo tanto no será necesario aceptar la política de cookies.<br /><br />Nota 1: Esto puede no ser exacto, pero podría ser útil para los foros, donde existe la posibilidad de que algunos usuarios pueden ser de un Estado de la UE.<br /><br />Nota 2: Esta opción sólo será eficaz si la política de cookies está habilitada.',
));

?>