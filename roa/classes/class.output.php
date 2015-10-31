<?php
/**
 * Author: Peter Dragicevic [peter-91@hotmail.de]
 * Authors-Website: http://petschko.eona.in/
 * Date: 30.10.2015
 * Time: 20:20
 * Notes: -
 */

class output {
	public static function point_management() {

		// Output-Code
		return "";
	}

	public static function exchange_points() {
		global $roa_url;
		// Get own Points
		$points_row = user_points::get(get_phpbb_info::$instance->user_id);

		$code = "<div class=\"points\">Du hast derzeitig <b>" . $points_row['points_curr'] . "</b> Punkte.</div><br />";

		// Get List
		$all_costs_rows = point_costs::getAll();
		$code .= "<form action=\"" . $roa_url . "\" method=\"post\"><table>" . PHP_EOL;
		$code .= "<tr><th>Name</th><th>Kostet</th><th colspan=\"2\">Beschreibung</th></tr>" . PHP_EOL;
		foreach($all_costs_rows as $row) {
			$code .= "<tr><td>" . $row["name"] . "</td><td><span class=\"" . (($points_row['points_curr'] < $row["points"]) ? 'not_' : '');
			$code .= "enougth_points\">" . $row["points"] . "</span></td><td>" . $row["descriptions"] . "</td><td>";

			if($points_row['points_curr'] >= $row["points"])
				$code .= "<button type=\"submit\" value=\"" . $row["id"] . "\">Punkte eintauschen</button></td></tr>" . PHP_EOL;
			else
				$code .= "<button type=\"submit\" value=\"\" disabled>Zu wenig Punkte</button></td></tr>" . PHP_EOL;
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
}
