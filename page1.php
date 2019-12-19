<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title> Registration From</title>
	
</head>
<body>
<form action ="page2.php" method="POST" >
<h1>Registration From</h1><br/>
<strong>FirstName: </strong>
<input type= "text" name ="fname"><br/>
<strong>LastName: </strong>
<input type= "text" name ="lname"><br/>
<strong>Country</strong>
<select name ="Country">
<option type value= "TH">THAILAND</option>
<option type value= "THP">THAIPE</option>
</select>
<br/>
<strong>Sex</strong>
<input type="radio"  name = "sex" value= "male" checked >male
<input type="radio"  name = "sex" value= "female">female
<br/>
<strong>Your car</strong>
<input type="checkbox"  name = "car[]" value= "Toyota">Toyota
<input type="checkbox"  name = "car[]" value= "Honda">Honda
<br/>
<strong>Comment</strong><br/>
<textarea name="comment" rows="15"></textarea>
<br/>
<input type="submit" text="submit">
</form>
</body>
</html>

