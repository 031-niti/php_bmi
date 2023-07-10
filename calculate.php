<?php
    include_once 'person.php';
    $weight=$_POST['weight'];
    $height=$_POST ['height'] ;
    $bmiCal = new Person($height , $weight);
    $result = $bmiCal -> getBMI();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ค่าดัชนีมวลกาย</title>
</head>

<body>
    <div>
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

    <h2>ค่าดัชนีมวลกายของคุณคือ :</h2>

    <b>BMI : </b><?php echo strval($result);?> bmi<br />
    <b>อยู่ในเกณท์ : </b><?php echo $c;?><br />
    <b>ภาวะเสี่ยงต่อโรค : </b><?php echo $s;?>  

    </div>
    </body>
</html>