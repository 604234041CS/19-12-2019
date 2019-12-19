<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>ข้อมูลนักศึกษา</title>
</head>
<body>
<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$sex = $_POST['sex'];
$comment = $_POST['comment'];
$prov = $_POST['prov'];
$work = $_POST['work'];
?>	
ชื่อ: <?= $fname ?><br/>
นามสกุล: <?= $lname ?><br/>
เพศ: <?= $sex ?><br/>
ความคิดเห็น: <?= $comment ?><br/>
จังหวัด: <?= $prov ?><br/>
งานอดิเรก:
<?php
    foreach($work as $selacted){
        echo $selacted.",";
    }
?><br/>

</body>

</html>
