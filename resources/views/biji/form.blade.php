<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="welcome.html">
    
<h1>Buat Account Baru!</h1>
<h3>Sign Up Form</h3>

<label for ="firstname">First Name:</label>
<br><br>
<input type="text" name="firstname" id="firstname">
<br><br>
<label for="lastname">Last Name:</label>
<br><br>
<input type="text" name="lastname" id="lastname">

<br><br>
<!--HTML FORM Radio Button-->
Gender:<br><br>
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label><br>
    <input type="radio" id="other" name="gender" value="other">
    <label for="other">Other</label>
<br><br>

<!--HTML FORM Select Elements drop-down list-->
Nationaly:<br><br>
<select id="nationaly" name="nationaly">
    <option value="Indonesian">Indonesian</option>
    <option value="Kagakeliatangambarnya">Kagakeliatangambarnya</option>
</select>

<br><br>
<!--HTML FORM CheckBoxes-->
Language Spoken:<br><br>
    <input type="checkbox" id="b1" name="b1" value="Bahasa Indonesia">
    <label for="vehicle1"> I have a bike</label><br>
    <input type="checkbox" id="b2" name="b2" value="English">
    <label for="vehicle2"> I have a car</label><br>
    <input type="checkbox" id="b3" name="b3" value="Other">
    <label for="vehicle3"> I have a boat</label><br><br>

<!--HTML FORM The textarea element-->
Bio:
<br><br>
<textarea id="txtarea1" name="text area1" rows="7" cols="25">
 
</textarea><br>
<input type="submit" value="Sign Up">

</form>
</body>
</html>