<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-image:url("/image/4.jpg"); 
  background-repeat:none;
  background-size:cover;
  background-position:center;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  text-align: center;
  padding: 5px;
  width: 47%;
  margin-left: 27%;
  background-color: white;
  opacity: 0.9;
  margin-top:9%;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

#ourmanna-verse{
  text-align:center;
  background-image:url("/image/4.jpg");
  background-size:100%;
  background-position:center;
  font-weight:bold;
  position:fixed;
  z-index:12;
  top:0;
  width: 98.5%;
  
}
</style>
</head>
<body>
<div id="ourmanna-verse">Loading...</div>
<script src="http://www.ourmanna.com/verses/api/js/?order=random" type="text/javascript"></script>
<form action="/bible-study-form-create" method="POST" class="">
  @csrf
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p></td>
    <hr>
 <table>
  <tr>
    <td><label for="name"><b>Complete Name</b></label></td>
    <td><input type="text" value="{{ $registrationform->name }}" placeholder="Complete Name" name="name" id="name" required></td>
  </tr>
  <tr>
    <td><label for="email"><b>Email Address</b></label></td>
    <td><input type="email" value="{{ $registrationform->email }}" placeholder="Email Address" name="email" id="email" required></td>
  </tr>
  <tr>
    <td><label for="number"><b>Contact Number</b></label></td>
    <td><input type="number" value="{{ $registrationform->number }}" placeholder="Contact Number" name="number" id="number" required></td>
  </tr>
  <tr>
    <td><label for="bdate"><b>Birthdate</b></label></td>
    <td><input type="date" value="{{ $registrationform->bdate }}" placeholder="Birthdate" name="bdate" id="bdate" required></td>
  </tr>
  <tr>
    <td><label for="relaff"><b>Religious Affiliation</b></label></td>
    <td><input type="text" value="{{ $registrationform->relaff }}" placeholder="Religion Affiliation" name="relaff" id="relaff" required></td>
  </tr>
  <tr>
    <td><label for="bsdate"><b>Bible Study Date</b></label></td>
    <td><input type="date" value="{{ $registrationform->bsdate }}"  placeholder="Bible Study Date" name="bsdate" id="bsdate" required></td>
  </tr>
  <tr>
    <td><label for="bstime"><b>Bible Study Time</b></label></td>
    <td><input type="time" value="{{ $registrationform->bstime }}" placeholder="Bible Study Time" name="bstime" id="bstime" required></td>
  </tr>
  <tr>
    <td><label for="bslocation"><b>Bible Study Location / Address</b></label></td>
    <td><input type="text" value="{{ $registrationform->bslocation }}" placeholder="Bible Study Location" name="bslocation" id="bslocation" required></td>
  </tr>
</table>
    <hr>
    
    <button type="submit" value="submit"  class="registerbtn">Register</button>
  </div>
  
  
</form>

</body>
</html>


