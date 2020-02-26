<!DOCTYPE HTML>  
<html>
<head>
<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="css/global.css">
	<link rel="stylesheet" type="text/css" href="css/RegistrationComplete.php">
</head>
<body>  
<h2>REGISTRATION FOR MS.CALUAG</h2>

<form action ="RegistrationComplete.php"  method="post" >  
  First Name: <input type="text" name="fname" required>
  <br><br>
  Last Name: <input type="text" name="lname" required>
  <br><br>
  Middle Name: <input type="text" name="mname"required>
  <br><br>
  Address: <input type="text" name="address"required>
  <br><br>
  Date of Birth: <input type="date" name="dob"required value="2020-01-01">
  <br><br>
  Place of Birth: <input type="text" name="pob"required>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female" checked>Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  Guardian: <input type="text" name="guardian"required>
  <br><br>
  Contact Number: <input type="text" name="contact"required value="+63">
  <br><br>
  Civil Status<input type="text"  name="civilstatus" required>
  <br><br>
  <select  name="yearlevel">
  <option >1st year</option>
  <option >2nd year</option>
  <option >3rd year</option>
  <option >4th year</option>
  </select><br>
  <select  name="course">
  <option >BS-IT</option>
  <option >CPE</option>
  <option >TCM</option>
</select><br>
School year: <input type="text" name="schoolyear"required>
  <br><br>
  <input type="submit" name="submit"   value="Submit">  
</form>



</body>
</html>