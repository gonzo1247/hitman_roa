<?php
/**
*
* ucp [Deutsch — Du]
*
* @package language
* @version $Id: ucp.php 617 2013-09-29 10:21:18Z pyramide $
* @copyright (c) 2005 phpBB Group; 2006 phpBB.de
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Deutsche Übersetzung durch die Übersetzer-Gruppe von phpBB.de:
* siehe docs/AUTHORS und https://www.phpbb.de/go/ubersetzerteam
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

// Privacy policy and T&C
$lang = array_merge($lang, array(
	'TERMS_OF_USE_CONTENT'	=> 'Mit dem Zugriff auf „%1$s“ wird zwischen dir und dem Betreiber ein Vertrag mit folgenden Regelungen geschlossen:</p>
		<h3>1. Nutzungsvertrag</h3>
		<ol style="list-style-type: lower-alpha"><li>Mit dem Zugriff auf „%1$s“ (im Folgenden „das Board“) schließt du einen Nutzungsvertrag mit dem Betreiber des Boards ab (im Folgenden „Betreiber“) und erklärst dich mit den nachfolgenden Regelungen einverstanden.</li>
		<li>Wenn du mit diesen Regelungen nicht einverstanden bist, so darfst du das Board nicht weiter nutzen. Für die Nutzung des Boards gelten jeweils die an dieser Stelle veröffentlichten Regelungen.</li>
		<li>Der Nutzungsvertrag wird auf unbestimmte Zeit geschlossen und kann von beiden Seiten ohne Einhaltung einer Frist jederzeit gekündigt werden.</li></ol>

		<h3>2. Einräumung von Nutzungsrechten</h3>
		<ol style="list-style-type: lower-alpha"><li>Mit dem Erstellen eines Beitrags erteilst du dem Betreiber ein einfaches, zeitlich und räumlich unbeschränktes und unentgeltliches Recht, deinen Beitrag im Rahmen des Boards zu nutzen.</li>
		<li>Das Nutzungsrecht nach Punkt 2, Unterpunkt a bleibt auch nach Kündigung des Nutzungsvertrages bestehen.</li></ol>

		<h3>3. Pflichten des Nutzers</h3>
		<ol style="list-style-type: lower-alpha"><li>Du erklärst mit der Erstellung eines Beitrags, dass er keine Inhalte enthält, die gegen geltendes Recht oder die guten Sitten verstoßen. Du erklärst insbesondere, dass du das Recht besitzt, die in deinen Beiträgen verwendeten Links und Bilder zu setzen bzw. zu verwenden.</li>
		<li>Der Betreiber des Boards übt das Hausrecht aus. Bei Verstößen gegen diese Nutzungsbedingungen oder anderer im Board veröffentlichten Regeln kann der Betreiber dich nach Abmahnung zeitweise oder dauerhaft von der Nutzung dieses Boards ausschließen und dir ein Hausverbot erteilen.</li>
		<li>Du nimmst zur Kenntnis, dass der Betreiber keine Verantwortung für die Inhalte von Beiträgen übernimmt, die er nicht selbst erstellt hat oder die er nicht zur Kenntnis genommen hat. Du gestattest dem Betreiber, dein Benutzerkonto, Beiträge und Funktionen jederzeit zu löschen oder zu sperren.</li>
		<li>Du gestattest dem Betreiber darüber hinaus, deine Beiträge abzuändern, sofern sie gegen o.&nbsp;g. Regeln verstoßen oder geeignet sind, dem Betreiber oder einem Dritten Schaden zuzufügen.</li></ol>

		<h3>4. General Public License</h3>
		<ol style="list-style-type: lower-alpha"><li>Du nimmst zur Kenntnis, dass es sich bei phpBB um eine unter der General Public License (GPL) bereitgestellten Foren-Software der phpBB Group (www.phpbb.com) handelt; deutschsprachige Informationen werden durch die deutschsprachige Community unter www.phpbb.de zur Verfügung gestellt. Beide haben keinen Einfluss auf die Art und Weise, wie die Software verwendet wird. Sie können insbesondere die Verwendung der Software für bestimmte Zwecke nicht untersagen oder auf Inhalte fremder Foren Einfluss nehmen.</li></ol>

		<h3>5. Gewährleistung</h3>
		<ol style="list-style-type: lower-alpha"><li>Der Betreiber haftet mit Ausnahme der Verletzung von Leben, Körper und Gesundheit und der Verletzung wesentlicher Vertragspflichten (Kardinalpflichten) nur für Schäden, die auf ein vorsätzliches oder grob fahrlässiges Verhalten zurückzuführen sind. Dies gilt auch für mittelbare Folgeschäden wie insbesondere entgangenen Gewinn.</li>
		<li>Die Haftung ist gegenüber Verbrauchern außer bei vorsätzlichem oder grob fahrlässigem Verhalten oder bei Schäden aus der Verletzung von Leben, Körper und Gesundheit und der Verletzung wesentlicher Vertragspflichten (Kardinalpflichten) auf die bei Vertragsschluss typischerweise vorhersehbaren Schäden und im übrigen der Höhe nach auf die vertragstypischen Durchschnittsschäden begrenzt. Dies gilt auch für mittelbare Folgeschäden wie insbesondere entgangenen Gewinn.</li>
		<li>Die Haftung ist gegenüber Unternehmern außer bei der Verletzung von Leben, Körper und Gesundheit oder vorsätzlichem oder grob fahrlässigem Verhalten des Betreibers auf die bei Vertragsschluss typischerweise vorhersehbaren Schäden und im Übrigen der Höhe nach auf die vertragstypischen Durchschnittsschäden begrenzt. Dies gilt auch für mittelbare Schäden, insbesondere entgangenen Gewinn.</li>
		<li>Die Haftungsbegrenzung der Absätze a bis c gilt sinngemäß auch zugunsten der Mitarbeiter und Erfüllungsgehilfen des Betreibers.</li>
		<li>Ansprüche für eine Haftung aus zwingendem nationalem Recht bleiben unberührt.</li></ol>

		<h3>6. Änderungsvorbehalt</h3>
		<ol style="list-style-type: lower-alpha"><li>Der Betreiber ist berechtigt, die Nutzungsbedingungen und die Datenschutzrichtlinie zu ändern. Die Änderung wird dem Nutzer per E-Mail mitgeteilt.</li>
		<li>Der Nutzer ist berechtigt, den Änderungen zu widersprechen. Im Falle des Widerspruchs erlischt das zwischen dem Betreiber und dem Nutzer bestehende Vertragsverhältnis mit sofortiger Wirkung.</li>
		<li>Die Änderungen gelten als anerkannt und verbindlich, wenn der Nutzer den Änderungen zugestimmt hat.</li></ol>

		<p>Informationen über den Umgang mit deinen persönlichen Daten sind in der Datenschutzrichtlinie enthalten.',
	'PRIVACY_POLICY'		=> '<h3>Datenschutzerklärung</h3>
<p>Personenbezogene Daten (nachfolgend zumeist nur „Daten“ genannt) werden von uns nur im Rahmen der Erforderlichkeit sowie zum Zwecke der Bereitstellung eines funktionsfähigen und nutzerfreundlichen Internetauftritts, inklusive seiner Inhalte und der dort angebotenen Leistungen, verarbeitet.</p>
<p>Gemäß Art. 4 Ziffer 1. der Verordnung (EU) 2016/679, also der Datenschutz-Grundverordnung (nachfolgend nur „DSGVO“ genannt), gilt als „Verarbeitung“ jeder mit oder ohne Hilfe automatisierter Verfahren ausgeführter Vorgang oder jede solche Vorgangsreihe im Zusammenhang mit personenbezogenen Daten, wie das Erheben, das Erfassen, die Organisation, das Ordnen, die Speicherung, die Anpassung oder Veränderung, das Auslesen, das Abfragen, die Verwendung, die Offenlegung durch Übermittlung, Verbreitung oder eine andere Form der Bereitstellung, den Abgleich oder die Verknüpfung, die Einschränkung, das Löschen oder die Vernichtung.</p>
<p>Mit der nachfolgenden Datenschutzerklärung informieren wir Sie insbesondere über Art, Umfang, Zweck, Dauer und Rechtsgrundlage der Verarbeitung personenbezogener Daten, soweit wir entweder allein oder gemeinsam mit anderen über die Zwecke und Mittel der Verarbeitung entscheiden. Zudem informieren wir Sie nachfolgend über die von uns zu Optimierungszwecken sowie zur Steigerung der Nutzungsqualität eingesetzten Fremdkomponenten, soweit hierdurch Dritte Daten in wiederum eigener Verantwortung verarbeiten.</p>
<p>Unsere Datenschutzerklärung ist wie folgt gegliedert:</p>
<p>
	I. Informationen über uns als Verantwortliche<br>
	II. Rechte der Nutzer und Betroffenen<br>
	III. Informationen zur Datenverarbeitung
</p>
<h4>I. Informationen über uns als Verantwortliche</h4>
<p>Verantwortlicher Anbieter dieses Internetauftritts im datenschutzrechtlichen Sinne ist:</p>
<p>
	Severin Weitz<br>
	Stromstr. 27<br>
	10551 Berlin<br>
	Deutschland
</p>
<p>
	Telefon: 0176/85778118<br>
	E-Mail: severin.weitz@yahoo.com
</p>
<p>Datenschutzbeauftragte/r beim Anbieter ist:</p>
<p>Severin Weitz</p> 
<h4>II. Rechte der Nutzer und Betroffenen</h4>
<p>Mit Blick auf die nachfolgend noch näher beschriebene Datenverarbeitung haben die Nutzer und Betroffenen das Recht</p>
<ul>
<li>auf Bestätigung, ob sie betreffende Daten verarbeitet werden, auf Auskunft über die verarbeiteten Daten, auf weitere Informationen über die Datenverarbeitung sowie auf Kopien der Daten (vgl. auch Art. 15 DSGVO);</li>
<li>auf Berichtigung oder Vervollständigung unrichtiger bzw. unvollständiger Daten (vgl. auch Art. 16 DSGVO);</li>
<li>auf unverzügliche Löschung der sie betreffenden Daten (vgl. auch Art. 17 DSGVO), oder, alternativ, soweit eine weitere Verarbeitung gemäß Art. 17 Abs. 3 DSGVO erforderlich ist, auf Einschränkung der Verarbeitung nach Maßgabe von Art. 18 DSGVO;</li>
<li>auf Erhalt der sie betreffenden und von ihnen bereitgestellten Daten und auf Übermittlung dieser Daten an andere Anbieter/Verantwortliche (vgl. auch Art. 20 DSGVO);</li>
<li>auf Beschwerde gegenüber der Aufsichtsbehörde, sofern sie der Ansicht sind, dass die sie betreffenden Daten durch den Anbieter unter Verstoß gegen datenschutzrechtliche Bestimmungen verarbeitet werden (vgl. auch Art. 77 DSGVO).</li>
</ul>
<p>Darüber hinaus ist der Anbieter dazu verpflichtet, alle Empfänger, denen gegenüber Daten durch den Anbieter offengelegt worden sind, über jedwede Berichtigung oder Löschung von Daten oder die Einschränkung der Verarbeitung, die aufgrund der Artikel 16, 17 Abs. 1, 18 DSGVO erfolgt, zu unterrichten. Diese Verpflichtung besteht jedoch nicht, soweit diese Mitteilung unmöglich oder mit einem unverhältnismäßigen Aufwand verbunden ist. Unbeschadet dessen hat der Nutzer ein Recht auf Auskunft über diese Empfänger.</p>
<p><strong>Ebenfalls haben die Nutzer und Betroffenen nach Art. 21 DSGVO das Recht auf Widerspruch gegen die künftige Verarbeitung der sie betreffenden Daten, sofern die Daten durch den Anbieter nach Maßgabe von Art. 6 Abs. 1 lit. f) DSGVO verarbeitet werden. Insbesondere ist ein Widerspruch gegen die Datenverarbeitung zum Zwecke der Direktwerbung statthaft.</strong></p>
<h4>III. Informationen zur Datenverarbeitung</h4>
<p>Ihre bei Nutzung unseres Internetauftritts verarbeiteten Daten werden gelöscht oder gesperrt, sobald der Zweck der Speicherung entfällt, der Löschung der Daten keine gesetzlichen Aufbewahrungspflichten entgegenstehen und nachfolgend keine anderslautenden Angaben zu einzelnen Verarbeitungsverfahren gemacht werden.</p>

<h5>Serverdaten</h5>
<p>Aus technischen Gründen, insbesondere zur Gewährleistung eines sicheren und stabilen Internetauftritts, werden Daten durch Ihren Internet-Browser an uns bzw. an unseren Webspace-Provider übermittelt. Mit diesen sog. Server-Logfiles werden u.a. Typ und Version Ihres Internetbrowsers, das Betriebssystem, die Website, von der aus Sie auf unseren Internetauftritt gewechselt haben (Referrer URL), die Website(s) unseres Internetauftritts, die Sie besuchen, Datum und Uhrzeit des jeweiligen Zugriffs sowie die IP-Adresse des Internetanschlusses, von dem aus die Nutzung unseres Internetauftritts erfolgt, erhoben.</p>
<p>Diese so erhobenen Daten werden vorrübergehend gespeichert, dies jedoch nicht gemeinsam mit anderen Daten von Ihnen.</p>
<p>Diese Speicherung erfolgt auf der Rechtsgrundlage von Art. 6 Abs. 1 lit. f) DSGVO. Unser berechtigtes Interesse liegt in der Verbesserung, Stabilität, Funktionalität und Sicherheit unseres Internetauftritts.</p>
<p>Die Daten werden spätestens nach sieben Tage wieder gelöscht, soweit keine weitere Aufbewahrung zu Beweiszwecken erforderlich ist. Andernfalls sind die Daten bis zur endgültigen Klärung eines Vorfalls ganz oder teilweise von der Löschung ausgenommen.</p>

<h5>Kundenkonto / Registrierungsfunktion</h5>
<p>Falls Sie über unseren Internetauftritt ein Kundenkonto bei uns anlegen, werden wir die von Ihnen bei der Registrierung eingegebenen Daten (also bspw. Ihren Namen, Ihre Anschrift oder Ihre E-Mail-Adresse) ausschließlich für vorvertragliche Leistungen, für die Vertragserfüllung oder zum Zwecke der Kundenpflege (bspw. um Ihnen eine Übersicht über Ihre bisherigen Bestellungen bei uns zur Verfügung zu stellen oder um Ihnen die sog. Merkzettelfunktion anbieten zu können) erheben und speichern. Gleichzeitig speichern wir dann die IP-Adresse und das Datum Ihrer Registrierung nebst Uhrzeit. Eine Weitergabe dieser Daten an Dritte erfolgt natürlich nicht.</p>
<p>Im Rahmen des weiteren Anmeldevorgangs wird Ihre Einwilligung in diese Verarbeitung eingeholt und auf diese Datenschutzerklärung verwiesen. Die dabei von uns erhobenen Daten werden ausschließlich für die Zurverfügungstellung des Kundenkontos verwendet.&nbsp;</p>
<p>Soweit Sie in diese Verarbeitung einwilligen, ist Art. 6 Abs. 1 lit. a) DSGVO Rechtsgrundlage für die Verarbeitung.</p>
<p>Sofern die Eröffnung des Kundenkontos zusätzlich auch vorvertraglichen Maßnahmen oder der Vertragserfüllung dient, so ist Rechtsgrundlage für diese Verarbeitung auch noch Art. 6 Abs. 1 lit. b) DSGVO.</p>
<p>Die uns erteilte Einwilligung in die Eröffnung und den Unterhalt des Kundenkontos können Sie gemäß Art. 7 Abs. 3 DSGVO jederzeit mit Wirkung für die Zukunft widerrufen. Hierzu müssen Sie uns lediglich über Ihren Widerruf in Kenntnis setzen.</p>
<p>Die insoweit erhobenen Daten werden gelöscht, sobald die Verarbeitung nicht mehr erforderlich ist. Hierbei müssen wir aber steuer- und handelsrechtliche Aufbewahrungsfristen beachten.</p>

<h5>Kontaktanfragen / Kontaktmöglichkeit</h5>
<p>Sofern Sie per Kontaktformular oder E-Mail mit uns in Kontakt treten, werden die dabei von Ihnen angegebenen Daten zur Bearbeitung Ihrer Anfrage genutzt. Die Angabe der Daten ist zur Bearbeitung und Beantwortung Ihre Anfrage erforderlich - ohne deren Bereitstellung können wir Ihre Anfrage nicht oder allenfalls eingeschränkt beantworten.</p>
<p>Rechtsgrundlage für diese Verarbeitung ist Art. 6 Abs. 1 lit. b) DSGVO.</p>
<p>Ihre Daten werden gelöscht, sofern Ihre Anfrage abschließend beantwortet worden ist und der Löschung keine gesetzlichen Aufbewahrungspflichten entgegenstehen, wie bspw. bei einer sich etwaig anschließenden Vertragsabwicklung.</p>

<h5>Nutzerbeiträge, Kommentare und Bewertungen</h5>
<p>Wir bieten Ihnen an, auf unseren Internetseiten Fragen, Antworten, Meinungen oder Bewertungen, nachfolgend nur „Beiträge genannt, zu veröffentlichen. Sofern Sie dieses Angebot in Anspruch nehmen, verarbeiten und veröffentlichen wir Ihren Beitrag, Datum und Uhrzeit der Einreichung sowie das von Ihnen ggf. genutzte Pseudonym.</p>
<p>Rechtsgrundlage hierbei ist Art. 6 Abs. 1 lit. a) DSGVO. Die Einwilligung können Sie gemäß Art. 7 Abs. 3 DSGVO jederzeit mit Wirkung für die Zukunft widerrufen. Hierzu müssen Sie uns lediglich über Ihren Widerruf in Kenntnis setzen.</p>
<p>Darüber hinaus verarbeiten wir auch Ihre IP- und E-Mail-Adresse. Die IP-Adresse wird verarbeitet, weil wir ein berechtigtes Interesse daran haben, weitere Schritte einzuleiten oder zu unterstützen, sofern Ihr Beitrag in Rechte Dritter eingreift und/oder er sonst wie rechtswidrig erfolgt.</p>
<p>Rechtsgrundlage ist in diesem Fall Art. 6 Abs. 1 lit. f) DSGVO. Unser berechtigtes Interesse liegt in der ggf. notwendigen Rechtsverteidigung.</p>

<h5>Abonnement von Beiträgen</h5>
<p>Sofern Sie Beiträge auf unseren Internetseiten veröffentlichen, bieten wir Ihnen zusätzlich an, etwaige Folgebeiträge Dritter zu abonnieren. Um Sie über diese Folgebeiträge per E-Mail informieren zu können, verarbeiten wir Ihre E-Mail-Adresse.</p>
<p>Rechtsgrundlage hierbei ist Art. 6 Abs. 1 lit. a) DSGVO. Die Einwilligung in dieses Abonnement können Sie gemäß Art. 7 Abs. 3 DSGVO jederzeit mit Wirkung für die Zukunft widerrufen. Hierzu müssen Sie uns lediglich über Ihren Widerruf in Kenntnis setzen oder den in der jeweiligen E-Mail enthaltenen Abmeldelink betätigen.</p>

<h5>YouTube</h5>
<p>In unserem Internetauftritt setzen wir YouTube ein. Hierbei handelt es sich um ein Videoportal der YouTube LLC., 901 Cherry Ave., 94066 San Bruno, CA, USA, nachfolgend nur „YouTube“ genannt.</p>
<p>YouTube ist ein Tochterunternehmen der Google LLC., 1600 Amphitheatre Parkway, Mountain View, CA 94043 USA, nachfolgend nur „Google“ genannt.</p>
<p>Durch die Zertifizierung nach dem EU-US-Datenschutzschild („EU-US Privacy Shield“)</p>
<p><a target="_blank" rel="nofollow" href="https://www.privacyshield.gov/participant?id=a2zt000000001L5AAI&amp;status=Active">https://www.privacyshield.gov/participant?id=a2zt000000001L5AAI&amp;status=Active</a></p>
<p>garantiert Google und damit auch das Tochterunternehmen YouTube, dass die Datenschutzvorgaben der EU auch bei der Verarbeitung von Daten in den USA eingehalten werden.</p>
<p>Wir nutzen YouTube im Zusammenhang mit der Funktion „Erweiterter Datenschutzmodus“, um Ihnen Videos anzeigen zu können. Rechtsgrundlage ist Art. 6 Abs. 1 lit. f) DSGVO. Unser berechtigtes Interesse liegt in der Qualitätsverbesserung unseres Internetauftritts. Die Funktion „Erweiterter Datenschutzmodus“ bewirkt laut Angaben von YouTube, dass die nachfolgend noch näher bezeichneten Daten nur dann an den Server von YouTube übermittelt werden, wenn Sie ein Video auch tatsächlich starten.</p>
<p>Ohne diesen „Erweiterten Datenschutz“ wird eine Verbindung zum Server von YouTube in den USA hergestellt, sobald Sie eine unserer Internetseiten, auf der ein YouTube-Video eingebettet ist, aufrufen.</p>
<p>Diese Verbindung ist erforderlich, um das jeweilige Video auf unserer Internetseite über Ihren Internet-Browser darstellen zu können. Im Zuge dessen wird YouTube zumindest Ihre IP-Adresse, das Datum nebst Uhrzeit sowie die von Ihnen besuchte Internetseite erfassen und verarbeiten. Zudem wird eine Verbindung zu dem Werbenetzwerk „DoubleClick“ von Google hergestellt.</p>
<p>Sollten Sie gleichzeitig bei YouTube eingeloggt sein, weist YouTube die Verbindungsinformationen Ihrem YouTube-Konto zu. Wenn Sie das verhindern möchten, müssen Sie sich entweder vor dem Besuch unseres Internetauftritts bei YouTube ausloggen oder die entsprechenden Einstellungen in Ihrem YouTube-Benutzerkonto vornehmen.</p>
<p>Zum Zwecke der Funktionalität sowie zur Analyse des Nutzungsverhaltens speichert YouTube dauerhaft Cookies über Ihren Internet-Browser auf Ihrem Endgerät. Falls Sie mit dieser Verarbeitung nicht einverstanden sind, haben Sie die Möglichkeit, die Speicherung der Cookies durch eine Einstellung in Ihrem Internet-Browsers zu verhindern. Nähere Informationen hierzu finden Sie vorstehend unter „Cookies“.</p>
<p>Weitergehende Informationen über die Erhebung und Nutzung von Daten sowie Ihre diesbezüglichen Rechte und Schutzmöglichkeiten hält Google in den unter</p>
<p><a target="_blank" rel="nofollow" href="https://policies.google.com/privacy">https://policies.google.com/privacy</a></p>
<p>abrufbaren Datenschutzhinweisen bereit.</p>

<p>
<a target="_blank" href="https://www.ratgeberrecht.eu/leistungen/muster-datenschutzerklaerung.html">Muster-Datenschutzerklärung</a> der <a target="_blank" href="https://www.ratgeberrecht.eu/">Anwaltskanzlei Weiß &amp; Partner</a></p>',
));

// Common language entries
$lang = array_merge($lang, array(
	'ACCOUNT_ACTIVE'				=> 'Dein Benutzerkonto wurde aktiviert. Vielen Dank für deine Registrierung.',
	'ACCOUNT_ACTIVE_ADMIN'			=> 'Das Benutzerkonto wurde aktiviert.',
	'ACCOUNT_ACTIVE_PROFILE'		=> 'Dein Benutzerkonto wurde erfolgreich reaktiviert.',
	'ACCOUNT_ADDED'					=> 'Vielen Dank für die Registrierung, dein Benutzerkonto wurde erstellt. Du kannst dich nun mit deinem Benutzername und deinem Passwort anmelden.',
	'ACCOUNT_COPPA'					=> 'Dein Benutzerkonto wurde erstellt, muss jedoch erst freigegeben werden. Bitte überprüfe deine E-Mails für weitere Informationen.',
	'ACCOUNT_EMAIL_CHANGED'			=> 'Dein Benutzerkonto wurde aktualisiert. Jedoch erfordert dieses Board nach der Änderung der E-Mail-Adresse eine erneute Aktivierung. Dazu wurde ein Aktivierungs-Schlüssel an die von dir neu angegebene Adresse geschickt. Bitte überprüfe deine E-Mails für weitere Informationen.',
	'ACCOUNT_EMAIL_CHANGED_ADMIN'	=> 'Dein Benutzerkonto wurde aktualisiert. Jedoch erfordert dieses Board nach der Änderung der E-Mail-Adresse eine erneute Aktivierung durch einen Administrator. Die Administratoren wurden per E-Mail informiert und du wirst benachrichtigt, sobald dein Benutzerkonto wieder freigeschaltet wurde.',
	'ACCOUNT_INACTIVE'				=> 'Dein Benutzerkonto wurde erstellt. Du musst es jedoch erst freischalten. Dazu wurde ein Aktivierungs-Schlüssel an die von dir angegebene Adresse geschickt. Bitte überprüfe deine E-Mails für weitere Informationen.',
	'ACCOUNT_INACTIVE_ADMIN'		=> 'Dein Benutzerkonto wurde erstellt. Es muss jedoch erst durch einen Administrator freigeschaltet werden. Die Administratoren wurden per E-Mail über dein neues Benutzerkonto informiert und du wirst benachrichtigt, sobald dein Benutzerkonto freigeschaltet wurde.',
	'ACTIVATION_EMAIL_SENT'			=> 'Der Aktivierungs-Schlüssel wurde an deine E-Mail-Adresse geschickt.',
	'ACTIVATION_EMAIL_SENT_ADMIN'	=> 'Der Aktivierungs-Schlüssel wurde per E-Mail an die Board-Administration gesendet.',
	'ADD'							=> 'Hinzufügen',
	'ADD_BCC'						=> '[ BCC ]',
	'ADD_FOES'						=> 'Weitere Mitglieder ignorieren',
	'ADD_FOES_EXPLAIN'				=> 'Du kannst mehrere Benutzernamen jeweils in einer eigenen Zeile angeben.',
	'ADD_FOLDER'					=> 'Ordner erstellen',
	'ADD_FRIENDS'					=> 'Freunde hinzufügen',
	'ADD_FRIENDS_EXPLAIN'			=> 'Du kannst mehrere Benutzernamen jeweils in einer eigenen Zeile angeben.',
	'ADD_NEW_RULE'					=> 'Neue Regel erstellen',
	'ADD_RULE'						=> 'Regel erstellen',
	'ADD_TO'						=> '[ An ]',
	'ADD_USERS_UCP_EXPLAIN'			=> 'Hier kannst du neue Benutzer der Gruppe hinzufügen. Du kannst festlegen, ob die Gruppe zur Standardgruppe der angegebenen Benutzer wird. Bitte gib jeden Benutzernamen in einer neuen Zeile ein.',
	'ADMIN_EMAIL'					=> 'Administratoren dürfen mir Informationen per E-Mail schicken',
	'AGREE'							=> 'Ich bin mit diesen Bedingungen einverstanden',
	'ALLOW_PM'						=> 'Andere Mitglieder dürfen mir Private Nachrichten schicken',
	'ALLOW_PM_EXPLAIN'				=> 'Administratoren und Moderatoren dürfen dir immer Private Nachrichten schicken.',
	'ALREADY_ACTIVATED'				=> 'Du hast dein Benutzerkonto bereits aktiviert.',
	'ATTACHMENTS_EXPLAIN'			=> 'Dies ist eine Übersicht aller Dateianhänge, die du in Beiträgen dieses Boards erstellt hast.',
	'ATTACHMENTS_DELETED'			=> 'Dateianhänge erfolgreich gelöscht.',
	'ATTACHMENT_DELETED'			=> 'Dateianhang erfolgreich gelöscht.',
	'AVATAR_CATEGORY'				=> 'Kategorie',
	'AVATAR_EXPLAIN'				=> 'Maximale Bildgröße: %1$d Pixel breit, %2$d Pixel hoch. Maximale Dateigröße: %3$.2f KiB.',
	'AVATAR_FEATURES_DISABLED'		=> 'Die Avatar-Funktion ist derzeit deaktiviert.',
	'AVATAR_GALLERY'				=> 'Lokale Galerie',
	'AVATAR_GENERAL_UPLOAD_ERROR'	=> 'Konnte Avatar nicht nach %s hochladen.',
	'AVATAR_NOT_ALLOWED'			=> 'Dein Avatar kann nicht angezeigt werden, da Avatare deaktiviert wurden.',
	'AVATAR_PAGE'					=> 'Seite',
	'AVATAR_TYPE_NOT_ALLOWED'		=> 'Dein aktueller Avatar kann nicht angezeigt werden, da der verwendete Avatar-Typ deaktiviert wurde.',

	'BACK_TO_DRAFTS'			=> 'Zurück zu den gespeicherten Entwürfen',
	'BACK_TO_LOGIN'				=> 'Zurück zur Anmeldemaske',
	'BIRTHDAY'					=> 'Geburtstag',
	'BIRTHDAY_EXPLAIN'			=> 'Wenn du ein Jahr angibst, wird an deinem Geburtstag dein Alter angezeigt.',
	'BOARD_DATE_FORMAT'			=> 'Mein Datums-Format',
	'BOARD_DATE_FORMAT_EXPLAIN'	=> 'Die Syntax entspricht der der <a href="http://www.php.net/date">date()</a>-Funktion von PHP.',
	'BOARD_DST'					=> 'Derzeit ist Sommerzeit',
	'BOARD_LANGUAGE'			=> 'Meine Sprache',
	'BOARD_STYLE'				=> 'Mein Board-Style',
	'BOARD_TIMEZONE'			=> 'Meine Zeitzone',
	'BOOKMARKS'					=> 'Lesezeichen',
	'BOOKMARKS_EXPLAIN'			=> 'Du kannst ein Lesezeichen für ein Thema setzen, um später darauf zurückzugreifen. Wähle das Kontrollkästchen für jedes Lesezeichen aus, das du löschen möchtest und klicke die „Markierte Lesezeichen entfernen“-Schaltfläche.',
	'BOOKMARKS_DISABLED'		=> 'Lesezeichen sind auf diesem Board deaktiviert.',
	'BOOKMARKS_REMOVED'			=> 'Lesezeichen erfolgreich entfernt.',

	'CANNOT_EDIT_MESSAGE_TIME'	=> 'Du kannst diese Nachricht nicht mehr ändern oder löschen.',
	'CANNOT_MOVE_TO_SAME_FOLDER'=> 'Nachrichten können nicht in den Ordner verschoben werden, den du löschen möchtest.',
	'CANNOT_MOVE_FROM_SPECIAL'	=> 'Nachrichten können nicht aus dem Postausgang verschoben werden.',
	'CANNOT_RENAME_FOLDER'		=> 'Dieser Ordner kann nicht umbenannt werden.',
	'CANNOT_REMOVE_FOLDER'		=> 'Dieser Ordner kann nicht gelöscht werden.',
	'CHANGE_DEFAULT_GROUP'		=> 'Ändere Hauptgruppe',
	'CHANGE_PASSWORD'			=> 'Ändere Passwort',
	'CLICK_GOTO_FOLDER'			=> '%1$sZu deinem „%3$s“-Ordner%2$s',
	'CLICK_RETURN_FOLDER'		=> '%1$sZurück zu deinem „%3$s“-Ordner%2$s',
	'CONFIRMATION'				=> 'Bestätigung der Registrierung',
	'CONFIRM_CHANGES'			=> 'Änderungen bestätigen',
	'CONFIRM_EMAIL'				=> 'Bestätigung der E-Mail-Adresse',
	'CONFIRM_EMAIL_EXPLAIN'		=> 'Du musst die Bestätigung nur angeben, wenn du deine E-Mail-Adresse ändern möchtest.',
	'CONFIRM_EXPLAIN'			=> 'Um automatisierte Anmeldungen zu unterbinden, musst du einen Bestätigungscode angeben. Der Code ist in dem Bild unterhalb dieses Textes enthalten. Wenn du nur über ein eingeschränktes Sehvermögen verfügst oder aus einem anderen Grund den Code nicht lesen kannst, kontaktiere bitte die %sBoard-Administration%s.',
	'VC_REFRESH'				=> 'Neuer Code',
	'VC_REFRESH_EXPLAIN'		=> 'Wenn du den Bestätigungscode nicht lesen kannst, kannst du mit dieser Schaltfläche einen neuen anfordern.',

	'CONFIRM_PASSWORD'			=> 'Bestätigung des Passworts',
	'CONFIRM_PASSWORD_EXPLAIN'	=> 'Du musst dein Passwort nur bestätigen, wenn du es oben änderst.',
	'COPPA_BIRTHDAY'			=> 'Um mit dem Registrierungs-Prozess fortzufahren, teile uns bitte mit, wann du geboren wurdest.',
	'COPPA_COMPLIANCE'			=> 'COPPA-Einwilligung',
	'COPPA_EXPLAIN'				=> 'Bitte beachte, dass durch Absenden des Formulars dein Benutzerkonto erstellt wird. Allerdings kann es nicht aktiviert werden, bis ein Elternteil oder ein Erziehungsberechtigter deine Registrierung bestätigt hat. Du erhältst per E-Mail das dafür notwendige Formular und Details, wohin es gesendet werden muss.',
	'CREATE_FOLDER'				=> 'Ordner anlegen …',
	'CURRENT_IMAGE'				=> 'Aktuelles Bild',
	'CURRENT_PASSWORD'			=> 'Aktuelles Passwort',
	'CURRENT_PASSWORD_EXPLAIN'	=> 'Du musst dein aktuelles Passwort eingeben, wenn du deinen Benutzernamen oder deine E-Mail-Adresse abändern möchtest.',
	'CURRENT_CHANGE_PASSWORD_EXPLAIN' => 'Damit du dein Passwort, deine E-Mail-Adresse oder deinen Benutzernamen ändern kannst, musst du dein aktuelles Passwort eingeben.',
	'CUR_PASSWORD_EMPTY'		=> 'Du hast dein aktuelles Passwort nicht angegeben.',
	'CUR_PASSWORD_ERROR'		=> 'Das angegebene aktuelle Passwort ist fehlerhaft.',
	'CUSTOM_DATEFORMAT'			=> 'Eigenes …',

	'DEFAULT_ACTION'			=> 'Standard-Verhalten',
	'DEFAULT_ACTION_EXPLAIN'	=> 'Dieses Verhalten greift, wenn keine der oberen Optionen anwendbar ist.',
	'DEFAULT_ADD_SIG'			=> 'Meine Signatur standardmäßig anhängen',
	'DEFAULT_BBCODE'			=> 'BBCode standardmäßig aktivieren',
	'DEFAULT_NOTIFY'			=> 'Mich standardmäßig über Antworten informieren',
	'DEFAULT_SMILIES'			=> 'Smilies standardmäßig aktivieren',
	'DEFINED_RULES'				=> 'Definierte Regeln',
	'DELETED_TOPIC'				=> 'Thema wurde gelöscht.',
	'DELETE_ATTACHMENT'			=> 'Lösche Dateianhang',
	'DELETE_ATTACHMENTS'		=> 'Lösche Dateianhänge',
	'DELETE_ATTACHMENT_CONFIRM'	=> 'Bist du dir sicher, dass du diesen Dateianhang löschen möchtest?',
	'DELETE_ATTACHMENTS_CONFIRM'=> 'Bist du dir sicher, dass du diese Dateianhänge löschen möchtest?',
	'DELETE_AVATAR'				=> 'Lösche Bild',
	'DELETE_COOKIES_CONFIRM'	=> 'Bist du dir sicher, dass du alle Cookies des Boards löschen möchtest?',
	'DELETE_MARKED_PM'			=> 'Lösche markierte Nachrichten',
	'DELETE_MARKED_PM_CONFIRM'	=> 'Bist du dir sicher, dass du alle markierten Nachrichten löschen möchtest?',
	'DELETE_OLDEST_MESSAGES'	=> 'Lösche älteste Nachrichten',
	'DELETE_MESSAGE'			=> 'Lösche Nachricht',
	'DELETE_MESSAGE_CONFIRM'	=> 'Bist du dir sicher, dass du diese Private Nachricht löschen möchtest?',
	'DELETE_MESSAGES_IN_FOLDER'	=> 'Lösche alle Nachrichten im zu löschenden Ordner',
	'DELETE_RULE'				=> 'Lösche Regel',
	'DELETE_RULE_CONFIRM'		=> 'Bist du dir sicher, dass du diese Regel entfernen möchtest?',
	'DEMOTE_SELECTED'			=> 'Führung niederlegen',
	'DISABLE_CENSORS'			=> 'Wortzensur aktivieren',
	'DISPLAY_GALLERY'			=> 'Galerie anzeigen',
	'DOMAIN_NO_MX_RECORD_EMAIL'	=> 'Die für die E-Mail angegebene Domain hat keinen gültigen MX-Eintrag.',
	'DOWNLOADS'					=> 'Downloads',
	'DRAFTS_DELETED'			=> 'Alle ausgewählten Entwürfe wurden erfolgreich gelöscht.',
	'DRAFTS_EXPLAIN'			=> 'Hier kannst du deine gespeicherten Entwürfe ansehen, ändern oder löschen.',
	'DRAFT_UPDATED'				=> 'Entwurf erfolgreich aktualisiert.',

	'EDIT_DRAFT_EXPLAIN'		=> 'Hier hast du die Möglichkeit, deine Entwürfe zu ändern. Entwürfe enthalten keine Informationen zu Dateianhängen und Umfragen.',
	'EMAIL_BANNED_EMAIL'		=> 'Die von dir angegebene E-Mail-Adresse darf nicht benutzt werden.',
	'EMAIL_REMIND'				=> 'Du musst die E-Mail-Adresse angeben, die in deinem Profil hinterlegt ist. Diese hast du bei der Registrierung angegeben oder nachträglich in deinem persönlichen Bereich geändert.',
	'EMAIL_TAKEN_EMAIL'			=> 'Die angegebene E-Mail-Adresse wird bereits verwendet.',
	'EMPTY_DRAFT'				=> 'Du musst eine Nachricht eingeben, um deine Änderungen zu speichern.',
	'EMPTY_DRAFT_TITLE'			=> 'Du musst einen Titel für den Entwurf angeben.',
	'EXPORT_AS_XML'				=> 'Exportiere im XML-Format',
	'EXPORT_AS_CSV'				=> 'Exportiere als CSV',
	'EXPORT_AS_CSV_EXCEL'		=> 'Exportiere als CSV (Excel)',
	'EXPORT_AS_TXT'				=> 'Exportiere als TXT-Datei',
	'EXPORT_AS_MSG'				=> 'Exportiere als MSG-Datei',
	'EXPORT_FOLDER'				=> 'Exportiere diese Ansicht',

	'FIELD_REQUIRED'					=> 'Das Feld „%s“ muss ausgefüllt werden.',
	'FIELD_TOO_SHORT'					=> '„%1$s“ ist zu kurz, es sind mindestens %2$d Zeichen erforderlich.',
	'FIELD_TOO_LONG'					=> '„%1$s“ ist zu lang, es sind maximal %2$d Zeichen zulässig.',
	'FIELD_TOO_SMALL'					=> 'Der Wert von „%1$s“ ist zu klein, er muss mindestens %2$d betragen.',
	'FIELD_TOO_LARGE'					=> 'Der Wert von „%1$s“ ist zu groß, er darf maximal %2$d betragen.',
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'	=> '„%s“ enthält ungültige Zeichen. Es sind nur Zahlen zulässig.',
	'FIELD_INVALID_CHARS_ALPHA_ONLY'	=> '„%s“ enthält ungültige Zeichen. Es sind nur alphanumerische Zeichen zulässig.',
	'FIELD_INVALID_CHARS_SPACERS_ONLY'	=> '„%s“ enthält ungültige Zeichen. Es sind nur alphanumerische, Leer- und -+_[]-Zeichen zulässig.',
	'FIELD_INVALID_DATE'				=> '„%s“ enthält ein ungültiges Datum.',
	'FIELD_INVALID_VALUE'				=> '„%s“ enthält einen ungültigen Wert.',

	'FOE_MESSAGE'				=> 'Nachricht von ignoriertem Mitglied',
	'FOES_EXPLAIN'				=> 'Diese Mitglieder werden durch dich ignoriert. Ihre Beiträge sind nicht vollständig sichtbar. Ignorierte Mitglieder können dir aber weiterhin Private Nachrichten senden. Bitte beachte, dass du keine Moderatoren oder Administratoren ignorieren kannst.',
	'FOES_UPDATED'				=> 'Die Liste deiner ignorierten Mitglieder wurde erfolgreich aktualisiert.',
	'FOLDER_ADDED'				=> 'Ordner erfolgreich angelegt.',
	'FOLDER_MESSAGE_STATUS'		=> '%1$d von %2$d Nachrichten gespeichert',
	'FOLDER_NAME_EMPTY'			=> 'Du musst einen Namen für den Ordner angeben.',
	'FOLDER_NAME_EXIST'			=> 'Der Ordner <strong>%s</strong> existiert bereits.',
	'FOLDER_OPTIONS'			=> 'Ordner-Einstellungen',
	'FOLDER_RENAMED'			=> 'Ordner erfolgreich umbenannt.',
	'FOLDER_REMOVED'			=> 'Ordner erfolgreich gelöscht.',
	'FOLDER_STATUS_MSG'			=> 'Ordner ist zu %1$d%% voll (%2$d von %3$d Nachrichten gespeichert)',
	'FORWARD_PM'				=> 'PN weiterleiten',
	'FORCE_PASSWORD_EXPLAIN'	=> 'Du musst dein Passwort ändern, bevor du andere Bereiche des Boards besuchen kannst.',
	'FRIEND_MESSAGE'			=> 'Nachricht von Freund',
	'FRIENDS'					=> 'Freunde',
	'FRIENDS_EXPLAIN'			=> 'Die Freunde-Funktion ermöglicht dir einen schnellen Zugriff auf Mitglieder, mit denen du oft kommunizierst. Sofern es das Template unterstützt, werden alle Beiträge von deinen Freunden hervorgehoben.',
	'FRIENDS_OFFLINE'			=> 'Offline',
	'FRIENDS_ONLINE'			=> 'Online',
	'FRIENDS_UPDATED'			=> 'Die Liste deiner Freunde wurde erfolgreich aktualisiert.',
	'FULL_FOLDER_OPTION_CHANGED'=> 'Das Verhalten für den Fall, dass ein Ordner voll ist, wurde erfolgreich geändert.',
	'FWD_ORIGINAL_MESSAGE'		=> '-------- Ursprüngliche Nachricht --------',
	'FWD_SUBJECT'				=> 'Betreff: %s',
	'FWD_DATE'					=> 'Datum: %s',
	'FWD_FROM'					=> 'Von: %s',
	'FWD_TO'					=> 'An: %s',

	'GLOBAL_ANNOUNCEMENT'		=> 'Globale Bekanntmachung',

	'HIDE_ONLINE'				=> 'Verberge meinen Online-Status',
	'HIDE_ONLINE_EXPLAIN'		=> 'Wenn Du diese Einstellung änderst, wird Sie erst bei deinem nächsten Besuch des Boards aktiv.',
	'HOLD_NEW_MESSAGES'			=> 'Akzeptiere keine neuen Nachrichten (Neue Nachrichten werden zurückgehalten, bis ausreichend Speicherplatz vorhanden ist)',
	'HOLD_NEW_MESSAGES_SHORT'	=> 'Neue Nachrichten werden zurückgehalten',

	'IF_FOLDER_FULL'			=> 'Wenn Ordner voll ist',
	'IMPORTANT_NEWS'			=> 'Wichtige Bekanntmachungen',
	'INVALID_USER_BIRTHDAY'			=> 'Der angegebene Geburtstag ist kein gültiges Datum.',
	'INVALID_CHARS_USERNAME'	=> 'Der Benutzername enthält unzulässige Zeichen.',
	'INVALID_CHARS_NEW_PASSWORD'=> 'Das Passwort enthält nicht die erforderlichen Zeichen.',
	'ITEMS_REQUIRED'			=> 'Die mit * markierten Felder sind erforderlich und müssen ausgefüllt werden.',

	'JOIN_SELECTED'				=> 'Ausgewählter beitreten',

	'LANGUAGE'					=> 'Sprache',
	'LINK_REMOTE_AVATAR'		=> 'Von extern verlinken',
	'LINK_REMOTE_AVATAR_EXPLAIN'=> 'Gib die URL eines Avatar-Bildes ein, das du verwenden möchtest.',
	'LINK_REMOTE_SIZE'			=> 'Avatar-Größe',
	'LINK_REMOTE_SIZE_EXPLAIN'	=> 'Gib die Breite und die Höhe des Avatars an. Wenn die Felder leer gelassen werden, wird eine automatische Erkennung versucht.',
	'LOGIN_EXPLAIN_UCP'			=> 'Bitte melde dich an, um auf deinen persönlichen Bereich zuzugreifen.',
	'LOGIN_REDIRECT'			=> 'Du wurdest erfolgreich angemeldet.',
	'LOGOUT_FAILED'				=> 'Du wurdest nicht abgemeldet, da die Anfrage nicht zu deiner Sitzung passte. Bitte wende dich an die Board-Administration, sofern das Problem regelmäßig auftritt.',
	'LOGOUT_REDIRECT'			=> 'Du wurdest erfolgreich abgemeldet.',

	'MARK_IMPORTANT'				=> 'Als wichtig markieren/demarkieren',
	'MARKED_MESSAGE'				=> 'Markierte Nachricht',
	'MAX_FOLDER_REACHED'			=> 'Die maximal zulässige Zahl benutzerdefinierter Ordner wurde erreicht.',
	'MESSAGE_BY_AUTHOR'				=> 'von',
	'MESSAGE_COLOURS'				=> 'Nachrichten-Farben',
	'MESSAGE_DELETED'				=> 'Nachricht erfolgreich gelöscht.',
	'MESSAGE_EDITED'				=> 'Nachricht erfolgreich geändert.',
	'MESSAGE_HISTORY'				=> 'Nachrichten-Verlauf',
	'MESSAGE_REMOVED_FROM_OUTBOX'	=> 'Diese Nachricht wurde von ihrem Autor gelöscht.',
	'MESSAGE_SENT_ON'				=> 'am',
	'MESSAGE_STORED'				=> 'Die Nachricht wurde erfolgreich gesendet.',
	'MESSAGE_TO'					=> 'An',
	'MESSAGES_DELETED'				=> 'Nachrichten erfolgreich gelöscht',
	'MOVE_DELETED_MESSAGES_TO'		=> 'Nachrichten im zu löschenden Ordner verschieben nach',
	'MOVE_DOWN'						=> 'Nach unten',
	'MOVE_MARKED_TO_FOLDER'			=> 'Markierte verschieben nach %s',
	'MOVE_PM_ERROR'					=> 'Beim Verschieben deiner Nachrichten in den neuen Ordner ist ein Fehler aufgetreten. Es wurden nur %1d von %2d Nachrichten verschoben.',
	'MOVE_TO_FOLDER'				=> 'In Ordner verschieben',
	'MOVE_UP'						=> 'Nach oben',

	'NEW_EMAIL_CONFIRM_EMPTY'		=> 'Du hast deine E-Mail-Adresse nicht bestätigt.',
	'NEW_EMAIL_ERROR'			=> 'Die angegebenen E-Mail-Adressen stimmten nicht überein.',
	'NEW_FOLDER_NAME'			=> 'Neuer Name des Ordners',
	'NEW_PASSWORD'				=> 'Neues Passwort',
	'NEW_PASSWORD_CONFIRM_EMPTY'	=> 'Du hast das Passwort nicht bestätigt.',
	'NEW_PASSWORD_ERROR'		=> 'Das angegebene Passwort stimmte nicht mit seiner Bestätigung überein.',
	'NOTIFY_METHOD'				=> 'Benachrichtigungs-Methode',
	'NOTIFY_METHOD_BOTH'		=> 'Beide',
	'NOTIFY_METHOD_EMAIL'		=> 'Nur per E-Mail',
	'NOTIFY_METHOD_EXPLAIN'		=> 'Methode, die für den Versand von Nachrichten über das Board verwendet wird.',
	'NOTIFY_METHOD_IM'			=> 'Nur per Jabber',
	'NOTIFY_ON_PM'				=> 'Benachrichtige mich über neue Nachrichten',
	'NOT_ADDED_FRIENDS_ANONYMOUS'	=> 'Du kannst das Gäste-Benutzerkonto nicht zu deinen Freunden hinzufügen.',
	'NOT_ADDED_FRIENDS_BOTS'		=> 'Du kannst keine Bots zu deinen Freunden hinzufügen.',
	'NOT_ADDED_FRIENDS_FOES'		=> 'Du kannst kein Mitglied zu deinen Freunden hinzufügen, das sich in der Liste der ignorierten Mitglieder befindet.',
	'NOT_ADDED_FRIENDS_SELF'		=> 'Du kannst dich nicht selbst zu deinen Freunden hinzufügen.',
	'NOT_ADDED_FOES_MOD_ADMIN'		=> 'Du kannst keine Moderatoren und Administratoren zur deinen ignorierten Mitgliedern hinzufügen.',
	'NOT_ADDED_FOES_ANONYMOUS'		=> 'Du kannst das Gäste-Benutzerkonto nicht zu deinen ignorierten Mitgliedern hinzufügen.',
	'NOT_ADDED_FOES_BOTS'			=> 'Du kannst Bots nicht zu deinen ignorierten Mitgliedern hinzufügen.',
	'NOT_ADDED_FOES_FRIENDS'		=> 'Du kannst kein Mitglied zu deinen ignorierten Mitgliedern hinzufügen, das sich in der Liste deiner Freunde befindet.',
	'NOT_ADDED_FOES_SELF'			=> 'Du kannst dich nicht selbst zu deinen ignorierten Mitgliedern hinzufügen.',
	'NOT_AGREE'						=> 'Ich bin mit diesen Bedingungen nicht einverstanden',
	'NOT_ENOUGH_SPACE_FOLDER'		=> 'Der Ziel-Ordner „%s“ scheint voll zu sein. Die gewählte Aktion wurde nicht durchgeführt.',
	'NOT_MOVED_MESSAGE'				=> 'Du hast 1 zurückgehaltene Private Nachricht, weil der Ordner voll ist.',
	'NOT_MOVED_MESSAGES'			=> 'Du hast %d zurückgehaltene Private Nachrichten, weil der Ordner voll ist.',
	'NO_ACTION_MODE'				=> 'Keine Nachrichten-Aktion festgelegt.',
	'NO_AUTHOR'						=> 'Es ist kein Autor für diese Nachricht festgelegt.',
	'NO_AVATAR_CATEGORY'			=> 'Keine',

	'NO_AUTH_DELETE_MESSAGE'		=> 'Du bist nicht berechtigt, Private Nachrichten zu löschen.',
	'NO_AUTH_EDIT_MESSAGE'			=> 'Du bist nicht berechtigt, Private Nachrichten zu ändern.',
	'NO_AUTH_FORWARD_MESSAGE'		=> 'Du bist nicht berechtigt, Private Nachrichten weiterzuleiten.',
	'NO_AUTH_GROUP_MESSAGE'			=> 'Du bist nicht berechtigt, Private Nachrichten an Gruppen zu senden.',
	'NO_AUTH_PASSWORD_REMINDER'		=> 'Du bist nicht berechtigt, ein neues Passwort anzufordern.',
	'NO_AUTH_READ_HOLD_MESSAGE'		=> 'Du bist nicht berechtigt, zurückgehaltene Private Nachrichten zu lesen.',
	'NO_AUTH_READ_MESSAGE'			=> 'Du bist nicht berechtigt, Private Nachrichten zu lesen.',
	'NO_AUTH_READ_REMOVED_MESSAGE'	=> 'Du kannst diese Nachricht nicht lesen, weil sie von ihrem Autor gelöscht wurde.',
	'NO_AUTH_SEND_MESSAGE'			=> 'Du bist nicht berechtigt, Private Nachrichten zu senden.',
	'NO_AUTH_SIGNATURE'				=> 'Du bist nicht berechtigt, eine Signatur festzulegen.',

	'NO_BCC_RECIPIENT'			=> 'Keinen',
	'NO_BOOKMARKS'				=> 'Du hast keine Lesezeichen gesetzt.',
	'NO_BOOKMARKS_SELECTED'		=> 'Du hast keine Lesezeichen ausgewählt.',
	'NO_EDIT_READ_MESSAGE'		=> 'Diese Private Nachricht kann nicht geändert werden, da sie bereits gelesen wurde.',
	'NO_EMAIL_USER'				=> 'Es existiert kein Benutzer mit dieser Kombination aus Benutzernamen und E-Mail-Adresse.',
	'NO_FOES'					=> 'Derzeit sind keine ignorierten Mitglieder definiert',
	'NO_FRIENDS'				=> 'Derzeit sind keine Freunde definiert',
	'NO_FRIENDS_OFFLINE'		=> 'Keine Freunde offline',
	'NO_FRIENDS_ONLINE'			=> 'Keine Freunde online',
	'NO_GROUP_SELECTED'			=> 'Keine Gruppe ausgewählt.',
	'NO_IMPORTANT_NEWS'			=> 'Keine wichtigen Bekanntmachungen vorhanden.',
	'NO_MESSAGE'				=> 'Die Private Nachricht konnte nicht gefunden werden.',
	'NO_NEW_FOLDER_NAME'		=> 'Du musst einen neuen Namen für den Ordner angeben.',
	'NO_NEWER_PM'				=> 'Keine neueren Nachrichten.',
	'NO_OLDER_PM'				=> 'Keine älteren Nachrichten.',
	'NO_PASSWORD_SUPPLIED'		=> 'Du kannst dich nicht ohne Passwort anmelden.',
	'NO_RECIPIENT'				=> 'Kein Empfänger angegeben.',
	'NO_RULES_DEFINED'			=> 'Keine Regeln festgelegt.',
	'NO_SAVED_DRAFTS'			=> 'Keine Entwürfe gespeichert.',
	'NO_TO_RECIPIENT'			=> 'Keinen',
	'NO_WATCHED_FORUMS'			=> 'Du beobachtest keine Foren.',
	'NO_WATCHED_SELECTED'		=> 'Du hast keine beobachteten Themen oder Foren ausgewählt.',
	'NO_WATCHED_TOPICS'			=> 'Du beobachtest keine Themen.',

	'PASS_TYPE_ALPHA_EXPLAIN'	=> 'Das Passwort muss zwischen %1$d und %2$d Zeichen lang sein und aus Groß- und Kleinbuchstaben sowie Ziffern bestehen.',
	'PASS_TYPE_ANY_EXPLAIN'		=> 'Muss zwischen %1$d und %2$d Zeichen lang sein.',
	'PASS_TYPE_CASE_EXPLAIN'	=> 'Das Passwort muss zwischen %1$d und %2$d Zeichen lang sein und muss aus Groß- und Kleinbuchstaben bestehen.',
	'PASS_TYPE_SYMBOL_EXPLAIN'	=> 'Das Passwort muss zwischen %1$d und %2$d Zeichen lang sein und muss aus Groß- und Kleinbuchstaben, Ziffern sowie Sonderzeichen bestehen.',
	'PASSWORD'					=> 'Passwort',
	'PASSWORD_ACTIVATED'		=> 'Dein neues Passwort wurde aktiviert.',
	'PASSWORD_UPDATED'			=> 'Dein neues Passwort wurde an deine hinterlegte E-Mail-Adresse gesendet.',
	'PERMISSIONS_RESTORED'		=> 'Ursprüngliche Berechtigungen wieder hergestellt.',
	'PERMISSIONS_TRANSFERRED'	=> 'Berechtigungen von <strong>%s</strong> erfolgreich übernommen. Du kannst nun das Board mit den Rechten des Benutzers testen.<br />Bitte beachte, dass Administrationsrechte nicht übernommen wurden. Du kannst jederzeit zu deinen Berechtigungen zurückkehren.',
	'PM_DISABLED'				=> 'Private Nachrichten sind auf diesem Board deaktiviert.',
	'PM_FROM'					=> 'Von',
	'PM_FROM_REMOVED_AUTHOR'	=> 'Diese Nachricht wurde dir von einem Mitglied gesendet, das nicht mehr registriert ist.',
	'PM_ICON'					=> 'PN-Symbol',
	'PM_INBOX'					=> 'Posteingang',
	'PM_NO_USERS'				=> 'Der Benutzer, der hinzugefügt werden sollte, existiert nicht.',
	'PM_OUTBOX'					=> 'Postausgang',
	'PM_SENTBOX'				=> 'Gesendete Nachrichten',
	'PM_SUBJECT'				=> 'Betreff',
	'PM_TO'						=> 'Senden an',
	'PM_USERS_REMOVED_NO_PM'	=> 'Einige Benutzer konnten nicht hinzugefügt werden, da sie den Empfang Privater Nachrichten deaktiviert haben.',
	'POPUP_ON_PM'				=> 'Öffne ein Benachrichtigungsfenster bei neuen Privaten Nachrichten',
	'POST_EDIT_PM'				=> 'Nachricht ändern',
	'POST_FORWARD_PM'			=> 'Nachricht weiterleiten',
	'POST_NEW_PM'				=> 'Neue Nachricht erstellen',
	'POST_PM_LOCKED'			=> 'Private Nachrichten stehen nicht zur Verfügung.',
	'POST_PM_POST'				=> 'Beitrag zitieren',
	'POST_QUOTE_PM'				=> 'Zitiere Nachricht',
	'POST_REPLY_PM'				=> 'Auf Nachricht antworten',
	'PRINT_PM'					=> 'Druckansicht',
	'PREFERENCES_UPDATED'		=> 'Deine Einstellungen wurden aktualisiert.',
	'PROFILE_INFO_NOTICE'		=> 'Bitte beachte, dass diese Angaben von anderen Mitgliedern einsehbar sind. Sei daher vorsichtig, wenn du persönliche Daten angibst. Jedes mit einem * markierte Feld muss ausgefüllt werden.',
	'PROFILE_UPDATED'			=> 'Dein Profil wurde aktualisiert.',

	'RECIPIENT'							=> 'Empfänger',
	'RECIPIENTS'						=> 'Empfänger',
	'REGISTRATION'						=> 'Registrierung',
	'RELEASE_MESSAGES'					=> '%sZurückgehaltene Nachrichten freigeben%s … — Sie werden in den passenden Ordner sortiert, sobald ausreichend Platz zur Verfügung steht.',
	'REMOVE_ADDRESS'					=> 'Adresse entfernen',
	'REMOVE_SELECTED_BOOKMARKS'			=> 'Ausgewählte Lesezeichen entfernen',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM'	=> 'Bist du dir sicher, dass du alle ausgewählten Lesezeichen entfernen möchtest?',
	'REMOVE_BOOKMARK_MARKED'			=> 'Markierte Lesezeichen entfernen',
	'REMOVE_FOLDER'						=> 'Ordner löschen',
	'REMOVE_FOLDER_CONFIRM'				=> 'Bist du dir sicher, dass du diesen Ordner löschen möchtest?',
	'RENAME'							=> 'Umbenennen',
	'RENAME_FOLDER'						=> 'Ordner umbenennen',
	'REPLIED_MESSAGE'					=> 'Beantwortete Nachricht',
	'REPLY_TO_ALL'						=> 'Absender und allen Empfängern antworten.',
	'REPORT_PM'							=> 'Private Nachricht melden',
	'RESIGN_SELECTED'					=> 'Aus ausgewählter austreten',
	'RETURN_FOLDER'						=> '%1$sZurück zum vorherigen Ordner%2$s',
	'RETURN_UCP'						=> '%sZurück zum persönlichen Bereich%s',
	'RULE_ADDED'						=> 'Regel erfolgreich hinzugefügt.',
	'RULE_ALREADY_DEFINED'				=> 'Diese Regel wurde bereits festgelegt.',
	'RULE_DELETED'						=> 'Regel erfolgreich entfernt.',
	'RULE_LIMIT_REACHED'				=> 'Du kannst keine weiteren Regeln für Private Nachrichten erstellen, da du das Maximum möglicher Regeln erreicht hast.',
	'RULE_NOT_DEFINED'					=> 'Die Regel wurde nicht korrekt definiert.',
	'RULE_REMOVED_MESSAGE'				=> 'Eine Private Nachricht wurde auf Grund deiner Regeln entfernt.',
	'RULE_REMOVED_MESSAGES'				=> '%d Private Nachrichten wurden auf Grund deiner Regeln entfernt.',

	'SAME_PASSWORD_ERROR'		=> 'Das von dir eingegebene neue Passwort entspricht deinem aktuellen Passwort.',
	'SEARCH_YOUR_POSTS'			=> 'Deine Beiträge anzeigen',
	'SEND_PASSWORD'				=> 'Passwort senden',
	'SENT_AT'					=> 'Gesendet',			// Used before dates in private messages
	'SHOW_EMAIL'				=> 'Mitglieder dürfen mich per E-Mail kontaktieren',
	'SIGNATURE_EXPLAIN'			=> 'Eine Signatur ist ein Text, der an deine Nachrichten angefügt werden kann. Sie ist auf %d Zeichen begrenzt.',
	'SIGNATURE_PREVIEW'			=> 'Deine Signatur wird folgendermaßen aussehen',
	'SIGNATURE_TOO_LONG'		=> 'Deine Signatur ist zu lang.',
	'SORT'						=> 'Sortiere',
	'SORT_COMMENT'				=> 'Dateikommentar',
	'SORT_DOWNLOADS'			=> 'Downloads',
	'SORT_EXTENSION'			=> 'Dateityp',
	'SORT_FILENAME'				=> 'Dateiname',
	'SORT_POST_TIME'			=> 'Erstellungsdatum',
	'SORT_SIZE'					=> 'Dateigröße',

	'TIMEZONE'					=> 'Zeitzone',
	'TO'						=> 'An',
	'TOO_MANY_RECIPIENTS'		=> 'Du hast versucht, eine Private Nachricht an zu viele Empfänger zu senden.',
	'TOO_MANY_REGISTERS'		=> 'Du hast die zulässige Zahl von Registrierungs-Versuchen in dieser Sitzung überschritten. Bitte versuche es später erneut.',

	'UCP'						=> 'Persönlicher Bereich',
	'UCP_ACTIVATE'				=> 'Benutzerkonto aktivieren',
	'UCP_ADMIN_ACTIVATE'		=> 'Bitte beachte, dass du eine gültige E-Mail-Adresse angeben musst, bevor dein Benutzerkonto aktiviert wird. Ein Administrator wird dein Benutzerkonto überprüfen und wenn er es freigibt, erhältst du eine Nachricht an die angegebene E-Mail-Adresse.',
	'UCP_AIM'					=> 'AOL-Webname',
	'UCP_ATTACHMENTS'			=> 'Dateianhänge',
	'UCP_COPPA_BEFORE'			=> 'Vor dem %s',
	'UCP_COPPA_ON_AFTER'		=> 'Am %s oder später',
	'UCP_EMAIL_ACTIVATE'		=> 'Bitte beachte, dass du eine gültige E-Mail-Adresse angeben musst, bevor dein Benutzerkonto aktiviert wird. Du erhältst eine E-Mail an die angegebene Adresse, in der ein Aktivierungs-Schlüssel enthalten ist.',
	'UCP_ICQ'					=> 'ICQ-Nummer',
	'UCP_JABBER'				=> 'Jabber-ID',

	'UCP_MAIN'					=> 'Einstieg',
	'UCP_MAIN_ATTACHMENTS'		=> 'Dateianhänge verwalten',
	'UCP_MAIN_BOOKMARKS'		=> 'Lesezeichen verwalten',
	'UCP_MAIN_DRAFTS'			=> 'Gespeicherte Entwürfe verwalten',
	'UCP_MAIN_FRONT'			=> 'Übersicht',
	'UCP_MAIN_SUBSCRIBED'		=> 'Benachrichtigungen verwalten',

	'UCP_MSNM'					=> 'WLM-Adresse',
	'UCP_NO_ATTACHMENTS'		=> 'Du hast keine Dateianhänge erstellt.',

	'UCP_PREFS'					=> 'Einstellungen',
	'UCP_PREFS_PERSONAL'		=> 'Persönliche Einstellungen',
	'UCP_PREFS_POST'			=> 'Nachrichten erstellen',
	'UCP_PREFS_VIEW'			=> 'Anzeigeoptionen ändern',

	'UCP_PM'					=> 'Private Nachrichten',
	'UCP_PM_COMPOSE'			=> 'Neue Nachricht erstellen',
	'UCP_PM_DRAFTS'				=> 'PN-Entwürfe verwalten',
	'UCP_PM_OPTIONS'			=> 'Regeln, Ordner &amp; Einstellungen',
	'UCP_PM_POPUP'				=> 'Private Nachrichten',
	'UCP_PM_POPUP_TITLE'		=> 'Benachrichtigung über Private Nachrichten',
	'UCP_PM_UNREAD'				=> 'Ungelesene Nachrichten',
	'UCP_PM_VIEW'				=> 'Nachrichten anzeigen',

	'UCP_PROFILE'				=> 'Profil',
	'UCP_PROFILE_AVATAR'		=> 'Avatar ändern',
	'UCP_PROFILE_PROFILE_INFO'	=> 'Profil ändern',
	'UCP_PROFILE_REG_DETAILS'	=> 'Registrierungs-Details ändern',
	'UCP_PROFILE_SIGNATURE'		=> 'Signatur ändern',

	'UCP_USERGROUPS'			=> 'Benutzergruppen',
	'UCP_USERGROUPS_MEMBER'		=> 'Mitgliedschaften ändern',
	'UCP_USERGROUPS_MANAGE'		=> 'Gruppen verwalten',

	'UCP_REGISTER_DISABLE'			=> 'Eine Registrierung ist derzeit nicht möglich.',
	'UCP_REMIND'					=> 'Passwort senden',
	'UCP_RESEND'					=> 'Aktivierungs-Schlüssel senden',
	'UCP_WELCOME'					=> 'Willkommen im persönlichen Bereich. Hier kannst du dein Profil, deine Präferenzen, deine beobachteten Foren und Themen überwachen, ansehen und aktualisieren. Du kannst auch Nachrichten an andere Mitglieder schicken (sofern erlaubt). Bitte lies alle Bekanntmachungen, bevor du fortfährst.',
	'UCP_YIM'						=> 'Yahoo!-ID',
	'UCP_ZEBRA'						=> 'Freunde und ignorierte Mitglieder',
	'UCP_ZEBRA_FOES'				=> 'Ignorierte Mitglieder verwalten',
	'UCP_ZEBRA_FRIENDS'				=> 'Freunde verwalten',
	'UNDISCLOSED_RECIPIENT'			=> 'Verborgene Empfänger',
	'UNKNOWN_FOLDER'				=> 'Unbekannter Ordner',
	'UNWATCH_MARKED'				=> 'Ausgewählte Benachrichtigungen deaktivieren',
	'UPLOAD_AVATAR_FILE'			=> 'Von deinem Rechner hochladen',
	'UPLOAD_AVATAR_URL'				=> 'Von URL hochladen',
	'UPLOAD_AVATAR_URL_EXPLAIN'		=> 'Gib die URL an, an der sich das Avatar-Bild befindet. Es wird dann auf diese Site hochgeladen.',
	'USERNAME_ALPHA_ONLY_EXPLAIN'	=> 'Der Benutzername muss zwischen %1$d und %2$d Zeichen lang sein und darf nur aus alphanumerischen Zeichen bestehen.',
	'USERNAME_ALPHA_SPACERS_EXPLAIN'=> 'Der Benutzername muss zwischen %1$d und %2$d Zeichen lang sein und darf nur aus alphanumerischen, Leer- und -+_[]-Zeichen bestehen.',
	'USERNAME_ASCII_EXPLAIN'		=> 'Der Benutzername muss zwischen %1$d und %2$d Zeichen lang sein und darf nur aus ASCII-Zeichen (also keinen Sonderzeichen oder Umlauten) bestehen.',
	'USERNAME_LETTER_NUM_EXPLAIN'	=> 'Der Benutzername muss zwischen %1$d und %2$d Zeichen lang sein und darf nur aus Buchstaben und Ziffern bestehen.',
	'USERNAME_LETTER_NUM_SPACERS_EXPLAIN'=> 'Der Benutzername muss zwischen %1$d und %2$d Zeichen lang sein und darf nur aus Buchstaben, Ziffern, Leer- und -+_[]-Zeichen bestehen.',
	'USERNAME_CHARS_ANY_EXPLAIN'	=> 'Der Benutzername muss zwischen %1$d und %2$d Zeichen lang sein.',
	'USERNAME_TAKEN_USERNAME'		=> 'Der ausgewählte Benutzername ist bereits vergeben. Bitte wähle einen anderen aus.',
	'USERNAME_DISALLOWED_USERNAME'	=> 'Der ausgewählte Benutzername wurde gesperrt oder enthält ein zensiertes Wort. Bitte wähle einen anderen Benutzernamen.',
	'USER_NOT_FOUND_OR_INACTIVE'	=> 'Die von dir angegebenen Benutzernamen wurden entweder nicht gefunden oder es handelt sich um nicht aktivierte Benutzer.',

	'VIEW_AVATARS'				=> 'Avatare anzeigen',
	'VIEW_EDIT'					=> 'Anzeigen/Ändern',
	'VIEW_FLASH'				=> 'Zeige Flash-Animationen',
	'VIEW_IMAGES'				=> 'Zeige Bilder in den Beiträgen',
	'VIEW_NEXT_HISTORY'			=> 'Nächste PN im Verlauf',
	'VIEW_NEXT_PM'				=> 'Nächste PN',
	'VIEW_PM'					=> 'Nachricht anzeigen',
	'VIEW_PM_INFO'				=> 'Details der Nachricht',
	'VIEW_PM_MESSAGE'			=> '1 Nachricht',
	'VIEW_PM_MESSAGES'			=> '%d Nachrichten',
	'VIEW_PREVIOUS_HISTORY'		=> 'Vorherige PN im Verlauf',
	'VIEW_PREVIOUS_PM'			=> 'Vorherige PN',
	'VIEW_SIGS'					=> 'Signaturen anzeigen',
	'VIEW_SMILIES'				=> 'Smilies als Grafiken anzeigen',
	'VIEW_TOPICS_DAYS'			=> 'Themen der letzten Zeit anzeigen',
	'VIEW_TOPICS_DIR'			=> 'Sortiere Themen',
	'VIEW_TOPICS_KEY'			=> 'Zeige Themen sortiert nach',
	'VIEW_POSTS_DAYS'			=> 'Beiträge der letzten Zeit anzeigen',
	'VIEW_POSTS_DIR'			=> 'Sortiere Beiträge',
	'VIEW_POSTS_KEY'			=> 'Zeige Beiträge sortiert nach',

	'WATCHED_EXPLAIN'			=> 'Unten befindet sich eine Liste der Foren und Themen, die du beobachtest. Du wirst über neue Beiträge in den beobachteten Foren und Themen benachrichtigt. Um eine Benachrichtigung zu deaktivieren, markiere sie und klicke auf „Ausgewählte Benachrichtigungen entfernen“.',
	'WATCHED_FORUMS'			=> 'Beobachtete Foren',
	'WATCHED_TOPICS'			=> 'Beobachtete Themen',
	'WRONG_ACTIVATION'			=> 'Der angegebene Aktivierungs-Schlüssel passt auf keinen in der Datenbank vorhandenen Schlüssel.',

	'YOUR_DETAILS'				=> 'Deine Aktivität',
	'YOUR_FOES'					=> 'Deine ignorierten Mitglieder',
	'YOUR_FOES_EXPLAIN'			=> 'Um Benutzer zu entfernen, markiere sie und klicke auf Absenden.',
	'YOUR_FRIENDS'				=> 'Deine Freunde',
	'YOUR_FRIENDS_EXPLAIN'		=> 'Um Benutzer zu entfernen, markiere sie und klicke auf Absenden.',
	'YOUR_WARNINGS'				=> 'Deine Verwarnungs-Stufe',

	'PM_ACTION' => array(
		'PLACE_INTO_FOLDER'	=> 'In Ordner ablegen',
		'MARK_AS_READ'		=> 'Als gelesen markieren',
		'MARK_AS_IMPORTANT'	=> 'Markieren',
		'DELETE_MESSAGE'	=> 'Nachricht löschen'
	),
	'PM_CHECK' => array(
		'SUBJECT'	=> 'Betreff',
		'SENDER'	=> 'Absender',
		'MESSAGE'	=> 'Nachricht',
		'STATUS'	=> 'Nachrichten-Status',
		'TO'		=> 'Gesendet an'
	),
	'PM_RULE' => array(
		'IS_LIKE'		=> 'ist wie',
		'IS_NOT_LIKE'	=> 'ist nicht wie',
		'IS'			=> 'entspricht',
		'IS_NOT'		=> 'entspricht nicht',
		'BEGINS_WITH'	=> 'beginnt mit',
		'ENDS_WITH'		=> 'endet mit',
		'IS_FRIEND'		=> 'ein Freund ist',
		'IS_FOE'		=> 'ein ignoriertes Mitglied ist',
		'IS_USER'		=> 'ist Mitglied',
		'IS_GROUP'		=> 'ist Mitglied der Gruppe',
		'ANSWERED'		=> 'beantwortet',
		'FORWARDED'		=> 'weitergeleitet',
		'TO_GROUP'		=> 'meine Hauptgruppe',
		'TO_ME'			=> 'mich'
	),


	'GROUPS_EXPLAIN'	=> 'Benutzergruppen erleichtern den Administratoren die Benutzerverwaltung. Standardmäßig wirst du einer spezifischen Gruppe zugeordnet, deiner Hauptgruppe. Diese Gruppe legt fest, wie dich andere Benutzer sehen, z.&nbsp;B. die Farbe deines Benutzernamens, deinen Avatar oder deinen Rang. Du kannst deine Hauptgruppe ändern, sofern dies die Administratoren erlaubt haben. Du kannst auch anderen Gruppen zugeordnet werden oder das Recht erhalten, anderen Gruppen beizutreten. Durch manche Gruppen erhältst du das Recht, auf zusätzliche Inhalte zuzugreifen oder deine Möglichkeiten werden in anderen Bereichen erweitert.',
	'GROUP_LEADER'		=> 'Gruppen-Leiter',
	'GROUP_MEMBER'		=> 'Mitgliedschaften',
	'GROUP_PENDING'		=> 'Laufende Beitrittsanfragen',
	'GROUP_NONMEMBER'	=> 'Gruppen ohne deine Mitgliedschaft',
	'GROUP_DETAILS'		=> 'Gruppen-Details',

	'NO_LEADER'		=> 'Du bist kein Leiter einer Gruppe',
	'NO_MEMBER'		=> 'Du bist in keiner Gruppe Mitglied',
	'NO_PENDING'	=> 'Du hast keine laufenden Beitrittsanfragen',
	'NO_NONMEMBER'	=> 'Es gibt keine Gruppe, in der du nicht Mitglied bist',
));

?>
