<?php
echo "<h1>Task 1</h1>";
//phpinfo();
echo "<hr>";
echo "<h1>Task 2</h1>";

echo "Tomorrow I'll learn PHP global variables.";
echo "<br>";
echo "This is a bad command: del c:*. *";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<hr>
<h1>task3</h1>
    <form action="taskDay1.php" method="post">
        <input type="text" name="name" placeholder="Enter your name">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        echo $name;
    }
    echo "<hr>";
    echo "<h1>task4</h1>";
    echo $_SERVER['REMOTE_ADDR'];
    echo "<hr>";
    echo "<h1>task5</h1>";
    print_r($_SERVER['PHP_SELF']);
    echo "<hr>";
    echo "<h1>task6</h1>";
    print_r(parse_url("https://www.w3schools.com/php/default.asp"));
    echo "<hr>";
    echo "<h1>task6</h1>";
   // header("Location: https://www.w3schools.com/");
?>