<?php
$APIKEY = "966f84e56c5622d896002d1bf39ef8a9";

$search = "carros";

$url = "http://api.themoviedb.org/3/search/movie?query={$search}&api_key={$APIKEY}&language=pt-BR";
$json = file_get_contents($url);
$obj = json_decode($json);

$total_pages = $obj->total_pages;


for ($x=1; $x <= $total_pages; $x++) {
	
	$url_single = "http://api.themoviedb.org/3/search/movie?query={$search}&api_key={$APIKEY}&language=pt-BR&page={$x}";
	$json_single = file_get_contents($url_single);
	$obj_single = json_decode($json_single);
	
	foreach($obj_single->results as $resultado) {
		echo $resultado->title;
		echo "<br />";
	}
	
}
