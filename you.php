<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>ทดสอบ array (Index array)</h1>
    <?php
    $cars = array("Volvo", "BMW", "Toyota");
    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
    ?>

    <h1>ทดสอบ array (Associative array)</h1>
    <?php
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43","Ton"=>"19");

    echo "Peter is " . $age['Peter']. " years old.<br>";
    echo "Ben is "   . $age['Ben']  . " years old.<br>";
    echo "Joe is "   . $age['Joe']  . " years old.<br>";
    echo "Ton is "   . $age['Ton']  . " years old.<br>";
    ?>

    <h1>การใช้ for กับ Index array (แบบที่ 1)</h1>
    <?php
    $fruits = array("แอปเปิ้ล", "มะละกอ", "ส้ม");
    $arrlen = count($fruits);

    for($x = 0; $x < $arrlen; $x++){
        echo $fruits[$x] . "<br>";
    }
    ?>

    <h1>การใช้ foreach กับ Index array (แบบที่ 2)</h1>
    <?php
    $fruits = array("แอปเปิ้ล", "มะละกอ", "ส้ม");

    foreach ($fruits as $value) {
        echo $value . "<br>";
    }
    ?>

    <h1>Array แบบ 2 มิติ (Two-dimension Array)</h1>
    <?php
    $cars = array(
        array("Volvo", 22, 18),
        array("BMW", 15, 13),
        array("Saab", 5, 2),
        array("Land Rover", 17, 15)
    );

    echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2]."<br>";
    echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2]."<br>";
    echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2]."<br>";
    echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2]."<br>";
    ?>

</body>
</html>
