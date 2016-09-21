<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)

function get_words() { 
    # Check if words.csv is populated 
    $file = "words.csv"; 
    $words = array();
    $filep = fopen($file, "r"); 
    while(!feof($filep)){ 
        $line = fgets($filep); 
        $words[]=$line; 
    } 

    echo "Word list includes ".count($words)." words<br>"; 

    if (count($words)<=1000) { 
        for ($i=1; $i<9; $i=$i+2) { 
            $url = "http://www.paulnoll.com/Books/Clear-English/words-0".$i."-0".($i+1)."-hundred.html";
            $content = file_get_contents($url); 
            file_put_contents("scrape.html", $content, FILE_APPEND);
        } 

        for ($i=11; $i<30; $i=$i+2) { 
            $url = "http://www.paulnoll.com/Books/Clear-English/words-".$i."-".($i+1)."-hundred.html";
            $content = file_get_contents($url); 
            file_put_contents("scrape.html", $content, FILE_APPEND);
        } 
        $content = file_get_contents("scrape.html"); 

        $count = preg_match_all("/<li>\s*(.*)\s*<\/li>/U", $content, $matches); 

        for ($i = 0; $i < $count; $i++) {
            $word = trim( $matches[1][$i]);
            file_put_contents("words.csv", $word."\n", FILE_APPEND); 
        }
        return get_words(); 
    } 
    
   	return $words; 
}  

$words=get_words(); 
echo $words[0]; 

?>
