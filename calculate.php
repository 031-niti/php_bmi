<?php
    include_once 'Body.php';
    $weight=$_POST['weight'];
    $height=$_POST ['height'] ;
    $bmiCal = new Body($height , $weight);
    $result = $bmiCal -> getBMI();
?>

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
    <?php
    if( $result<=18.50){
        $c="ผอม";
        $s="มากกว่าคนปกติ";
    }else if( $result>18.50 &&  $result<22.90){
        $c="ปกติ (สุขภาพดี)";   
        $s="เท่าคนปกติ";
    }else if( $result>23 &&  $result<24.90){
        $c="ท้วม";   
        $s="อันตรายระดับ 1";
    }else if( $result>25 &&  $result<29.90){
        $c="อ้วน";   
        $s="อันตรายระดับ 2";
    }else if( $result>30){
        $c="อ้วนมาก";
        $s="อันตรายระดับ 3";   
    }
    ?>

    <h2>ค่าดัชนีมวลกายของคุณคือ</h2>
    <div class="bmi">
        <b>BMI  </b><?php echo strval($result);?> bmi
        <b>อยู่ในเกณท์  </b><?php echo $c;?>
        <b>ภาวะเสี่ยงต่อโรค  </b><?php echo $s;?> 
    </div>
</div>
</body>
</html>