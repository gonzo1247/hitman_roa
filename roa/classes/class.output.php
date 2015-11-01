<?php
/**
 * Author: Peter Dragicevic [peter-91@hotmail.de]
 * Authors-Website: http://petschko.eona.in/
 * Date: 30.10.2015
 * Time: 20:20
 * Notes: -
 */

/**
 * Class output
 */
class output {
	/**
	 * @return string
	 */
	public static function point_management() {

		// Output-Code
		return "";
	}

	/**
	 * @return bool|string
	 */
	public static function exchange_points() {
		global $roa_url;

		// Execute
		if(! isset($_POST["id"]))
			$_POST["id"] = false;

		if($_POST["id"])
			$result = code_functions::execute_codebot($_POST["id"]);

		if(! isset($result))
			$result = "";

		if(is_array($result))
			return $result["code"];

		// Get own Points (may again to update them)
		$points_row = user_points::get(get_phpbb_info::$instance->user_id);

		// Create Output
		$code = "<div class=\"points\">" . $result . "Du hast derzeitig <b>" . $points_row['points_curr'] . "</b> Punkte.</div><br />";

		// Get List
		$all_costs_rows = point_costs::getAll();
		$code .= "<form action=\"" . $roa_url . "\" method=\"post\"><table>" . PHP_EOL;
		$code .= "<tr><th>Name</th><th>Kostet</th><th colspan=\"2\">Beschreibung</th></tr>" . PHP_EOL;
		foreach($all_costs_rows as $row) {
			if($row["enabled"]) {
				$code .= "<tr><td>" . $row["name"] . "</td><td><span class=\"" . (($points_row['points_curr'] < $row["points"]) ? 'not_' : '');
				$code .= "enougth_points\">" . $row["points"] . "</span></td><td>" . $row["descriptions"] . "</td><td>";

				if ($points_row['points_curr'] >= $row["points"] && (points_exchange::getNumByUserId(get_phpbb_info::$instance->user_id, $row["id"]) < $row["aviable_count"] || $row["aviable_count"] == -1))
					$code .= "<button type=\"submit\" name=\"id\" value=\"" . $row["id"] . "\">Punkte eintauschen</button></td></tr>" . PHP_EOL;
				else if(points_exchange::getNumByUserId(get_phpbb_info::$instance->user_id, $row["id"]) >= $row["aviable_count"] && $row["aviable_count"] != -1)
					$code .= "<button type=\"submit\" value=\"\" disabled>Kann nicht mehr eingelöst werden (Limitiert auf " . $row["aviable_count"] . "x)</button></td></tr>" . PHP_EOL;
				else
					$code .= "<button type=\"submit\" value=\"\" disabled>Zu wenig Punkte</button></td></tr>" . PHP_EOL;
			}
		}
		$code .= "</table></form>";

		// Output-Code
		return $code;
	}

	/**
	 * @param mixed $value
	 * @param bool $strict
	 * @return array|mixed|string
	 */
	public static function escapeALL($value, $strict = false) {
		if(is_array($value)) {
			$tmp = array();
			foreach($value as $key => $val)
				$tmp[$key] = self::escapeALL($val, $strict);

			return $tmp;
		}

		$value = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
		if($strict)
			$value = preg_replace("/[^a-zA-Z0-9._ ]/u", "", $value);

		return $value;
	}

	/**
	 * @param string $headline
	 * @param string $content
	 * @return string
	 */
	public static function HTMLTemplate($headline, $content) {
		return "			<div class=\"forabg\" style=\"padding-bottom: 5px;\">
				<div class=\"inner\">
					<span class=\"corners-top\">
						<span></span>
					</span>
					<ul class=\"topiclist\">
						<li class=\"header\">
							<dl class=\"icon\">
								<dt>" . $headline . "</dt>
							</dl>
						</li>
					</ul>
					<div class=\"panel bg1\" style=\"margin-bottom: 0px\">
						<div class=\"inner\">
							<span class=\"portal-corners-top-inner\">
							</span>
							<div class=\"postbody\" style=\"width: 100%\">
								" . $content . "
							</div>
							<span class=\"portal-corners-bottom-inner\">
							</span>
						</div>
					</div>
					<span class=\"corners-bottom\">
						<span></span>
					</span>
				</div>
			</div>";
	}

	/**
	 * @param array $product
	 * @param string $code
	 * @return string
	 */
	public static function getCodeMsg($product, $code) {
		return "Hallo " . get_phpbb_info::$instance->username . ",\r\n" . "\r\ndu hast einen RoA Code bekommen und kannst diesen Ingame Einlösen.\r\nSuche in Sturmwind oder Orgrimmar vor dem Auktionshaus nach einem Codebot.
			\r\n\r\nDein RoA-Code lautet:\r\n" . $code . "\r\n\r\nSolltest du einen Titel, ein Erfolg oder ein Level Up bekommen haben, so ist dieser Code an den Charakter gebunden
			\r\n\r\nMfg\r\n\r\nDein Rise of Azhara Team\r\n\r\nHinweis: Diese Nachricht wurde automatisch erstellt.";
	}

