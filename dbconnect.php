<?php
    $con = mysqli_connect("localhost", "root","root","web");
    
   if(!$con){
       echo "실패";
   }else{
       echo "성공<br>";
   }

?>