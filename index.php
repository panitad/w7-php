<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ปณิทัศน์-24</title>
    <link href="https://bootswatch.com/5/darkly/bootstrap.css">
</head>

<body>
    <div class="container mb-4 py-3">
        <form action="form.php" method="post">
        <h1 class="text-center">ข้อมูลส่วนตัว</h1>
        <div class="mb-2">
            <label class="form-label">ชื่อ - นามสกุล</label>
            <input type="text" class="form-control" name="name" value="นายปณิทัศน์ แซ่เจียม">
        </div>
        <div class="mb-2">
            <label class="form-label">ชั้น</label>
            <input type="text" class="form-control" name="class" value="ม.6/10">
        </div>
        <div class="mb-2">
            <label class="form-label">เลขที่</label>
            <input type="text" class="form-control" name="number" value="24">
        </div>
        <div class="mb-2">
            <label class="form-label">เพศ</label>
            <select class="form-select" name="gender">
                <option selected value="1">ชาย</option>
                <option value="2">หญิง</option>
                <option value="3">อื่น ๆ</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary px-4">ส่งข้อมูล</button>
        </form>
    </div>
</body>

</html>