	/**
	 * @param int $product_id
	 * @param mixed $char_guid
	 * @param mixed $account
	 * @param string|bool $error
	 * @return string
	 */
	public static function getCharTransfer($product_id, $char_guid, $account, $error) {
		$product = point_costs::get($product_id);

		$code = "<div class=\"roa_selectfield\"><p>Bitte wähle einen Charakter aus, den du transferieren möchtest. Außerdem muss der Zielaccount angegeben werden.</p><br>" . PHP_EOL;
		if($error)
			$code .= "<div class=\"code_fail\">" . $error . "</div>";
		$code .= "<form action=\"?mod=" . MOD . "\" method=\"post\">";
		$code .= "<!-- Yes we using tables! --><table><tr><th>Charakter auswählen</th><th>Zielaccountname eingeben</th></tr>" . PHP_EOL;
		$code .= "<tr><td><select name='char_guid'>" . self::charlist(char_character::getAllFromAccount(auth_account::get_id(mb_strtolower(get_phpbb_info::$instance->username))), $char_guid);
		$code .= "</select></td><td><input name=\"new_acc\" type=\"text\" value=\"" . $account . "\"></td></tr></table>";
		$code .= "<input type=\"hidden\" name=\"id\" value=\"" . $product_id . "\"><input type=\"submit\" value=\"Charakter Transferieren\"></form></div>";

		return self::HTMLTemplate("> " . $product["name"] . " - Informationen ausfüllen", $code);
	}

	/**
	 * @param array $chars
	 * @param mixed $char_guid_selected
	 * @return string
	 */
	private static function charlist($chars, $char_guid_selected) {
		$code = "";
		if(! $char_guid_selected)
			$code = "<option selected>Bitte Char auswählen...</option>";
		foreach($chars as $char) {
			$select = "";
			if($char["guid"] == $char_guid_selected)
				$select = " selected";
			$code .= "<option value=\"" . $char["guid"] . "\"" . $select . ">" . $char["name"] . " (Lv. " . $char["level"] . ")</option>";
		}

		return $code;
	}

	/**
	 * @param array $product
	 * @return string
	 */
	public static function getPointActionsSuccess($product) {
		return "Hallo " . get_phpbb_info::$instance->username . ",\r\n\r\ndie Aktion " .$product["name"] . " wurde erfolgreich ausgeführt.\r\n\r\nDies ist lediglich eine Bestätigung.
			\r\n\r\nMfg\r\n\r\nDein Rise of Azhara Team\r\n\r\nHinweis: Diese Nachricht wurde automatisch erstellt.";
	}

	/**
	 * @param int $id
	 * @param mixed $char_guid
	 * @param string|bool $error
	 * @return string
	 */
	public static function getChar($id, $char_guid, $error) {
		$product = point_costs::get($id);

		$code = "<div class=\"roa_selectfield\"><p>Bitte wähle einen Charakter aus, mit dem du folgende Aktion ausführen möchtest: " . $product["name"] . "</p><br>" . PHP_EOL;
		if($error)
			$code .= "<div class=\"code_fail\">" . $error . "</div>";
		$code .= "<form action=\"?mod=" . MOD . "\" method=\"post\">";
		$code .= "<!-- Yes we using tables! --><table><tr><th>Charakter auswählen</th></tr>" . PHP_EOL;
		$code .= "<tr><td><select name='char_guid'>" . self::charlist(char_character::getAllFromAccount(auth_account::get_id(mb_strtolower(get_phpbb_info::$instance->username))), $char_guid);
		$code .= "</select></td></tr></table>";
		$code .= "<input type=\"hidden\" name=\"id\" value=\"" . $id . "\"><input type=\"submit\" value=\"Ausführen\"></form></div>";

		return self::HTMLTemplate("> " . $product["name"] . " - Charakter auswählen", $code);
	}

	public static function getText($id, $fieldname, $value, $desc_text, $error) {
		$product = point_costs::get($id);

		$code = "<div class=\"roa_selectfield\"><p>" . $desc_text . "</p><br>" . PHP_EOL;
		if($error)
			$code .= "<div class=\"code_fail\">" . $error . "</div>";
		$code .= "<form action=\"?mod=" . MOD . "\" method=\"post\">";
		$code .= "<!-- Yes we using tables! --><table><tr><td>Charakternamen eingeben:</td>";
		$code .= "<td><input type=\"text\" name=\"" . $fieldname . "\" value=\"" . $value . "\"></td></tr></table>";
		$code .= "<input type=\"hidden\" name=\"id\" value=\"" . $id . "\"><input type=\"submit\" value=\"Absenden\"></form></div>";

		return self::HTMLTemplate("> " . $product["name"] . " - Informationen ausfüllen", $code);
	}

	public static function char_restorePMmsg($charname) {
		return "Es wurde eine Charakter Wiederherstellung von dem User " . get_phpbb_info::$instance->usernameLink() . " beantragt.\r\n\r\n
			Der Charakter soll wiederhergestellt werden: " . $charname . "\r\n\r\nHinweis: Diese Nachricht wurde automatisch erstellt.";
	}
}
