<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>

<?php 
#$url = "http://www.paulnoll.com/Books/Clear-English/words-01-02-hundred.html"; 
#$content = file_get_contents($url); 

$count = preg_match_all("/<b>(.*)<\/b>/U", "Name: <b>John Poul</b> <br> Title: <b>PHP Guru</b>", $matches); 
echo $count; 
echo count($matches);

for ($i = 0; $i < count($matches); $i++) {
    echo $matches[0][$i];
}

?>
