<?php

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array
$quotes = array(
array("quotes" => "It is during our darkest moments that we must focus to see the light.", 
      "source" => "Aristotle",
      "citation"=> "Brainy Quotes",
      "year" => "364 BC"),
array("quotes" => "Believe you can and you're halfway there.",
      "source" => "Theodore Roosevelt",
      "citation" => "Brainy Quotes",
      "year" => "1888"),
array("quotes" => "Keep your face always toward the sunshine - and shadows will fall behind you.",
      "source" => "Walt Whitman",
      "citation" => "Brainy Quotes",
      "year" => "1853"),
array("quotes" => "I have not failed. I've just found 10,000 ways that won't work.",
      "source" => "Thomas A. Edison",
      "citation" => "Brainy Quotes",
      "year" => "1919"),
array("quotes" => "I have no special talent. I am only passionately curious.",
      "source" => "Albert Einstein",
      "citation" => "Brainy Quotes",
      "year" => "1923"));


// Create the getRandomQuuote function and name it getRandomQuote
function getRandomQuote($arr) {
      $random = array_rand($arr,1); //first get random element within the array
      $result = $arr[$random];    // Then using the random array, and return this function
      return $result;
}


// Create the printQuote funtion and name it printQuote

function printQuote($arr2) {
     $result2 = getRandomQuote($arr2); // we called randomquotes function into this function, then we can use it
     $quotes1 = $result2["quotes"];
     $source = $result2["source"];
     $citation = $result2["citation"];
     $year = $result2["year"];

     $fullHtml = '';
     $fullHtml .= "<p class='quote'>$quotes1</p>
//                  <p class='source'>$source";
     if(isset($citation)) {
       $fullHtml .= "<span class='citation'>$citation</span>";
     }
     if(isset($year)) {
       $fullHtml .= "<span class='year'>$year</span>";
     }
     $fullHtml .= "</p>";
//     if($source == "Albert Einstein") {
//        $fullHtml = "<p class='quote'>$quotes1</p>
//                  <p class='source'>$source
//                  <span class='citation'>Brainy Quotes</span>
//                  <span class='year'>1923</span></p>";
//     }
//     if($source == "Thomas A. Edison") {
//       $fullHtml = "<p class='quote'>$quotes1</p>
//                  <p class='source'>$source
//                  <span class='citation'>Brainy Quotes</span>
//                  <span class='year'>1919</span></p>";
//     }
//     if($source == "Walt Whitman") {
//       $fullHtml = "<p class='quote'>$quotes1</p>
//                  <p class='source'>$source
//                  <span class='citation'>Brainy Quotes</span>
//                  <span class='year'>1853</span></p>";
//     }
//     if($source == "Theodore Roosevelt") {
//       $fullHtml = "<p class='quote'>$quotes1</p>
//                  <p class='source'>$source
//                  <span class='citation'>Brainy Quotes</span>
//                  <span class='year'>1888</span></p>";
//     }
//     if($source == "Aristotle") {
//       $fullHtml = "<p class='quote'>$quotes1</p>
//                  <p class='source'>$source
//                  <span class='citation'>Brainy Quotes</span>
//                  <span class='year'>364 BC</span></p>"; // after the if statement, we can use citation and year for particular person
     return $fullHtml;
}

$words = printQuote($quotes);
echo $words;
?>
