<?php 
// 1. Write a PHP script to : a) transform a string all uppercase letters.
$string = "Hello, this is php string task";
echo strtoupper($string);
echo "<br>";

// b) transform a string all lowercase letters.
echo strtolower($string);
echo "<br>";

// c) make a string's first character uppercase.
// echo strtoupper($string);
echo ucfirst($string);
echo "<br>";

// d) make a string's first character of all the words uppercase.
echo ucwords($string);
echo "<br>";

// ----------------------------------------
// 2. Write a PHP script to split the following string. Sample string : '082307' Expected Output : 08:23:07
$string2 = "082307";
echo substr(chunk_split($string2, 2, ':'), 0, -1);
echo "<br>";

// 3. Write a PHP script to check whether a string contains a specific string? Sample string : 'The quick brown fox jumps over the lazy dog.' Check whether the said string contains the string 'jumps'.
$string3 = "The quick brown fox jumps over the lazy dog.";
if (strpos($string3,'jumps') == true) {
    echo 'The specific word is present.';
} else {
    echo 'The specific word is not present.';
};
echo "<br>";

// ----------------------------------------
// 4. Write a PHP script to extract the file name from the following string. Sample String : 'www.example.com/public_html/index.php' Expected Output : 'index.php'
$string4 = "www.example.com/public_html/index.php";
echo strrchr($string4, "/");
echo "<br/>";

// ----------------------------------------
// 5. Write a PHP script to extract the user name from the following email ID. Sample String : 'Orange@example.com' Expected Output : 'Orange'
$string5 = "Orange@example.com";
echo strstr($string5, '@',1);
echo "<br/>";

// ----------------------------------------
// 6. Write a PHP script to get the last three characters of a string. Sample String : 'Orange@example.com' Expected Output : 'com'
$string6 = "Orange@example.com";
echo substr($string6,-3);
echo "<br/>";

// ----------------------------------------
// 7. Write a PHP script to generate simple random passwords [do not use rand() function] from a given string. Sample string : '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz' Note : Password length may be 6, 7, 8 etc. Expected OutPut: 254ABCc
$string7 = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz";
echo substr(str_shuffle($string7), 7, 14);
echo "<br/>";

// ----------------------------------------
// 8. Write a PHP script to replace the first 'the' of the following string with 'That'. Sample date : 'the quick brown fox jumps over the lazy dog.' Expected Result : That quick brown fox jumps over the lazy dog.
$string8 = "the quick brown fox jumps over the lazy dog.";
echo str_replace('the','That', $string8);
echo "<br/>";

// ----------------------------------------
// 9. Write a PHP script to find the first character that is different between two strings. String1 : 'football' String2 : 'footboll' Expected Result : First difference between two strings at position 5: "a" vs "o"
$string9a = 'football';
$string9b = 'footboll';
echo "<br/>";

// ----------------------------------------
// 10. Write a PHP script to put a string in an array. Sample strings : "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky."; Expected Result (using var_dump()) : array(4) { [0]=> string(30) "Twinkle, twinkle, little star," [1]=> string(26) "How I wonder what you are." [2]=> string(27) "Up above the world so high," [3]=> string(26) "Like a diamond in the sky." }
$string10 = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
// echo str_split($string10);
echo explode("\n", $string10);
echo "<br/>";

// ----------------------------------------
// 11. Write a PHP script to print the next character of a specific character. Sample character : 'a' Expected Output : 'b' Sample character : 'z' Expected Output : 'a'
$string11 = "a";
echo (++$string11); //there is another method by convert the letter to binary then adding 1
echo "<br/>";

// ----------------------------------------
// 12. Write a PHP script to remove a part of a string from the beginning. Sample string : 'orange@example.com' Expected Output : 'example.com'
$string12 = "orange@example.com";
echo trim($string12, 'orange');
echo "<br/>";

// ----------------------------------------
// 13. Write a PHP script to insert a string at the specified position in a given string. Original String : 'The brown fox' Insert 'quick' between 'The' and 'brown'. Expected Output : 'The quick brown fox'
$string13 = "The brown fox";
echo substr_replace($string13, "quick ", 4, 0);
echo "<br/>";

// ----------------------------------------
// 14. Write a PHP script to get the first word of a sentence. Original String : 'The quick brown fox' Expected Output : 'The'
$string14 = "The quick brown fox";
echo trim($string14, ' quick brown fox');
echo "<br/>";

// ----------------------------------------
// 15. Write a PHP script to remove all leading zeroes from a string. Original String : '000547023.24' Expected Output : '547023.24'
$string15 = "000547023.24";
echo ltrim($string15,'0');
echo "<br/>";

// ----------------------------------------
// 16. Write a PHP script to remove part of a string. Original String : 'The quick brown fox jumps over the lazy dog' Remove 'fox' from the above string. Expected Output : 'The quick brown jumps over the lazy dog'
$string16 = "The quick brown fox jumps over the lazy dog";
echo substr_replace($string16 , "The quick brown jumps over the lazy dog",0);
echo "<br/>";
// echo strtr($string16, 'fox', '   ');
echo str_replace("fox", " ", $string16); //another solution
echo "<br/>";

// ----------------------------------------
// 17. Write a PHP script to remove trailing slash from a string. Original String : 'The quick brown fox jumps over the lazy dog///' Expected Output : 'The quick brown fox jumps over the lazy dog'
$string17 = "The quick brown fox jumps over the lazy dog///";
echo rtrim($string17, "///");
echo "<br/>";

// ----------------------------------------
// 18. Write a PHP script to get the characters after the last '/' in an url. Sample URL : 'http://www.example.com/5478631' Expected Output : '5478631'
$string18 = "http://www.example.com/5478631";
// echo substr($string18, );
echo "<br/>";

// ----------------------------------------
// 19. Write a PHP script to replace Special characters from the following string. Sample String : '"\1+2/32:2-3/43' Expected Output : '1 2 3 2 2 3 4 3'
$string19 = "'1+2/32:2-3/43" ;
echo strtr($string19, '+/:-', '      ');
echo "<br/>";

// ----------------------------------------
// 20. Write a PHP script to select first 5 words from the following string. Sample String : 'The quick brown fox jumps over the lazy dog' Expected Output : 'The quick brown fox jumps'
$string20 = "The quick brown fox jumps over the lazy dog";
// echo 
echo "<br/>";

// 21. Write a PHP script to remove comma(s) from the following numeric string. Sample String : '2,543.12' Expected Output : 2543.12
$string21 = "2,543.12";
echo str_replace( ',', '', $string21);
echo "<br/>";

// ----------------------------------------
// 21. Write a PHP script to print letters from 'a' to 'z'.
$string22 = "a";
for($string22 ; $string22<"z"; $string22++){
    echo $string22;
};
echo "<br/>";

// ----------------------------------------
?>



