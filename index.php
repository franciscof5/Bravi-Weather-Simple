<!DOCTYPE html>
<html>
<head>
	<title>Bravi Weather Simples</title>
</head>
<body>
<?php
$url = 'http://api.openweathermap.org/data/2.5/weather?q=London,uk&appid=808268433b2e03a5e15354526a3e7712';
$ch = curl_init($url);
#$fp = fopen("pagina_exemplo.txt", "w");

#curl_setopt($ch, CURLOPT_FILE, $fp);
#curl_setopt($ch, CURLOPT_HEADER, 0);

curl_exec($ch);
curl_close($ch);
#fclose($fp);

echo "teste";
?>
</body>
</html>