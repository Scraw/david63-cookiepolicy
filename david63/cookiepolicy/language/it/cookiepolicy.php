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


	'COOKIE_ACCEPT_TEXT'	=> 'Questo forum usa i cookies per offrire una esperienza di navigazione migliore. Utilizzandolo, significa che accetti questa politica.<br /> <br />È possibile saperne di più, cliccando su "Politica sui cookies" sulla pagina principale.<br /><br />',
	'COOKIE_ACCEPT'			=> 'Accetto',

	'COOKIE_TEXT'			=> '<h3>Come usiamo i cookies su questo forum?</h3>

	<p>Su %1$s usiamo i cookies per migliorarne le prestazioni e per migliorare l’esperienza dell’utente. Navigando su %1$s accetti il caricamento di questo tipo di file sul tuo dispositivo.</p>
<h3>Cosa sono i cookies?</h3><p>I cookies sono piccoli file di testo che un sito web può caricare sul tuo computer o dispositivo mobile, quando si visita quel sito o una delle sue pagine.<br /><br />
Ci sono molte situazioni in cui può servire un cookie. Ad esempio, un cookie aiuterà il sito web a riconoscere il tuo dispositivo la prossima volta che lo visiterai. %1$s utilizza i "cookies" secondo questa politica, per fare riferimento a tutti quei file che raccolgono informazioni in questo modo.<br /><br />
Alcuni cookies contengono informazioni personali - ad esempio, se fai click su "Ricordami" quando effettui il login, un cookie memorizzerà il tuo nome utente. La maggior parte dei cookies non registra informazioni personali, ma raccoglie informazioni più generali (in che modo gli utenti arrivano su %1$s oppure la posizione di un utente).</p>
<h3>Di che tipo di cookies fa uso %1$s?</h3><p>I cookies possono svolgere diverse funzioni:</p>
<p><b>1. Cookies necessari</b><br />Alcuni cookies sono essenziali per il funzionamento di %1$s. Questi cookies consentono servizi che hai richiesto espressamente.</p>
<p><b>2. Cookies delle prestazioni</b><br />Questi cookies potrebbero raccogliere informazioni anonime sulle pagine visitate. Ad esempio, potremmo usare i cookies delle prestazioni per tenere traccia delle pagine più popolari, quale tipo di collegamento tra le pagine è più efficace e per determinare perché alcune pagine ricevono messaggi di errore.</p>
<p><b>3. Cookies della funzionalità</b><br />Questi cookies ricordano le scelte che fate per migliorare la vostra esperienza.</p>
<p>%1$s potrebbe consentire a terzi di fornire i cookies che rientrano in una delle categorie di cui sopra. Ad esempio, come molti siti, possiamo utilizzare Google Analytics per monitorare il traffico sul nostro sito web.</p>
<h3>Un utente del forum può bloccare i cookies?</h3><p>Per capire come gestire i cookies, puoi consultare la sezione di assistenza del tuo browser o il manuale del tuo dispositivo mobile, oppure puoi visitare uno dei siti seguenti:<br /><br />
<a href="http://www.aboutcookies.org" style="text-decoration:none">www.aboutcookies.org</a><br />
<a href="http://www.allaboutcookies.org" style="text-decoration:none">www.allaboutcookies.org</a></p>
<p>Si ricorda che se si sceglie di disabilitare i cookies, alcune sezioni del %1$s potrebbero non funzionare correttamente.</p>
<h3>I cookies provenienti dai social network</h3><p>%1$s potrebbe contenere link a siti di social networking (come Facebook, Twitter o YouTube). Questi siti potrebbero caricare cookies sul vostro dispositivo che non possono essere controllati da %1$s. Per questo motivo, %1$s suggerisce di controllare i siti di social networking per scoprire come vengono utilizzati i cookies.',

	'COOKIE_POLICY'			=> 'Politica sui cookies',
));
