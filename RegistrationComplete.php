
<?php 
    function isEmpty($mname, $address, $guardian, $civilstatus, $schoolyear){
        return trim(strlen($mname) > 0) && trim(strlen($address) > 0) && trim(strlen($guardian) > 0) && trim(strlen($civilstatus) > 0) && trim(strlen($schoolyear) > 0);
    }
    function isNumberValid($contact){
        return preg_match_all('/(^\+?63(?!.*-.*-)(?!.*\+.*\+)(?:\d(?:-)?){10}$)|(^09(?!.*-.*-)(?!.*-.*-)(?:\d(?:-)?){9}$)/', $contact);
    }
    function isNameValid($fname, $lname) {
        return trim(strlen($fname) > 1) && trim(strlen($lname));
    }
?>


<?php 
	

	$fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mname = $_POST['mname'];
    $address = $_POST['address'];
    $dob= $_POST['dob'];
    $pob = $_POST['pob'];
    $gender = $_POST['gender'];
    $guardian = $_POST['guardian'];
    $contact = $_POST['contact'];
    $civilstatus = $_POST['civilstatus'];
    $yearlevel = $_POST['yearlevel'];
    $course = $_POST['course'];
    $schoolyear = $_POST['schoolyear'];

    if (!isEmpty($mname, $address, $guardian, $civilstatus, $schoolyear)) {
    	echo "Input field<br>";
    	echo '<a href="index.php">Go Back</a>';
    }
    else if (!isNameValid($fname, $lname)) {
    	echo "Firstname and Lastname must be greater than 1<br>";  
    	echo '<a href="index.php">Go Back</a>';
    }
    else if (!isNumberValid($contact)) {
    	echo "Invalid Number<br>";
    	echo '<a href="index.php">Go Back</a>';
    }
    else
        echo "Name: $lname, $fname $mname <br>";
        echo "Address: $address <br>";
        echo "Date of Birth: $dob<br>";
        echo "Date of Birth: $pob<br>";
        echo "Gender: $gender<br>";
        echo "Guardian: $guardian<br>";
        echo "Contact No.: $contact<br>";
        echo "Civil Status: $civilstatus<br>";
        echo "Year Level: $yearlevel<br>";
        echo "Course: $course<br>";
        echo "School Year: $schoolyear<br>";
?>
