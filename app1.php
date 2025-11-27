<?php
// กำหนดตัวแปรข้อมูล
$university = "มหาวิทยาลัยตัวอย่าง";
$faculty = "คณะวิทยาการคอมพิวเตอร์";
$major = "สาขาเทคโนโลยีสารสนเทศ";
$student_name = "ไพรัตน์ หลวงจุมพล";
$bio = "สวัสดีครับ ผมเป็นนักศึกษาที่ชอบการเขียนโปรแกรม และสนใจด้านเว็บเทคโนโลยี";
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แนะนำตัวนักศึกษา</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f3f3;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 60%;
            margin: 40px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .info {
            font-size: 18px;
            line-height: 1.8;
            margin-top: 20px;
        }
        .info span {
            font-weight: bold;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>ข้อมูลแนะนำตัวนักศึกษา</h1>
        <div class="info">
            <p><span>มหาวิทยาลัย:</span> <?php echo $university; ?></p>
            <p><span>คณะ:</span> <?php echo $faculty; ?></p>
            <p><span>สาขา:</span> <?php echo $major; ?></p>
            <p><span>ชื่อ-นามสกุล:</span> <?php echo $student_name; ?></p>
            <p><span>ข้อมูลแนะนำตัว:</span> <?php echo $bio; ?></p>
        </div>
    </div>
</body>
</html>
