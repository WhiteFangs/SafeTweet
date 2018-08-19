<?php

function safeTweet($tweet){
	$isSafe = !stristr($tweet, "viol") || 
	(stristr($tweet, "violet") || stristr($tweet, "violen") || stristr($tweet, "violem") ||
	stristr($tweet, "aviol") || stristr($tweet, "violac") || stristr($tweet, "violaç") ||
	stristr($tweet, "inviol") || stristr($tweet, "violat") || stristr($tweet, "violât")  || 
	stristr($tweet, "violon") || stristr($tweet, "violine")); // allow violence, violent, violet, violâtre, violaçé, violacer, violon, violoncelles
	$simpleWords = array("bougnoul", "bounioul", "chineto", "niak",
	"nègre", "négre", "négrillon", "négro",  // allow négritude
	"shoah", "youp", "banania", 
	"pédé", "pd", "gouine", "tafiol", "tarlou", "travelo");
	foreach ($simpleWords as $key => $word) {
		$isSafe = $isSafe && !stristr($tweet, $word);
	}
	return $isSafe;
}

?>