<?
    include("../dbconnect.php");

    $idx = $_GET['idx'];

    echo $idx;

    $query = "delete from cartlist where idx like '$idx'";
    $result = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<script>
    alert('삭제되었습니다.');
    history.back(-1);
</script>
<body>
    
</body>
</html>