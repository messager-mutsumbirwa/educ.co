

session_start();

$_SESSION['id'];


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>connexion </title>
</head>
<body>
<div class="menu">
	<div class="log"><img src="log.jpeg"></div>
	<div class="options">
	<ul >
	
		<li>
			<a href="#">Dashbord</a>
		</li>
		<li>
			<a href="#">Mycourses</a>
		</li>
		<li>
			<a href="#">Reports & Analytics</a>
		</li>
		<li>
			<a href="#">Support</a>
		</li>
		<li>
			<a href="#">Announcements</a>
		</li>
		<li>
			<a href="#">Training
		</a>
	</li>
</ul>
</div>

	
	<div class="fil"><img src="user-male.gif"></div>
	<div class="closh"><img src="bell.gif"></div>
</div>

<text><h2>SIGN UP HERE</h2></text>



	<form>

		<div class="dp"><img src="ajou.png">
			<input type="file" name=""></div>
		<div id="first">

<table>
  <tr>
    <th colspan="2">FILL THIS FORM TO SIGN UP</th>
  </tr>
  <tr>
    <td>NAME</td>
    <td><input type="text" name=""></td></td>
  
  </tr>
  
  <tr>
  	 <td>FAMILY NAME</td>
    <td><input type="text" name=""></td>
  </tr>
  <tr>
  	 <td> MAIL</td>
    <td> <input type="text" name=""></td>
  </tr>
  <tr>
  	 <td> COUNTRY OF BIRTHDAY:</td>
    <td><input type="text" name=""></td>
  </tr>
  <tr>
  	 <td>COURRENT COUNTRY</td>
    <td>
    	<select><ul>
    		<optgroup label="selecte">
    	
    		<option><li>CAMEROUN</li></option>
    		<option><li>TANZANIE</li></option>
    		<option><li>congo</li></option>
    		<option><li>RDC</li></option>
    		<option><li>ANGOLA</li></option>
    		<option><li>UGANDA</li></option>
    		</optgroup>


    </ul></select></td>
    <tr>
  	 <td> PASSWORD:</td>
    <td><input type="password" name=""> </td>
  </tr>
  </tr>
  
</table>

</div>

<div  class="sh" border="1">
	Choose your Faculty in that you want to apply for:
        <br>
        <input type="checkbox" 
               name="C" 
               value="yes">BACHELOR IN SCIENCE COMPUTER SCIENCE
        <br>
        <input type="checkbox" 
               name="C++" 
               value="yes">BACHELOR IN SCIENCE INFORMATION AND TECHNOLOGY
        <br>
        <input type="checkbox" 
               name="Java" 
               value="yes">BACHELOR OF SCIENCE OF SOFTWARE ENGINEERING
        <br>
        <input type="checkbox" 
               name="Python" 
               value="yes">BACHELOR IN TELECOMUNICATION
        <br>
</div>
<br>

Do you agree this statement? <a href="#">policy</a>
        <br>
        <input type="radio"
               name="agree" 
               value="yes">Yes
        <br>
        <input type="radio"
               name="agree" 
               value="no">No
        <br>
        <br>

        <input type="Submit" value="Register">
    </form>

</form>

</body>
</html>