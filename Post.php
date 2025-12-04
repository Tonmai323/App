<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Request</title>
</head>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Name: <input type="text" name="fname"><br>
    Last Name: <input type="text" name="lname"><br>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];

    if (empty($fname) || empty($lname)) {
        echo "Name or Last Name is empty";
    } else {
        echo "Your full name is: " . $fname . " " . $lname;
    }
}
?>

</body>
</html>
