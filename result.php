<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<title>Result</title>
</head>
<body>
	<div class="container">
		<a href="index.php" class="btn btn-primary">Back</a> <br> <br>
	<?php 

if(isset($_POST['check'])){
	include 'simple_html_dom.php';
$curl = curl_init();

$search = $_POST['data'];
$search_trim = str_replace(' ', '', $search);
$url = "https://www.bing.com/search?q=$search_trim";


curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);



$result = curl_exec($curl);
preg_match_all("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $result, $matches);

$links = array_values(array_unique($matches[0]));



for($i=0; $i < count($links); $i++){
	if($links[$i] != "http://schemas.live.com/Web/" && $links[$i] != "http://www.w3.org/1999/xhtml" && $links[$i] != "www.bing.com" && $links[$i] != "https://business.bing.com/api/v3/search/person/photo?id=" && $links[$i] != "http://go.microsoft.com/fwlink/?LinkId=521839" && $links[$i] != "http://go.microsoft.com/fwlink/?LinkID=246338" && $links[$i] != "https://go.microsoft.com/fwlink/?linkid=868922" && $links[$i] != "https://go.microsoft.com/fwlink/?LinkID=617297" && $links[$i] != "https://storage.live.com/users/0x" && $links[$i] != "https://login.live.com/login.srf?wa=wsignin1.0" && $links[$i] != "www.staging-bing-int.com" && $links[$i] != "https://www"){
		echo " <div class='card'>
  <div class='card-header'>Click me!</div>
  <div class='card-body'><a href=$links[$i]>$links[$i]</a></div>
  <div class='card-footer'>Developed by <a href='http://devprecious.herokuapp.com'>DevPrecious</a></div>
</div>";
	echo "<br>";
	}
}

curl_close($curl);
}

 ?>


</div>
</body>


</html>