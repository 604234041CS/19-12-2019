<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title> ข้อมูลนักศึกษา </title>
	
</head>
<body>
<form action ="student2.php" method="POST" >
<h1>ข้อมูลนักศึกษา</h1><br/>
<strong>ชื่อ: </strong>
<input type= "text" name ="fname"><br/>
<strong>นามสกุล: </strong>
<input type= "text" name ="lname"><br/>

<br/>
<strong>เพศ</strong>
<input type="radio"  name = "sex" value= "ชาย" checked >ชาย
<input type="radio"  name = "sex" value= "หญิง">หญิง
<br/>
<strong>ความคิดเห็น</strong><br/>
<textarea name="comment" rows="5"></textarea>
<br/>
<strong>จังหวัด</strong>
<select name ="prov">
<option type value= "สงขลา">สงขลา</option>
<option type value= "ยะลา">ยะลา</option>
<option type value= "พัทลุง">พัทลุง</option>
</select>
<br/>
<strong>งานอดเรก</strong>
<input type="checkbox"  name = "work[]" value= "อ่านหนังสือ">อ่านหนังสือ<br/>
<input type="checkbox"  name = "work[]" value= "ทำสวน">ทำสวน<br/>
<input type="checkbox"  name = "work[]" value= "ช๊อปปิ๊ง">ช๊อปปิ๊ง
<br/>

<input type="submit" text="submit">
</form>
</body>
</html>

