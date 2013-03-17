<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>MBC Events</title>
</head>

<body>
<?php
include('connection.php');
$mbcevents = $dataconnection->query("select event_details from events_list");
while ($row = $mbcevents->fetch_object()) {
	echo '<p>'.$row->event_details.'</p>';
}
$dataconnection->close();
?>
</body>
</html>