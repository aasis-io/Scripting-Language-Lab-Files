<?php
// Method 1: Include Statement
include 'included_file.php';
echo "Included using include statement: $v\n";

// Method 2: Require Statement
require 'required_file.php';
echo "Included using require statement: $v\n";

// Method 3: Include Once
include_once 'included_once_file.php';
echo "Included using include_once statement: $v\n";

// Method 4: Require Once
require_once 'required_once_file.php';
echo "Included using require_once statement: $v\n";

// Method 5: Using File Paths
include 'subfolder/another_included_file.php';
echo "Included using file path: $v\n";


// Method 7: Autoloading Classes
spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.class.php';
});

class MyClass
{
    public function getMessage()
    {
        return "Hello World";
    }
}

$obj = new MyClass();
echo "Class autoloading: " . $obj->getMessage() . "\n";


?>


<!-- Demonstrate different way of including file in php. -->