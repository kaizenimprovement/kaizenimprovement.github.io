<html>
<head>
<title>Votes</title>
</head>
<body>
<?php
header("Content-Type: application/csv");
header("Content-Disposition: attachement; Filename=poll.csv");

$response=$_POST['response'];

echo "$response,\r\n";

?>
</body>
</html>