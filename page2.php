<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Registration From</title>
</head>
<body>
<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$Country = $_POST['Country'];
$sex = $_POST['sex'];
$car = $_POST['car'];
$comment = $_POST['comment'];
?>	
First Name: <?= $fname ?><br/>
Last Name: <?= $lname ?><br/>
Country: <?= $Country ?><br/>
sex: <?= $sex ?><br/>
car:
<?php
    foreach($car as $selacted){
        echo $selacted."";
    }
?><br/>
comment: <?= $comment ?><br/>
</body>

</html>
