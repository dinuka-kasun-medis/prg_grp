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
		<h1>Welcome</h1>
		
		<form class = "form-signin" role = "form" action = "<?=base_url("dashboard")?>" method = "post">
			<input type="text" name = "email" placeholder = "Your Email" required>
			<input type="password" name = "password" required placeholder="Password">
			<button type="submit"  name = "login" id="login-button">Login</button>
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

  

    <!-- <script  src="js/index.js"></script> -->




</body>

