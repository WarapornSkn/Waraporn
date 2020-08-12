<?php
include_once 'Connection.php';
if(count($_POST)>0) {
$sql = mysqli_query($conn,"UPDATE user set user_id='" . $_POST['user_id'] . "', user_name='" . $_POST['user_name'] . "', user_age='" . $_POST['user_age'] . "', user_weight='" . $_POST['user_weight'] . "' ,user_height='" . $_POST['user_height'] . "',user_food='" . $_POST['user_food'] . "',user_date='" . $_POST['user_date'] . "' WHERE user_id='" . $_POST['user_id'] . "'");
header("Location:View.php?");
}
$result = mysqli_query($conn,"SELECT * FROM user WHERE user_id='" . $_GET['user_id'] . "'");
$row= mysqli_fetch_assoc($result);
?>
<html>
<head>
<title>Update User Data</title>
</head>
<body>
<form method="post" action="">

ชื่อ : 
<input type="hidden" name="user_id" class="txtField" value="<?php echo $row['user_id']; ?>">
<input type="text" name="user_name"  value="<?php echo $row['user_name']; ?>">
    อายุ : <input type="number" name="user_age"  value="<?php echo $row['user_age']; ?>"><br><br>
    น้ำหนัก : <input type="text" name="user_weight" value="<?php echo $row['user_weight']; ?>">
    ส่วนสูง : <input type="text" name="user_height" value="<?php echo $row['user_height']; ?>"><br><br>   
    อาหารที่รับประทาน : <input type="textareal" name="user_food" value="<?php echo $row['user_food'];?>"><br>
    วันที่ : <input type=date name="user_date" value="<?php echo $row['user_date']; ?>"><br>
    <input type = "submit" value ="บันทึก"><br><br>
</form>
</body>
</html>