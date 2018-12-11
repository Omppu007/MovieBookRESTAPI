<?php
Class Movie{

	function getMovie($title, $year, $plot){
		$apikey = "";
		$url = 'https://www.omdbapi.com/?apikey=' .$apikey. '&t=' .$title. '&y=' .$year. '&plot=' .$plot. '&r=json';
		$context=array(
			"ssl"=>array(
				"verify_peer"=>false,
				"verify_peer_name"=>false,
			),
		);  

		$result = file_get_contents($url, false, stream_context_create($context));

		echo $result;
	}
}
?>