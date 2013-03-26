<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>MBC Events</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

</head>

<body>
 <h2>This list of events for the Marin Bonsai Club was created using php and an SQL database.</h2>
<?php
include('connection.php');
$mbcevents = $dataconnection->query(
"select event_date, event_type_desc, event_details 
from events_list, events_type 
where events_list.event_type=events_type.event_type
order by event_date desc");

/*if(!$result = $dataconnection->query($sql)){
    die('There was an error running the query [' . $dataconnection->error . ']');
}*/


echo" <table class = 'table table-hover' width='100%'>
        <col style='width:5%'>
        <col style='width:6%'>
        <col style='width:50%'>
<tr>
<th>Date</th>
<th>Event</th>
<th>Details</th>
</tr>";

while($row = $mbcevents->fetch_object())
  {
  echo "<tr>";
  echo "<td>" .$row->event_date. "</td>";
  echo "<td>" .$row->event_type_desc. "</td>";
  echo "<td>" .$row->event_details. "</td>";
  echo "</tr>";
  }

echo "</table>"
;
$dataconnection->close();
?>

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>