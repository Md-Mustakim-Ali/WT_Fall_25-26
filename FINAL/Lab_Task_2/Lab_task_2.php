<!DOCTYPE html>
<html>

<head>
<title> REGISTRATION FORM </title>    
</head>    

<body> 

<h2>Registration </h2>

<?php

$name="";
$nameError="";
$email="";
$emailError="";
$dd="";
$mm="";
$yyyy="";
$dobError="";
$gender="";
$genderError="";
$degree="";
$degreeError="";
$blood="";
$bloodError="";

//name
if (empty($_POST["name"])){
    $nameError="Name is required";
}
else{
    $name=test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)){
        $nameError="Only letters and white space allowed";
    }
}


//email
if(empty($_POST["email"])){
    $emailError="Email is required";
}
else{
    $email=test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $emailError="Invalid email format";
    }
}


//dob
   if (empty($_POST["dd"]) || empty($_POST["mm"]) || empty($_POST["yyyy"])) {
        $dobError = "Date of birth is required";
    } else {
        $dd= test_input($_POST["dd"]);
        $mm= test_input($_POST["mm"]);
        $yyyy=test_input($_POST["yyyy"]);

        if ($dd < 1 || $dd > 31 || $mm < 1 || $mm > 12 || $yyyy < 1950 || $yyyy > 2025) {
            $dobError = "Invalid date (dd:1–31, mm:1–12, yyyy:1950–2025)";
        }
    }



//gender
    if (empty($_POST["gender"])) {
        $genderError = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }



//degree
if (empty($_POST["degree"])){
    $degreeError="Degree is required";
}
else{
    $degree=test_input($_POST["degree"]);
}

//blood
    if (empty($_POST["blood"])) {
        $bloodError = "Blood group is required";
    } else {
        $blood = test_input($_POST["blood"]);
    }
  
    function test_input($data) {
    $data = trim($data);
    return $data;
    }


?>


<form method="post" action="">
    
Name:
<input type="text" name="name" value="<?php echo $name; ?>">
<br> <br>

Email:
<input type="text" name="email" value="<?php echo $email; ?>">
<br> <br>

Date of Birth:
<input type="number" name="dd" value="<?php echo $dd; ?>"> /
<input type="number" name="mm"  value="<?php echo $mm; ?>"> /
<input type="number" name="yyyy" value="<?php echo $yyyy; ?>">
<br> <br>

Gender:
<input type="radio" name="gender" value="Male"   <?php if ($gender=="Male")   echo "checked"; ?>> Male
<input type="radio" name="gender" value="Female" <?php if ($gender=="Female") echo "checked"; ?>> Female
<input type="radio" name="gender" value="Other"  <?php if ($gender=="Other")  echo "checked"; ?>> Other
<br> <br>

Degree:
<input type="checkbox" name="degree" value="BBA"   <?php if ($degree=="SSC")   echo "checked"; ?>> BBA
<input type="checkbox" name="degree" value="MBA"   <?php if ($degree=="HSC")   echo "checked"; ?>> MBA
<input type="checkbox" name="degree" value="BSc"   <?php if ($degree=="BSc")   echo "checked"; ?>> BSc
<input type="checkbox" name="degree" value="MSc"   <?php if ($degree=="MSc")   echo "checked"; ?>> MSc
<input type="checkbox" name="degree" value="PhD"   <?php if ($degree=="PhD")   echo "checked"; ?>> PhD
<br> <br>

Blood Group:
<select name="blood">
    <option value="A+"  <?php if ($blood=="A+")  echo "selected"; ?>>A+</option>
    <option value="A-"  <?php if ($blood=="A-")  echo "selected"; ?>>A-</option>
    <option value="B+"  <?php if ($blood=="B+")  echo "selected"; ?>>B+</option>
    <option value="B-"  <?php if ($blood=="B-")  echo "selected"; ?>>B-</option>
    <option value="O+"  <?php if ($blood=="O+")  echo "selected"; ?>>O+</option>
    <option value="O-"  <?php if ($blood=="O-")  echo "selected"; ?>>O-</option>
    <option value="AB+" <?php if ($blood=="AB+") echo "selected"; ?>>AB+</option>
    <option value="AB-" <?php if ($blood=="AB-") echo "selected"; ?>>AB-</option> 
</select>

<br> <br>
<input type="submit" value="Submit">

</form>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($nameErr) &&empty($emailErr) && empty($dobErr) && empty($genderErr) && empty($degreeErr) &&empty($bloodErr)) {

    echo "<h3>Your Input:</h3>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Date of Birth: " . $dd . "-" . $mm . "-" . $yyyy . "<br>";
    echo "Gender: " . $gender . "<br>";
    echo "Degree: " . $degree . "<br>";
    echo "Blood Group: " . $blood . "<br>";
}
?>


</body>

</html>

