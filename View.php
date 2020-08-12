<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='View.html'></script>
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
tr:nth-child(even) {
  background-color: #EECA47;
}

/* Style the header */
header {
  background-color: #F09D14;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

article {
  float: left;
  text-align: center;
  padding: 20px;
  width: 100%;
  background-color: #f1f1f1;
  height: 600px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
</head>
<body>
<header>
   โปรแกรมคำนวณแคลอรี่
</header>
<article>
<form  action = "Manager.php" method = "post" >
    ชื่อ : <input type="text" name="txtName" id="txtName">
    อายุ : <input type="number" name="numAge" id="numAge"><br><br>
    น้ำหนัก : <input type="text" name="txtWeight" id="txtWeight">
    ส่วนสูง : <input type="text" name="txtHeight" id="txtHeight"><br><br>   
    <h3 style="color:red;">**หากต้องการเลือกอาหารที่รับประทาน กรุณากรอกจำนวนที่รับประทาน**</h3>
    อาหารที่รับประทาน :<br> 
            <input type="checkbox" name="chkFood[]" id="chkFood[]" value="แกงจืดมะระยัดไส้">แกงจืดมะระยัดไส้
                <input type="number" name="numTime1" id="numTime1"> ถ้วย <br>
            <input type="checkbox" name="chkFood[]" id="chkFood[]" value="แกงส้ม">แกงส้ม
                <input type="number" name="numTime2" id="numTime2"> ถ้วย <br>
            <input type="checkbox" name="chkFood[]" id="chkFood[]" value="ขนมกล้วย">ขนมกล้วย
                <input type="number" name="numTime3" id="numTime3"> ห่อ <br>
            <input type="checkbox" name="chkFood[]" id="chkFood[]" value="ขนมครก">ขนมครก
                <input type="number" name="numTime4" id="numTime4"> คู่ <br>
            <input type="checkbox" name="chkFood[]" id="chkFood[]" value="ขนมจีนน้ำยา">ขนมจีนน้ำยา
                <input type="number" name="numTime5" id="numTime5"> จาน <br>
    วันที่ : <input type=date name="setdate" id="setdate"><br>
               ปริมาณแคลอรี่ : <?php echo $_GET['userCalorie']?> แคลอรี่<br><br>
  
    <input type = "submit" value ="คำนวณ"><br><br>
</form>
<table style="width:90%">
    <?php
       include "Connection.php";
       $sqlC1 = "SELECT * FROM user";
       $resC1 = mysqli_query($conn,$sqlC1);
       if ($resC1){
           $num = 1;
        while (
            $row = mysqli_fetch_assoc($resC1)){?>
            <tr>
                <th>ลำดับ</th>
                <th>ชื่อ</th>
                <th>อายุ</th> 
                <th>น้ำหนัก</th> 
                <th>ส่วนสูง</th>
                <th>วันที่</th>  
                <th>ประเภทอาหาร</th> 
                <th>แก้ไข</th>
                <th>ลบ</th>
               
            </tr>
            <tr>
                <td>
                    <?php echo $row['user_id'];?>
                </td>
                <td>
                    <?php echo $row['user_name'];?>
                </td>
                <td>
                    <?php echo $row['user_age'];?>
                </td>
                <td>
                    <?php echo $row['user_weight'];?>
                </td>
                <td>
                    <?php echo $row['user_height'];?>
                </td>
                <td>
                    <?php echo $row['user_date'];?>
                </td>
                <td>
                    <?php echo $row['user_food'];?>
                </td>
                <td><a href="Update.php?user_id=<?php echo $row["user_id"]; ?>">Update</a></td>
                <td><a href="delete.php?user_id=<?php echo $row["user_id"]; ?>">Delete</a></td>
            </tr>
            <?php
            }
            }
        ?>
    </table>
    </article>

</body>
</html>