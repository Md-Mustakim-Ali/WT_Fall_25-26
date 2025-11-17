<!DOCTYPE html>
<html>
    

<head>
     <title>Student Registration Form </title>

<style>

    

    body {
         background: #d2d5ffff;
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
        }

        button {
            padding: 8px 16px;
            border-radius: 4px;
            border: none;
            background: #1976d2;
            color: #fff;
            font-size: 1rem;
            margin-top: 8px;
        }

        .success-box {
            background: #d4edda;
            border: 1px solid #c3e6cb;
            padding: 15px;
            border-radius: 5px;
            margin-top: 15px;
        }


      #error {
            color: red;
            margin-top: 10px;
            font-size: 14px;
        }

    .courseItem {
        background: #f1f1f1;
        border: 1px solid #ccc;
        padding: 8px;
        margin-top: 5px;
        border-radius: 4px;
    }

    .deleteButton {
        background: #ff4d4d;
        border: none;
        color: white;
        padding: 4px 8px;
        border-radius: 4px;
        float: right;
        
        
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
<div id="error"></div>
</fieldset>
</form>



<form id="courseForm">
<fieldset>
<h2>Course Registration </h2>
Course name:<br>
<input type="text" id="courseName"><br>
<button id="addCourseButton" type="button"> Add Course </button>
<p class="courseItem">
    Web Technology
    <button class="deleteButton" type="button">Delete</button>
</p>
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
    var errorDiv = document.getElementById("error");

    resultDiv.innerHTML=""; 

    if(fullname=="" || email=="" || password=="" || confirmPassword==""){
        resultDiv.innerHTML="<p style='color:red;'> Please fill in all fields. </p>";
        return false;
    }

    if(password!==confirmPassword){
        resultDiv.innerHTML="<p style='color:red;'> Passwords do not match. </p>";
        return false;
    }

    resultDiv.innerHTML = `
        <div class="success-box">
            <strong>Registration Successful!</strong><br><br>
            <b>Name:</b> ${fullname}<br>
            <b>Email:</b> ${email}
        </div>
    `;

    return false;
};


document.getElementById("courseForm").onsubmit=function(){
    var courseName=document.getElementById("courseName").value.trim();
    var courseListDiv=document.getElementById("courseList");
};

</script>



</body>

</html>


