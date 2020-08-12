<?php 
 include "Connection.php";
 if (isset($_POST['txtName']) && isset($_POST['numAge']) && isset($_POST['txtWeight']) 
    && isset($_POST['txtHeight']) && isset($_POST['chkFood']) && isset($_POST['setdate'])
    && isset($_POST['numTime1']) && isset($_POST['numTime2']) && isset($_POST['numTime3']) 
    && isset($_POST['numTime4']) && isset($_POST['numTime5'])){
     $userName = $_POST['txtName'];
     $userAge = $_POST['numAge'];
     $userWeight = $_POST['txtWeight'];
     $userHeight = $_POST['txtHeight'];
     $userFood = $_POST['chkFood'];
     $userDate = $_POST['setdate'];
     $userTime1 = $_POST['numTime1'];
     $userTime2 = $_POST['numTime2'];
     $userTime3 = $_POST['numTime3'];
     $userTime4 = $_POST['numTime4'];
     $userTime5 = $_POST['numTime5'];
     $f1 = $_POST['chkFood'][0];
     $f2 = $_POST['chkFood'][1];
     $f3 = $_POST['chkFood'][2];
     $f4 = $_POST['chkFood'][3];
     $f5 = $_POST['chkFood'][4];
     
     $food1 = "แกงจืดมะระยัดไส้";
     $food2 = "แกงส้ม";
     $food3 = "ขนมกล้วย";
     $food4 = "ขนมครก";
     $food5 = "ขนมจีนน้ำยา";
     $arrayFood = $f1.$f2.$f3.$f4.$f5;
     $userCalorie;

     if($arrayFood == $food1){  
        $userCalorie = 90*$userTime1;
        }elseif($arrayFood ==  $food2){
        $userCalorie = 28*$userTime2;
        }elseif($arrayFood ==  $food3){
        $userCalorie = 120*$userTime3;
        }elseif($arrayFood ==  $food4){
        $userCalorie = 92*$userTime4;
        }elseif($arrayFood ==  $food5){
        $userCalorie = 332*$userTime5;
        }elseif($arrayFood == $food1.$food2){
            $userCalorie = (90*$userTime1)+(28*$userTime2);
        }elseif($arrayFood == $food1.$food3){
            $userCalorie = (90*$userTime1)+(120*$userTime3);
        }elseif($arrayFood == $food1.$food4){
            $userCalorie = (90*$userTime1)+(92*$userTime4);
        }elseif($arrayFood == $food1.$food5){
            $userCalorie = (90*$userTime1)+(332*$userTime5);
        }elseif($arrayFood == $food2.$food3){
            $userCalorie = (28*$userTime2)+(120*$userTime3);
        }elseif($arrayFood == $food2.$food4){
            $userCalorie = (28*$userTime2)+(92*$userTime4);
        }elseif($arrayFood == $food2.$food5){
            $userCalorie = (28*$userTime2)+(332*$userTime5);
        }elseif($arrayFood == $food3.$food4){
            $userCalorie = (120*$userTime3)+(92*$userTime4);
        }elseif($arrayFood == $food3.$food5){
            $userCalorie = (120*$userTime3)+(332*$userTime5); 
        }elseif($arrayFood == $food4.$food5){
            $userCalorie = (92*$userTime4)+(332*$userTime5);
        }elseif($arrayFood == $food1.$food2.$food3){
            $userCalorie = (90*$userTime1)+(28*$userTime2)+(120*$userTime3);
        }elseif($arrayFood == $food1.$food2.$food4){
            $userCalorie = (90*$userTime1)+(28*$userTime2)+(92*$userTime4); 
        }elseif($arrayFood == $food1.$food2.$food5){
            $userCalorie = (90*$userTime1)+(28*$userTime2)+(332*$userTime5); 
        }elseif($arrayFood == $food1.$food3.$food4){
            $userCalorie = (90*$userTime1)+(120*$userTime3)+(92*$userTime4); 
        }elseif($arrayFood == $food1.$food3.$food5){
            $userCalorie = (90*$userTime1)+(120*$userTime3)+(332*$userTime5); 
        }elseif($arrayFood == $food1.$food4.$food5){
            $userCalorie = (90*$userTime1)+(92*$userTime4)+(332*$userTime5); 
        }elseif($arrayFood == $food2.$food3.$food4){
            $userCalorie = (28*$userTime2)+(120*$userTime3)+(92*$userTime4);
        }elseif($arrayFood == $food2.$food3.$food5){
            $userCalorie = (28*$userTime2)+(120*$userTime3)+(332*$userTime5);
        }elseif($arrayFood == $food2.$food4.$food5){
            $userCalorie = (28*$userTime2)+(92*$userTime4)+(332*$userTime5);
        }elseif($arrayFood == $food3.$food4.$food5){
            $userCalorie = (120*$userTime3)+(92*$userTime4)+(332*$userTime5);
        }elseif($arrayFood == $food1.$food2.$food3.$food4){
            $userCalorie = (90*$userTime1)+(28*$userTime2)+(120*$userTime3)+(92*$userTime4);
        }elseif($arrayFood == $food1.$food2.$food3.$food5){
            $userCalorie = (90*$userTime1)+(28*$userTime2)+(120*$userTime3)+(332*$userTime5); 
        }elseif($arrayFood == $food1.$food2.$food4.$food5){
            $userCalorie = (90*$userTime1)+(28*$userTime2)+(92*$userTime4)+(332*$userTime5);
        }elseif($arrayFood == $food1.$food3.$food4.$food5){
            $userCalorie = (90*$userTime1)+(120*$userTime3)+(92*$userTime4)+(332*$userTime5); 
        }elseif($arrayFood == $food2.$food3.$food4.$food5){
            $userCalorie = (28*$userTime2)+(120*$userTime3)+(92*$userTime4)+(332*$userTime5);
        }else{//เลือกทุกเมนู
            $userCalorie = (90*$userTime1)+(28*$userTime2)+(120*$userTime3)+(92*$userTime4)+(332*$userTime5);
         }
    
      }
        $sql = "insert into user(user_name,user_age,user_weight,user_height,user_food,user_date) 
        values('$userName','$userAge','$userWeight','$userHeight','$arrayFood','$userDate')";
        if(mysqli_query($conn,$sql)){
            header("Location:View.php?userCalorie=$userCalorie");
        }
 
 ?>