<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ค่าดัชนีมวลกาย</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <div class="container">
        <form action="calculate.php" method="POST" >
            <div>
                <h2>ค่าดัชนีมวลกาย</h2>
            </div>
            <div class="form-group">
                <h3>น้ำหนัก</h3>
                <input type="" name="weight" placeholder="(kg.)">
                <h3>ส่วนสูง</h3>
                <input type="" name="height" placeholder="(cm.)">
            </div>
            <button class="btn btn-primary btn-lg" type="submit" name="button" id="button" value="คำนวน" >คำนวณ</button>
        </form>
    </div>
</body>
</html>