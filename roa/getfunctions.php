<?php
/**
 * Author: Peter Dragicevic [peter-91@hotmail.de]
 * Authors-Website: http://petschko.eona.in/
 * Date: 27.09.2015
 * Time: 16:01
 * Notes: -
 */

function getfunctionOutput() {
	switch(MOD) {
		case 'control':
			//todo
		case 'codebot':
			return "<form action=\"code_generatet.php\" method=\"get\">
    <p>1000 Punkte f?r einen Eigenen Forenavatar Eintauschen </p><p>
    <input type=\"submit\" value=\"Einloesen:\" />
    </form>
		<form action=\"code_generatet.php\" method=\"get\">
    <p>2500 Punkte f?r eine Charakterwiederherstellung Eintauschen, sofern m?glich. </p><p>
    <input type=\"submit\" value=\"Einloesen:\" />
    </form>
	<form action=\"code_generatet.php\" method=\"get\">
    <p>1000 Punkte f?r einen Charaktertransfer Eintauschen </p><p>
    <input type=\"submit\" value=\"Einloesen:\" />
    </form>
	<form action=\"code_generatet.php\" method=\"get\">
    <p>500 Punkte gegen eine Charakter Geschlechtsumwandlung Eintauschen </p><p>
    <input type=\"submit\" value=\"Einloesen:\" />
    </form>
	<form action=\"code_generatet.php\" method=\"get\">
    <p>6000 Punkte gegen eine \"BigMac\" RoA-Tasche ( 36 Pl?tze )
( Achtung: Seelengebunden und einzigartig Anlegbar! )  </p><p>
    <input type=\"submit\" value=\"Einloesen:\" />
    </form>";
		default:
			return "Unbekannter Modus";
	}
}
