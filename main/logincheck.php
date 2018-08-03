<?
    include("../dbconnect.php");
    session_start();
?>
    <!DOCTYPE html>
    <html lang="ko">

    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>

    <body>
        <?
    $postid = $_POST['id'];
    $postpw = $_POST['pw'];
    
    $query = "select * from users where id = '$postid' and pw = '$postpw'";
    $result = mysqli_query($con, $query); 
    $row = mysqli_fetch_array($result); //id pw 확인 쿼리
        
    if($postid != null && $postpw != null){
        echo "둘다입력됨";
        
        if($postid==$row['id'] && $postpw==$row['pw']){ // id와 pw가 맞다면 login

   $_SESSION['id']=$row['id'];
   $_SESSION['name']=$row['name'];

            ?>
            <script type="text/javascript">
                location.href = 'main.php';
            </script>
            <?
        }else{ //DB 확인 후 아이디 또는 패스워드가 틀렸을경우
            ?>
            <script type="text/javascript">
                window.alert('아이디 또는 패스워드가 틀립니다.');
                history.back(1);
            </script>
            <?
        }
    }else if($postid != null){
        echo "pw가 입력안됨";
        ?>
        <script type="text/javascript">
            window.alert('pw가 입력되지 않았다.');
            history.back(1);
        </script>
        <?
    }else if($postpw != null){
        echo "id가 입력안됨";
        ?>
        <script type="text/javascript">
            window.alert('id가 입력되지 않았다.');
            history.back(1);
        </script>
        <?
    }else{
        echo "두개다 입력안됨";
        ?>
        <script type="text/javascript">
            window.alert('id pw 적었는지 확인 바랍니다.');
            history.back(1);
            
        </script>
        <?
    }
    ?>
    </body>

    </html>
