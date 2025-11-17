<!DOCTYPE html>
<html>
    

<head>
     <title>Student Registration Form </title>

<style>

    

    body {
         background: #969ad9ff;
        min-height: 100vh;
        }


        h2 {
            color: #0c0101ff;
            text-align: center;
        }

        form {
            margin-bottom: 35px;
        }

        fieldset {
            background: #ffffffff;
            border-radius: 11px;
            border: 1px solid;
            width: 440px;
            max-width: 90vw;
            margin: 45px auto 30px auto; 
            padding: 25px 30px;
            box-sizing: border-box;
            text-align: left;
        }

        input[type="text"], input[type="email"], input[type="password"] {
            width: 90%; 
            padding: 8px;
            margin: 5px 0 15px 0;
            border-radius: 4px;
            border: 1px solid #bbb;
            font-size: 1rem;
        }

        button {
            padding: 8px 16px;
            border-radius: 4px;
            border: none;
            background: #1976d2;
            color: #fff;
            font-size: 1rem;
            cursor: pointer;
            margin-top: 8px;
        }
</style>

</head>

<body>
    


<form id="registrationForm"> 
   
<fieldset>
<h2>Student Registration </h2>
Full Name:<br>
<input type="text" id="fullname"><br>

Email:<br>
<input type="email" id="email"> <br>

Password:<br>
<input type="password" id="password"> <br>

Confirm Password:<br>
<input type="password" id="confirmPassword"> <br>

<button type="submit"> Register </button>

<div id="registrationResult" > </div>
</fieldset>
</form>



<form id="courseForm">
<fieldset>
<h2>Course Registration </h2>
Course name:<br>
<input type="text" id="courseName"><br>
<button id="addCourseButton" type="button"> Add Course </button>
 <div id="courseList"></div>
</fieldset>
</form>


<script> 

document.getElementById("registrationForm").onsubmit=function(){

    var fullname=document.getElementById("fullname").value.trim();
    var email=document.getElementById("email").value.trim();
    var password=document.getElementById("password").value.trim();
    var confirmPassword = document.getElementById("confirmPassword").value.trim();
    var resultDiv=document.getElementById("registrationResult");



</script>


</body>

</html>


