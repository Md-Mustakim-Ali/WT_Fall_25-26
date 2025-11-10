<!DOCTYPE html>
<html>

<head>
    <title>
        Student Registration
</title>
</head>


<body>
 
<style>
    
 h1{
    color:red
 }

 h2{
    color:red
 }
    fieldset{
        background-color: #FFFFE0;
        width:500px;
        height:auto;
        padding:20px;
        margin:auto;
    }
    
    h3{
        color:red
    }
    body{
        background-color:lightgrey;
    }

    
</style>

<center><h1> <u>  Student Registration Information </u></h1></center>

 <fieldset>

 First Name:<br>
<input type="text"><br><br>

Last Name:<br>
<input type="text"><br><br> 

Student Id:<br>
<input type="text"><br><br> 

Program/Major:<br>
<input type="text"><br><br> 
 
Department: <br>
<select>
    <option>BSC CSE </option>
    <option>BSC EEE </option>
    <option>BSC Textile </option>
    <option>BBA </option>
    <option>LAW </option>
    <option>BA ENGLISH </option>
</select> <br> <br>

Phone: <br>
<input type="number"><br><br>


Uni Email: <br>
<input type="email"><br><br>

Create Password: <br>
<input type="password"><br><br>

Confirm Password: <br>
<input type="password"><br><br>

<h3>Semester Selection: </h3>
<input type="radio" name="Semester">Summer 2024
<input type="radio" name="Semester">Fall 2024
<input type="radio" name= "Semester">Spring 2024
<input type="radio" name="Semester">Other/Special Term  <br><br>


Requested Credit Load(Max 15): <br>
<input type="number"><br> <br>
<input type="checkbox">I require academic advisng before Final Registration <br> <br>

<h2> <u>Course Selection </u> </h2>
<input type="checkbox">Math 1201 (Calculas I)
<input type="checkbox">CS 2105 (Data Structures) 
<input type="checkbox">Econ 1001 (Microeconomics)
<input type="checkbox">Physics 1102 (Physics Lab) <br> <br>

Comments/Special Requests: <br>
<textarea rows="6" cols="50"> </textarea> <br> <br>

 
<input type="submit">

</fieldset>

</body>

</html>
