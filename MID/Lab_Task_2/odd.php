<!DOCTYPE html>
<html>
    

<head>
     <title>Student Registration Form </title>

<style>

    body {
         background: #f3f6fc;
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
            background: #fff;
            border-radius: 11px;
            border: 1px solid;
            width: 440px;
            max-width: 90vw;
            margin: 45px auto 30px auto; 
            padding: 25px 30px;
            box-sizing: border-box;
            text-align: center;
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
    


<form> 
    <h2>Student Registration </h2>
<fieldset>
Full Name:<br>
<input type="text"><br>

Email:<br>
<input type="email"> <br>

Password:<br>
<input type="password"> <br>

Confirm Password:<br>
<input type="password"> <br>

<button type="submit"> Register </button>
</fieldset>
</form>

<form>

<fieldset>
<h2>Course Registration </h2>
Course name:<br>
<input type="text"><br>
<button> Add Course </button>
</fieldset>
</form>

</body>

</html>


