<?php

$action = "login";

switch ($action) {
    case "login":
        echo "Performing login action...";
        break;
    case "register":
        echo "Performing register action...";
        break;
    case "logout":
        echo "Performing logout action...";
        break;
    case "view_profile":
        echo "Viewing user profile...";
        break;
    default:
        echo "Unknown action.";
}
?>
<!-- 2. write a program using PHP switch statement -->