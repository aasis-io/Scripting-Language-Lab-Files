<?php
if (isset($_POST['submit'])) {
    echo "The input form details are:";
    echo "<br>";
    echo $_POST['name'];
    echo "<br>";
    echo $_POST['email'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="name">Name: </label> <input type="text" name="name">
        <br>
        <label for="email">Email: </label><input type="email" name="email">
        <br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>

</html>

<!-- 7. write a program to handle form using POST method. -->