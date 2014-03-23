<?

/** Requires **/

require 'local/detect.lib.php';

require 'Authorization.class.php';

/** General config **/

date_default_timezone_set('Asia/Jerusalem');

define('LANG', detectLang());

define('DATE_FORMAT', 'd/m/Y');

define('TIME_FORMAT', 'H:i:s');

define('COMPANY_NAME', 'TaskManager');

/** Database and user config **/

define('DB_AREA', 'taskmanager_');

$author = new Authorization;

$user = $author -> createWorkSpace();

if(gettype($user) != 'array'){

	$header = 'location: login/';

	if(isset($_GET['login']))
		$header .= "?login=$user";

	header($header);

	exit;
}

if(isset($_GET['login']))
	header('location: ' . $_SERVER['PHP_SELF']);

define('USERNAME', $user['username']);

define('ACCESS', (int) $user['permission']);

/** getting all allowed actions for this user **/

$sql = new DBOutput;

$allowedActions = $sql -> query('select * from action_authorized where access >= ' . ACCESS);

$recognizedUsers = $author -> userClass -> getRecognized();