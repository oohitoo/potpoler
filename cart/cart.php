<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?
        include("../dbconnect.php");
    session_start();
    
    $name = $_SESSION['name'];
    $product = $_POST['product'];
    $cnt = $_POST['cnt'];
    $price = $_POST['price'];

    echo $name.'<br>';
    echo $product.'<br>';
    echo $price.'<br>';     
    echo $cnt.'<br>';
    
//     $query="INSERT INTO `cartlist`(`name`, `produect`, `price`, `cnt`) VALUES ($name,$product,$price,$cnt)";
//    $result = mysqli_query($con, $query);
//    
//    echo "들어가라";
    
    $sql ="INSERT INTO `cartlist`(`name`, `produect`, `price`, `cnt`) VALUES ('$name','$product','$price','$cnt')";

    if($con->query($sql)){
        echo '성공적으로 저장되었습니다.';
        echo '<script>alert("성공적으로 담겼습니다.");</script>';
        echo '<script>history.go(-1);</script>';
    }else{
        echo '실패';
    }
    ?>
</body>

</html>
