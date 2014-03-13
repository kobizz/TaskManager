<?
require 'Global.php';

$output = new DBOutput;

$query = $output -> query('select * from config');

$default = [];

foreach($query as $set)
	$default[$set['name']] = $set['value'];

$config = [
	'actions' => $allowedActions,
	'default' => $default,
	'tasktypes' => Database::groupArray('id', $output -> query('select * from tasktypes'))
];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?=$LOCAL[18]?></title>
	<link rel="stylesheet" href="styles/style.css">
	<link rel="stylesheet" href="styles/jquery-ui.css">
	<link rel="icon" href="media/icon.png">
</head>
<body>
<center>
<div id="api-error"></div>
<div id="app">
	<div id="appcenter">
		<div id="ac-dialog">
			<p></p>
		</div>
		<div class="ac-tab" tab="calendar">
			<div id="calendar"></div>
		</div>
		<div class="ac-tab" tab="table-time">
			<?require 'tableTime.php';?>
		</div>
		<div class="ac-tab" tab="client">
			<?require 'Client.php';?>
		</div>
		<div id="popup">
			<div id="popup-img"></div>
			<div id="popup-title"></div>
		</div>
	</div>
	<div id="appside">
		<?require 'appSide.php';?>
	</div>
</div>
</center>
</body>
<script src="scripts/jquery.js"></script>
<script src="scripts/jquery-ui.js"></script>
<script src="scripts/jquery.tablesorter.js"></script>
<script src="scripts/date.js"></script>
<script src="local/<?=LANG?>.js"></script>
<script src="scripts/VBoard.js"></script>
<script src="scripts/Task.js"></script>
<script src="scripts/Agenda.js"></script>
<script src="scripts/TableTime.js"></script>
<script src="scripts/Client.js"></script>
<script src="scripts/Payment.js"></script>
<script src="scripts/Api.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/script.js"></script>
<script>var Config = <?=json_encode($config)?></script>
</html>