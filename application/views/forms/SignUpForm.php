
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/mainstyle.css')?>">


	<script>
		$("#login-button").click(function(event){
			event.preventDefault();

			$('form').fadeOut(500);
			$('.wrapper').addClass('form-success');
		});
	</script>

  
</head>

<body>

  <div class="wrapper">
	<div class="container">
		<h1>Sign Up</h1>
		
		<form class="column form_content" method="POST" action="<?=base_url("signup/process_add")?>">
            <input type="text" name="fname" placeholder = "Enter First Name" required>
            <input type="text" name="lname" placeholder = "Enter Last Name" required>
            <input type="text" name = "email" placeholder = "Enter Email" required>
            <input type="text" name="faculty" placeholder = "Enter Faculty" required>
            <input type="password" name="password" required placeholder="Enter Password">
            <input type="password" name="cpassword" required placeholder="ReEnter Password">
			<button type="submit"  name = "login" id="login-button">Done</button>
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

</body>


