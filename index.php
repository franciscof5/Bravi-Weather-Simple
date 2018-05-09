<?php
$city = $_GET['c1-t'];

if(!isset($city) || $city==NULL)
	$city='London,uk';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Bravi Weather Simple</title>
</head>
<body>
<h1>City Weather</h1>
<p>Check out any city weather. Write city name below:</p>
<form method="GET" name="c1" action="index.php">
	<input type="text" name="c1-t">
	<input type="submit" name="c1-s" value="verify">
</form>
<?php

$url = 'http://api.openweathermap.org/data/2.5/weather?q='.$city.'&appid=808268433b2e03a5e15354526a3e7712';
#$ch = curl_init($url);
#$r=curl_exec($ch);
#$j=json_decode($r);
$r = file_get_contents($url);
$j = json_decode($r);

echo '<hr />';
echo 'City: '.$city;
echo '<br />';
echo 'Current main weather: '.$j->weather[0]->main;
echo '<br />';
echo 'Description: '.$j->weather[0]->description;
echo '<br />';
echo 'Temperature: '.$j->main->temp." °F";

?>
<p>Author: Francisco Matelli Matulovic</p>
<p>Released under GNU GPLv3</p>

</body>
</html>