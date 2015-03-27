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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ALL'								=> 'Todos',

	'CLICK_TO_SELECT'					=> 'Clic en el cuadro para seleccionar un color',

	'COOKIE_BOX_BG_COLOUR'				=> 'Color personalizado del fondo del cuadro de Cookie',
	'COOKIE_BOX_BG_COLOUR_EXPLAIN'		=> 'Seleccione el color del fondo del cuadro de aceptación de Cookie.',
	'COOKIE_BOX_HREF_COLOUR'			=> 'Color personalizado del enlace del cuadro de Cookie',
	'COOKIE_BOX_HREF_COLOUR_EXPLAIN'	=> 'Seleccione el color del enlace de aceptación del cuadro de aceptación de Cookie.',
	'COOKIE_BOX_TXT_COLOUR'				=> 'Color personalizado del texto del cuadro',
	'COOKIE_BOX_TXT_COLOUR_EXPLAIN'		=> 'Seleccione el color del texto del cuadro de aceptación de Cookie.',
	'COOKIE_BOX_POSITION'				=> 'Posición del cuadro de Cookie',
	'COOKIE_BOX_POSITION_EXPLAIN'		=> 'Posición del cuadro de aceptación, a izquierda o derecha.',

	'COOKIE_CUSTOM_BOX'					=> 'Usar colores personalizados para el cuadro de Cookie',
	'COOKIE_CUSTOM_BOX_EXPLAIN'			=> 'Usar los colores personalizados para el cuadro de aceptación de Cookie.<br />Ajuste esto en <strong>No</strong> para usar los colores por defecto.',
	'COOKIE_CUSTOM_PAGE'				=> 'Usar colores personalizados para la página de Cookie',
	'COOKIE_CUSTOM_PAGE_EXPLAIN'		=> 'Usar colores personalizados para la página de Política de Cookies.<br />Ajuste esto en <strong>No</strong> para usar los colores por defecto.',

	'COOKIE_DETECT'						=> 'Detectar si se requieren cookies',
	'COOKIE_DETECT_EXPLAIN'				=> 'Este intentará detectar si el usuario se encuentra en un estado de la UE y sólo requerirá la aceptación de cookies para estos usuarios.<br /><strong>Nota:</strong> Esto puede no ser exacto y no se recomienda para los foros donde se espera que la mayoría de los usuarios sean por parte de la UE.',

	'COOKIE_EXPIRE'						=> 'Caducidad de Cookie',
	'COOKIE_EXPIRE_EXPLAIN'				=> 'Ajuste esto a Si, si desea que el usuario acepte la Política de Cookies anualmente.',

	'COOKIE_LEFT'						=> 'Izquierda',
	'COOKIE_LOG_ERRORS'					=> 'Registro de errores',
	'COOKIE_LOG_ERRORS_EXPLAIN'			=> 'Registrar los errores que se detectan cuando se busca la dirección IP del usuario.',

	'COOKIE_PAGE_BG_COLOUR'				=> 'Color personalizado del fondo para la página de Cookie',
	'COOKIE_PAGE_BG_COLOUR_EXPLAIN'		=> 'Seleccione el color del fondo para la página de Política de Cookies.',
	'COOKIE_PAGE_TXT_COLOUR'			=> 'Color personalizado del texto de la página de Cookie',
	'COOKIE_PAGE_TXT_COLOUR_EXPLAIN'	=> 'Seleccionar el color del texto de la página de Política de Cookies.',

	'COOKIE_POLICY'						=> 'Política de Cookies',
	'COOKIE_POLICY_ENABLE'				=> 'Habilitar Política de Cookies',
	'COOKIE_POLICY_ENABLE_EXPLAIN'		=> 'Habilitar/Deshabilitar el requisito de que todos los usuarios deban aceptar el uso de Cookies, bajo la directiva de Cookies de la UE (2012), en este foro.',
	'COOKIE_POLICY_EXPLAIN'				=> 'Configure las opciones para gestionar la Política de Cookies.',
	'COOKIE_POLICY_LOG'					=> '<strong>Ajustes de Política de Cookies actualizados</strong>',
	'COOKIE_POLICY_MANAGE'				=> 'Gestionar ajustes',
	'COOKIE_POLICY_ON_INDEX'			=> 'Mostrar en el índice sólo',
	'COOKIE_POLICY_ON_INDEX_EXPLAIN'	=> 'Mostrar el cuadro de aceptación de Política de Cookies en todas las páginas o sólo en la página índice.',
	'COOKIE_POLICY_OPTIONS'				=> 'Opciones de Política de Cookies',

	'COOKIE_RIGHT'						=> 'Derecha',

	'COOKIE_SHOW_POLICY'   				=> 'Mostrar Política de Cookies',
	'COOKIE_SHOW_POLICY_EXPLAIN'		=> 'Fijar esto a sí mostrará el enlace barra de navegación a la política de cookies cuando el Política de Cookies está desactivado, es decir, puede tener una política de cookies sin la necesidad de tener la casilla de aceptación .',

	'CUSTOM_BOX_COLOURS'				=> 'Colores personalizados de Cookie',
	'CUSTOM_BOX_COLOURS_EXPLAIN'		=> '<strong>Aquí usted puede cambiar los colores para adaptarse a su estilo para la caja de aceptación de cookies .</strong>',
	'CUSTOM_PAGE_COLOURS'				=> 'Colores personalizados de la página de Cookie',
	'CUSTOM_PAGE_COLOURS_EXPLAIN'		=> '<strong>Aquí puede cambiar colores para adaptar su estilo a la página de la Política de Cookies.</strong>',

	'LOG_COOKIE_ERROR'					=> '<strong>Error de búsqueda de IP</stong>',
	'LOG_CURL_ERROR'					=> '<strong>cURL no está disponible en este servidor</stong>',
	'LOG_SERVER_ERROR'					=> '<strong>No se pudo conectar con el servidor IP</strong>',
));
