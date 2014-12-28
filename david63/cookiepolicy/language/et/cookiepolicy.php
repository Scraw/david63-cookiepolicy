<?php
/**
*
* @package Cookie Policy Extension [Estonian]
* @copyright (c) 2014 david63; Estonian translation by phpBBeesti.com
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


	'COOKIE_ACCEPT_TEXT'	=> 'See foorum kasutab küpsiseid, et pakkuda kasutajatele isikupärasemat kasutuskogemust, ning mugavamat navigeerimist. Kasutades antud foorumit sa nõustud selle teabega.<br /><br />Rohkem teavet küpsiste kohta leiad, kui vajutad lehekülje all olevat linki nimega “küpsiste teave”.<br /><br />',
	'COOKIE_ACCEPT'			=> '[ Ma nõustun küpsiste teabega ]',

	'COOKIE_TEXT'			=> '<h3>Kuidas me kasutame selles foorumis küpsiseid?</h3>

	<p>Me kasutame küpsiseid veebilehel %1$s, et pakkuda kasutajatele isikupärasemat kasutuskogemust ja mugavamat navigeerimist. Kasutades antud veebilehte %1$s, sa nõustud sellega et me paneme need failitüübid sinu poolt kasutatavasse seadmesse (PC, tahvelarvuti, nutitelefon jms).</p>
<h3>Küpsised - mis need on?</h3><p>Küpsised on väike tekstifail, mis asub sinu arvuti või mõne muu seadme veebibrauseri ajutiste failide kaustas.<br /><br />
Küpsistel on mitmeid erinevaid eesmärke ja ülesandeid mida nad täidavad. Näiteks küpsised võimaldavad veebilehel meelde jätta kasutaja eelistusi (keele valik) või jätta vahele igakordne veebilehele sisselogimine. %1$s kasutab terminit "küpsised" selles teabes, et täpsustada kõiki üksikasju, mis viitavad just informatsiooni kogumisele sellel teel.<br /><br />
Mõned küpsiste tüübid võivad sisaldada ka kasutajate personaalset informatsiooni - nagu näiteks, kui kasutaja  vajutab sisselogimisel "Mäleta mind" kasti linnukese, siis küpsised säilitavad tema kasutajanime. Enamik küpsiseid ei kogu ühtegi sellist informatsiooni, mis võib tuvastada teid. Kuid antud küpsised koguvad üldist informatsiooni, nagu näiteks kuidas kasutaja saabus ja kasutas veebilehekülge %1$s, ning kasutaja üldist asukohta.</p>
<h3>Missuguseid küpsiste tüüpe kasutab %1$s?</h3><p>Küpsised võivad täita mitmeid erinevaid funktsioone, põhiolemuselt jagunevad küpsised kaheks: ajutised ehk seansi küpsised ja püsiküpsised. Sellel veebilehel kasutatakse peamiselt alljärgnevaid küpsiseid:</P>
<p><b>1. Tehnilised küpsised, mis</b><br />on vajalikud, et kasutaja saaks veebilehel %1$s üldse navigeerida ja selle funktsioone kasutada.</p>
<p><b>2. Analüütilised küpsised, mis</b><br />koguvad teavet selle kohta, kuidas antud veebilehekülge kasutatakse. Näiteks, milliseid lehekülgesi külastatakse kõige enam ja kas kasutajad saavad neilt veateateid. Need küpsised ei kogu teavet, mis võimaldaks veebilehekülje kasutajat otseselt tuvastada. Küll aga võib arvutikasutuse analüütiline jälgimine viia kasutaja kaudse tuvastamiseni. </p>
<p><b>3. Autentimise küpsised, mis</b><BR />võimaldavad veebileheküljel meeles pidada kasutaja tehtud valikuid (näiteks nimi, keel või piirkond). Neid küpsiseid kasutavad veebileheküljed näiteks sisselogitud kasutaja identifitseerimiseks, kasutajad saavad end järjestikuste veebilehekülgede külastuste käigus autentida ning ligi pääseda sisule. Autentimise küpsised on enamasti ajutised küpsised. </p>
<p>Samuti võib veebilehekülg %1$s lubada kolmandatele osapooltele kasutada küpsiseid, mis ei kuulu ühtegi üleval toodud kategooriasse. Näiteks, nagu enamus veebilehti, võib ka antud veebilehekülg kasutada Google Analytics teenust, et aidata monitoorida antud lehekülje külastatavust.</p>
<h3>Küpsiste kasutamise piiramine või täielik loobumine</h3><p>Arvutikasutaja saab ka ise rakendada ennetavaid meetmeid, et vältida küpsiste salvestamist tema arvutisse. Selleks tuleb kasutajal muuta veebilehitseja privaatsusseadeid. Järgnevad viited juhendavad, kuidas kasutaja saab häälestada enamlevinud veebilehitsejaid küpsiste ja turvaseadete osas:<br /><br />
<a href="http://www.aboutcookies.org" style="text-decoration:none" target="_blank">www.aboutcookies.org</a></a><br />
<a href="http://www.allaboutcookies.org" style="text-decoration:none" target="_blank">www.allaboutcookies.org</a></a></br />
<a href="http://www.aki.ee/et/kupsised" style="text-decoration:none" target="_blank">www.aki.ee/kupsised</a></a></p>
<p>Siin kohal tuletame meelde, et kõikide küpsiste blokeerimine võib küll aidata kasutaja privaatsust kaitsta, kuid samas piirata ka %1$s kasutusvõimalusi.</p>
<h3>Suhtluspluginate küpsised sisu jagamiseks veebilehel %1$s</h3><p>Veebilehekülg %1$s võib lubada ka linke sotsiaalvõrgustike veebilehtedele (näiteks: Facebook, Twitter või YouTube). Antud veebileheküljed võivad lisada omalt poolt Sinu seadmesse täiendavaid küpsiste faile, mida ei halda ega kontrolli %1$s. %1$s soovitab lugeda ka nende poolset küpsiste teavet, kuidas nemad kasutavad oma veebileheküljel küpsiseid.',

	'COOKIE_POLICY'			=> 'Küpsiste teave',
	'LOG_COOKIE_ERROR'		=> '<strong>Ebaõnnestunud IP otsing</stong>',
	'LOG_SERVER_ERROR'		=> '<strong>Ei saanud ühendust IP serveriga</strong>',
));

?>
