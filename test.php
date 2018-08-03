<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?
        include("dbconnect.php");
    
    $ID = mysqli_real_escape_string($con, $_GET['ID']);
    $PASSWARD = mysqli_real_escape_string($con, $_GET['PASSWARD']);
    $NAME = mysqli_real_escape_string($con, $_GET['NAME']);
    $AGE = mysqli_real_escape_string($con, $_GET['AGE']);
    $PHONE = mysqli_real_escape_string($con, $_GET['PHONE']);
    $MEDICAL = mysqli_real_escape_string($con, $_GET['MEDICAL']);
    &$GENDER = mysqli_real_escape_string($con, $_GET['GENDER']);
    $ADDRESS = mysqli_real_escape_string($con, $_GET['ADDRESS']);

    echo $ID.'<br>';
    echo $PASSWARD.'<br>';
    echo $NAME.'<br>';     
    echo $AGE.'<br>';
    
//     $query="INSERT INTO `cartlist`(`name`, `produect`, `price`, `cnt`) VALUES ($name,$product,$price,$cnt)";
//    $result = mysqli_query($con, $query);
//    
//    echo "들어가라";
    
    $sql ="INSERT INTO `test1`(`id`, `pw`, `name`, `age`, `phone`, `medlcal`, `gender`, `address`) VALUES ('$ID','$PASSWARD','$NAME','$AGE','$PHONE','$MEDICAL','$GENDER','$ADDRESS')";

    if($con->query($sql)){
        echo '성공적으로 저장되었습니다.';
//        echo '<script>alert("성공적으로 담겼습니다.");</script>';
//        echo '<script>history.go(-1);</script>';
    }else{
        echo '실패';
    }
    ?>
</body>

</html>
