<!-- <body>
    <section>
        <br>
        <br>
        <br>
    </section>

    <section>
        <div class="row">
            <div class="col-md-5 mx-auto form_container">

                <div class="form_title">Sign Up</div>


                <form class="column form_content" method="POST" action="<?=base_url("signup/process_add")?>">

                    <div class="row col-md-12">
                        <div class="form_item col-md-6">
                            <span class="form_label">First Name</span>
                            <input  class="form_input" type="fname" placeholder="First Name" name="fname"/>
                        </div>

                        <div class="form_item col-md-6">
                            <span class="form_label">Last Name</span>
                            <input  class="form_input" type="lname" placeholder="Last Name" name="lname"/>
                        </div>
                    </div>


                    <div class="row col-md-12">
                        <div class="form_item col-md-6">
                            <span class="form_label">Email</span>
                            <input  class="form_input" type="email" placeholder="Enter Email" name="email"/>
                        </div>

                        <div class="form_item col-md-6">
                            <span class="form_label">Faculty</span>
                            <select class="form_input" name="faculty">
                                <option value="" disabled selected>Faculty</option>
                                <option value="ucsc">UCSC</option>
                                <option value="science">Science</option>
                                <option value="art">Art</option>
                                <option value="law">Law</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="row col-md-12">
                        <div class="form_item col-md-6">
                            <span class="form_label">Password</span>
                            <input  class="form_input" type="password" placeholder="Password" name="password"/>
                        </div>

                        <div class="form_item col-md-6">
                            <span class="form_label">Confirm Password</span>
                            <input  class="form_input" type="password" placeholder="Repeat Password" name="cpassword"/>
                        </div>
                    </div>


                    <div class="form_item col-md-3">
                        <button type="submit">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </section>
</body> -->
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

  

    <!-- <script  src="js/index.js"></script> -->




</body>


