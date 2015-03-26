<?php
/**
*
* @package Cookie Policy Extension
* @copyright (c) 2014 david63
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
	'COOKIE_ACCEPT_TEXT'	=> 'Este foro utiliza cookies para darle la mejor y más relevante experiencia mediante el uso de este foro, esto significa que usted acepta esta política. <br /><br /> Puede encontrar más información acerca de las cookies utilizadas haciendo clic en "Política de cookies" en la página principal.<br /><br />',
	'COOKIE_ACCEPT'			=> '[ Acepto ]',

	'COOKIE_TEXT'			=> '<h3>¿Cómo utilizamos cookies en este foro?</h3>

	<p>Utilizamos archivos conocidos como cookies en %1$s para mejorar su rendimiento y para mejorar su experiencia de usuario. Mediante el uso de %1$s usted acepta que podemos colocar estos tipos de archivos en su dispositivo.</p>
<h3>¿Qué son las cookies?</h3><p>Las cookies son pequeños archivos de texto que un sitio web puede poner en su computadora o dispositivo móvil, la primera vez que visita ese sitio o de una de sus páginas.<br /><br />
Hay muchas funciones en las que una cookie puede ayudar. Por ejemplo, una cookie ayudará al sitio web, o de otro sitio web, para que reconozca su dispositivo la próxima vez que lo visite. %1$s utiliza el término "cookies" en esta política para hacer referencia a todos los archivos que recopilan información de esta manera.<br /><br />
Algunas galletas contienen información personal - por ejemplo, si hace clic en "Recordar" al iniciar sesión, una cookie pueda almacenar su nombre de usuario. La mayoría de las cookies no recopilarán información que le identifique, sino que en lugar recopilar información más general como cómo los usuarios llegan y utilizan %1$s, o la ubicación general del usuario.</p>
<h3>¿Qué tipo de cookies usa %1$s?</h3><p>Las cookies pueden realizar varias funciones diferentes:</p>
<p><b>1. Cookies necesarias</b><br />Algunas cookies son esenciales para el funcionamiento de %1$s. Estas cookies permiten los servicios que ha solicitado específicamente.</p>
<p><b>2. Cookies de rendimiento</b><br />Estas cookies pueden recopilar información anónima sobre las páginas visitadas. Por ejemplo, podemos utilizar cookies de rendimiento para realizar un seguimiento de qué páginas son las más populares, cuyo método de vinculación entre las páginas es más eficaz, y para determinar por qué algunas páginas están recibiendo mensajes de error.</p>
<p><b>3. Cookies de funcionalidad</b><br />Estas cookies recuerdan decisiones que toma para mejorar su experiencia.</p>
<p>%1$s también puede permitir a terceros para servir a las cookies que no pertenecen a ninguna de las categorías anteriores. Por ejemplo, como muchos sitios, podemos utilizar Google Analytics para ayudar a monitorear el tráfico de nuestra página web.</p>
<h3>¿Puede un usuario del foro bloquear las cookies?</h3><p>Para saber cómo administrar las cookies que se permiten, consulte la sección de ayuda de su navegador o el manual del dispositivo móvil o se puede visitar uno de los siguientes servicios, que cuentan con información detallada sobre la forma de gestionar, controlar o eliminar las cookies<br /><br />
<a href="http://www.aboutcookies.org" style="text-decoration:none">www.aboutcookies.org</a><br />
<a href="http://www.allaboutcookies.org" style="text-decoration:none">www.allaboutcookies.org</a></p>
<p>Por favor, recuerde que si usted decide desactivar las cookies, es posible que ciertas secciones de %1$s no funcionen correctamente.</p>
<h3>Cookies de %1$s de redes sociales</h3><p>%1$s puede tener enlaces a sitios web de redes sociales (por ejemplo, Facebook, Twitter o You Tube). Estos sitios web también pueden colocar cookies en su dispositivo y %1$s no controla la forma en que utilizan sus cookies, por lo tanto, %1$s le invita a comprobar su sitio web para ver cómo están utilizando cookies.',

	'COOKIE_POLICY'	=> 'Política de Cookies',
));
