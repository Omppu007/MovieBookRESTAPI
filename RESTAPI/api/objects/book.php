<?php
Class Book{

	function getBook($isbn){
		$url = 'https://openlibrary.org/api/books?bibkeys=ISBN:' .$isbn. '&format=json';
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