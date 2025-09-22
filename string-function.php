<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
/**
 * Course 221 - Web Development with PHP
 * Lesson: String Functions
 *
 * This lesson covers commonly used string functions in PHP
 */

echo "<h1>PHP String Functions</h1>";

/* ---------------------------------
 * String Length
 * strlen(string $str)
 * ---------------------------------
 * Returns the number of characters in a string
 */
$sample = "Hello World!";
echo "String: $sample <br>";
echo "Length of string: " . strlen($sample) . "<br><br>";

/* ---------------------------------
 * String Comparison
 * strcmp()  - case-sensitive comparison
 * strcasecmp() - case-insensitive comparison
 * ---------------------------------
 * Returns:
 * 0 if strings are equal
 * < 0 if first string is less than second
 * > 0 if first string is greater than second
 */
echo "strcmp('Hello', 'Hello'): " . strcmp("Hello", "Hello") . "<br>";
echo "strcmp('Hello', 'hello'): " . strcmp("Hello", "hello") . "<br>";
echo "strcasecmp('Hello', 'hello'): " . strcasecmp("Hello", "hello") . "<br><br>";

/* ---------------------------------
 * Cleaning Up Strings
 * trim(), ltrim(), rtrim()
 * ---------------------------------
 * Removes whitespace (or other characters) from start/end of a string
 */
$text = "   PHP is fun!   ";
echo "Original with spaces: '$text'<br>";
echo "After trim(): '" . trim($text) . "'<br>";
echo "After ltrim(): '" . ltrim($text) . "'<br>";
echo "After rtrim(): '" . rtrim($text) . "'<br><br>";

/* ---------------------------------
 * Substrings
 * substr(string $string, int $start, int $length)
 * ---------------------------------
 * Extracts part of a string
 */
$phrase = "Web Development with PHP";
echo "Original: $phrase <br>";
echo "substr(\$phrase, 0, 3): " . substr($phrase, 0, 3) . "<br>";  // "Web"
echo "substr(\$phrase, 4, 11): " . substr($phrase, 4, 11) . "<br>"; // "Development"
echo "substr(\$phrase, -3): " . substr($phrase, -3) . "<br><br>";   // "PHP"

/* ---------------------------------
 * String Position
 * strpos(string $haystack, string $needle)
 * ---------------------------------
 * Finds the position of the first occurrence of a substring
 */
$sentence = "I love PHP programming!";
echo "Sentence: $sentence <br>";
echo "Position of 'PHP': " . strpos($sentence, "PHP") . "<br><br>";

/* ---------------------------------
 * Replacing Strings
 * str_replace(search, replace, subject)
 * ---------------------------------
 * Replaces all occurrences of the search string with the replacement
 */
$message = "I like Java!";
echo "Before: $message <br>";
echo "After str_replace: " . str_replace("Java", "PHP", $message) . "<br><br>";

/* ---------------------------------
 * Splitting String
 * explode(delimiter, string)
 * ---------------------------------
 * Splits a string into an array
 */
$data = "apple,banana,cherry";
$fruits = explode(",", $data);
echo "Exploded string into array: <br>";
print_r($fruits);
echo "<br><br>";

/* ---------------------------------
 * Joining String
 * implode(delimiter, array)
 * ---------------------------------
 * Joins array elements into a single string
 */
$joined = implode(" | ", $fruits);
echo "Imploded array into string: $joined <br>";

?>

</body>
</html>