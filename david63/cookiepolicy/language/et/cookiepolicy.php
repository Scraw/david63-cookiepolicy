<?php
/**
*
* @package Cookie Policy Extension [Estonian]
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
	'COOKIE_ACCEPT'			=> '[ Ma nõustun ]',
	'COOKIE_ACCEPT_TEXT'	=> 'See veebilehekülg kasutab küpsiseid et pakkuda kasutajatele isikupärasemat kasutuskogemust ja mugavamat navigeerimist. Kasutades antud foorumit sa nõustud selle teabega.<br /><br />Rohkem teavet küpsiste kohta leiad kui vajutad "Küpsiste teave" linki esilehel.<br /><br />',
	'COOKIE_POLICY'			=> 'Küpsiste teave',
	'COOKIE_TEXT'			=> '<h3>Kuidas me kasutame selles foorumis küpsiseid?</h3>

	<p>Me kasutame küpsiseid veebilehel %1$s, et pakkuda kasutajatele isikupärasemat kasutuskogemust ja mugavamat navigeerimist. Kasutades foorumit %1$s, nõustud sellega et me paneme need faili tüübid sinu seadmesse.</p>
<h3>Mis on küpsised?</h3><p>Küpsised on väike tekstifail, mis asub sinu arvuti või mõne muu seadme veebibrauseri ajutiste failide kaustas.<br /><br />
Küpsistel on mitmeid erinevaid eesmärke, näiteks küpsised aitavad veebilehte ära tunda sinu seadmes järgmine kord kui sa külastad seda. %1$s kasutab terminit "küpsised" selles teabes, et viidata kõikidele asjadele, mis koguvad sellel viisil informatsiooni.<br /><br />
Mõningad küpsised sisaldavad personaalset informatsiooni – nagu näiteks, kui vajutada linnuke "mäleta mind" kasti sisselogides, siis küpsis säilitab sinu kasutajanime. Enamik küpsiseid ei kogu ühtegi informatsiooni mis võib tuvastada teid, kuid nad koguvad pigem üldist informatsiooni nagu kuidas kasutaja saabus, kasutas veebilehekülge %1$s ja kust kohast tuli.</p>
<h3>Missuguseid küpsiseid %1$s kasutab?</h3><p>Küpsised võivad täita mitmeid erinevaid funktsioone:</P>
<p><b>1. Tehnilised küpsised, mis</b><br /> on vajalikud, et kasutaja saaks %1$s leheküljel üldse navigeerida ja selle funktsioone kasutada.</p>
<p><b>2. Analüütilised küpsised, mis</b><br /> koguvad teavet selle kohta, kuidas veebilehte kasutatakse. Näiteks, milliseid lehti külastatakse kõige enam ja kas kasutajad saavad lehtedelt veateateid. Need küpsised ei kogu teavet mis võimaldaks veebilehe kasutajat otseselt tuvastada.</p>
<p><b>3. Autentimise küpsised, mis</b><BR /> võimaldavad veebilehel meeles pidada kasutaja tehtud valikuid (näiteks nimi, keel või piirkond). Neid küpsiseid kasutavad veebilehed näiteks sisselogitud kasutaja identifitseerimiseks, kasutajad saavad end järjestikuste võrgulehtede külastuste käigus autentida ning ligi pääseda veebilehe sisule. Autentimise küpsised on enamasti ajutised küpsised.</p>
<p>%1$s võib samuti lubada kolmandatel osapooltel kasutada küpsiseid, mis ei kuulu mitte ühtegi ülal toodud kategooriasse. Näiteks: Nagu enamus veebilehte, võib ka antud foorum kasutada "Google Analytics"\'it, et aidata monitoorida veebilehe liiklust.</p>
<h3>Kas foorumi liikmed saavad keelata küpsiseid?</h3><p>Et saada teada kuidas hallata küpsiseid, mida sa soovid lubada vaata oma veebibrauseri abi sektsiooni või oma mobiili, tahvelarvuti kasutusjuhendit. Samuti sa võid külastada alljärgnevaid veebilehti, kus on täpsemalt kirjutatud kuidas hallata, kontrollida või kustutada küpsiseid<br /><br />
<a href="http://www.aboutcookies.org/" style="text-decoration:none">www.aboutcookies.org</a></a><br />
<a href="http://www.allaboutcookies.org/" style="text-decoration:none">www.allaboutcookies.org</a></a><br />
<a href="http://www.aki.ee/et/kupsised/" style="text-decoration:none">www.aki.ee/et/kupsised</a></a></p>
<p>Palun pea meeles et kui sa otsustad keelata küpsised, siis mõningad kohad veebilehel %1$s ei pruugi töötada korralikult.</p>
<h3>Küpsised veebilehel %1$s sotsiaalvõrgustikke lehekülgedelt</h3><p>%1$s\'s võib olla linke sotsiaalvõrgustike veebilehtedele (nt Facebook, Twitter, Google või YouTube). Samuti antud veebilehed võivad lisada need küpsiseid sinu seadmesse, neid küpsiseid %1$s ei kontrolli, ning seega %1$s soovitab lugeda täpsemat informatsiooni kuidas antud veebilehed küpsiseid kasutavad nende endi veebilehekülgedelt.',

	'LOG_COOKIE_ERROR'		=> '<strong>Ebaõnnestunud IP otsing</stong>',
	'LOG_SERVER_ERROR'		=> '<strong>Ei saanud ühendust IP server</strong>',
));

?>
