<?php $this->load->view('common/head.php')?>
<?php $this->load->view('common/headerindex.php')?>
<?php $this->load->view('common/script.php')?>

<!-- <head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: black;
}

* {
    box-sizing: border-box;
}

/* Add padding to containers */
.container {
    padding: 16px;
    background-color: white;
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
    background-color: #4CAF50;
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

/* Add a blue text color to links */
a {
    color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
    background-color: #f1f1f1;
    text-align: center;
}
</style>
</head> -->

<head>

    <link href = "css/bootstrap.min.css" rel = "stylesheet">

<style>
         body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #C0C0C0;
         }
         
         .form-signup {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
            color: #017572;
         }
         
         .form-signin .form-signin-heading,
         .form-signin .checkbox {
            margin-bottom: 10px;
         }
         
         .form-signup .checkbox {
            font-weight: normal;
         }
         
         .form-signup .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
         }
         
         .form-signup .form-control:focus {
            z-index: 2;
         }
         
         .form-signup input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            border-color:#017572;
         }
         
         .form-signup input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-color:#017572;
         }
         
         .form-signup select[type="faculty"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-color:#017572;
         }
         h2{
            text-align: center;
            color: #017572;
         }
      </style>
</head>

<body>

    <section>
    <br>
    <br>
    <br>

<form class="signup" action="signup.php" method="POST">
  <div class="container">
    <br><br><br>
    <hr>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="name" required class = "form-control"><br>

    <label for="faculty"><b>Faculty</b></label>
        <select id="faculty" name="faculty" id="faculty" class="form-control">
          <option value="UCSC">UCSC</option>
          <option value="Science">Science</option>
          <option value="Art">Art</option>
          <option value="Law">Law</option>
          <option value="Management">Management</option>
          <option value="Other">Other</option>
        </select><br>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required class = "form-control"><br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" required class = "form-control"><br>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="rpassword" id="rpassword" required class = "form-control"><br>
    
    <button type="submit" class = "btn btn-lg btn-primary btn-block" name="submit">Submit</button>
  </div>
  
</form>

<?php


$con=mysqli_connect("localhost","root","");
if(!$con){
	echo "Not connected to server";
}

if(!mysqli_select_db($con,"printshop")){
	echo "database not selected";
}

$name = $_POST['name'];
$email= $_POST['email'];
$faculty = $_POST['faculty'];
$password = $_POST['password'];
$rpassword = $_POST['rpassword'];


if(($password==$rpassword)){
	
	$INSERT = "INSERT Into students(name,email,faculty,password) 
		values('$name','$email','$faculty','$password')";


}
else{
	echo "Error!";
}

if(!mysqli_query($con,$INSERT)){
	echo "not inserted";
}
else{
	echo "inserted";
}

?>
</body>