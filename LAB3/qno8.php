<?php
// Specify the file path
$file_path = 'test.txt';

// Check if the file exists
if (file_exists($file_path)) {
    // Read the file content
    $file_content = file_get_contents($file_path);

    // Display the content
    echo nl2br($file_content); // nl2br() function adds HTML line breaks before all newlines in a string
} else {
    // If the file does not exist, display an error message
    echo "File not found.";
}
?>


<!-- 8. Write a PHP program to read a file and display the content using PHP. -->