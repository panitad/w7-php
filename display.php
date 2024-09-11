<?php
    $num = $_POST['number'];
    $name = $_POST['name'];
    $class = $_POST['class'];
    $ge = $_POST['gender'];
    switch ($ge) {
        case 1:
            $genn = "ชาย";
        break;
        case 2:
            $genn = "หญิง";
        break;
        default:
            $genn = "อื่นๆ";
    }
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ปณิทัศน์-24</title>
    <link href="https://bootswatch.com/5/darkly/bootstrap.css" rel="stylesheet">
</head>

<body>
    <div class="container mb-5 py-3">
        <form>
            <h2>ข้อมูลคุณ</h2>
                <p class="mb-2">ชื่อ: <?php echo $name;?></p>
                <p class="mb-2">ชั้น: <?php echo $class;?></p>
                <p class="mb-2">เลขที่: <?php echo $num;?></p>
                <p class="mb-2">เพศ: <?php echo $genn;?></p>
            <a href="index.php" class="btn btn-primary">กลับหน้าแรก</a>
        </form>
    </div>
</body>

</html>
