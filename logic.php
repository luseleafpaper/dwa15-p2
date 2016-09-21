<?php 
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)

function is_checked($checkname) 
{
    if (empty($_POST[$checkname])) { 
        return "false";
    } 
    else 
    {
        return "on";
    } 
}

function get_password($words, $number, $symbol) 
{ 

  if (($words > 9) || ($words < 1)) { 
    echo "Invalid number of words. Must be a number less than 9 and greater than 1"; 
    return ; 
  } 


  #echo "Here's a ".$words."-word password"; 
  #if ($number=="on") echo " with a number";
  #if ($symbol=="on") echo " with a symbol";
  #echo ".<br>";
  
  $word_array=get_words(); 

  $rand_keys = array_rand($word_array, $words); 
  if ($words==1) { $rand_keys=array($rand_keys); }  

  $password =""; 
  for ($i=0; $i<$words; $i++){ 
    $word_index = $rand_keys[$i]; 
    $password=$password.$word_array[$word_index];
  } 

  if ($number=="on")
  {
    $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0); 
    $num_index = array_rand($numbers); 
    $password.=$numbers[$num_index];
  }
  if ($symbol=="on")
  {
    $numbers = array("!", "@", "#", "$", "%", "^", "&", "*", "?"); 
    $num_index = array_rand($numbers); 
    $password.=$numbers[$num_index];
  } 

  return $password; 
} 

function get_words() {
    # reads in words from words.csv
    $file = "words.csv";
    $words = array();
    $filep = fopen($file, "r");
    while(!feof($filep)){
        $line = fgets($filep);
        $words[]=$line;
    }

    # If there are too few words in the list, rescrape Paul Noll's word lists
    if (count($words)<=1000) {
        file_put_contents("scrape.html", ""); #clear the contents of this file 
        #Scrape single digit number pages
        for ($i=1; $i<9; $i=$i+2) {
            $url = "http://www.paulnoll.com/Books/Clear-English/words-0".$i."-0".($i+1)."-hundred.html";
            $content = file_get_contents($url);
            file_put_contents("scrape.html", $content, FILE_APPEND);
        }
        #Scrape double digit number pages
        for ($i=11; $i<30; $i=$i+2) {
            $url = "http://www.paulnoll.com/Books/Clear-English/words-".$i."-".($i+1)."-hundred.html";
            $content = file_get_contents($url);
            file_put_contents("scrape.html", $content, FILE_APPEND);
        }

        # Find all <li> elements and store them into matches
        $content = file_get_contents("scrape.html");
        $count = preg_match_all("/<li>\s*(.*)\s*<\/li>/U", $content, $matches);

        file_put_contents("words.csv", ""); #clear this word list as well 
	# For match in matches, strip and add the word to the words.csv 
        for ($i = 0; $i < $count; $i++) {
            $word = trim( $matches[1][$i]);
            file_put_contents("words.csv", $word."\n", FILE_APPEND);
        }
        return get_words();
    }

    return $words;
}
?>

