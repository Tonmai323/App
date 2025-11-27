<?php
// 1. ใช้ for วาดรูปดาวเพิ่มทีละแถว
echo "<h3>ใช้ Loop for</h3>";
for($i = 1; $i <= 4; $i++){
    for($j = 1; $j <= $i; $j++){
        echo "*";
    }
    echo "<br>";
}

// 2. ใช้ while วาดตัวเลขซ้ำกันในแต่ละแถว
echo "<h3>ใช้ Loop while</h3>";
$i = 1;
while($i <= 3){
    $j = 1;
    while($j <= 4){
        echo $i . " ";
        $j++;
    }
    echo "<br>";
    $i++;
}

// 3. ใช้ do while วาดตัวเลขแบบขั้นบันได
echo "<h3>ใช้ Loop do while</h3>";
$i = 1;
do{
    $j = 1;
    do{
        echo $i . " ";
        $j++;
    } while($j <= $i);
    echo "<br>";
    $i++;
} while($i <= 3);

// 4. กรอบล้อมดาวและตัวเลข
echo "<h3>กรอบล้อม (ใช้ for)</h3>";
$rows = 5;
$cols = 6;
for($i = 1; $i <= $rows; $i++){
    for($j = 1; $j <= $cols; $j++){
        if($i == 1 || $i == $rows){
            echo "* ";
        } else if($j == 1 || $j == $cols){
            echo "* ";
        } else {
            echo ($i - 1) . " ";
        }
    }
    echo "<br>";
}

// 5. ตัวเลขกลับด้าน
echo "<h3>ลำดับตัวเลขย้อนกลับ (ใช้ while)</h3>";
$i = 3;
while($i >= 1){
    $j = 1;
    while($j <= $i){
        echo $i . " ";
        $j++;
    }
    echo "<br>";
    $i--;
}
?>
