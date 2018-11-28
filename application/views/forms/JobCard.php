<!-- <body>
    <section>
        <br>
        <br>
        <br>
    </section>

    <section>
        <div class="row">
            <div class="col-md-5 mx-auto form_container">

                <div class="form_title">Job Card</div>


                <form  class="column form_content" method="POST" action="<?=base_url("jobadd")?>">

                    <div class="row col-md-12">
                        <div class="form_item col-md-6">
                            <span class="form_label">Job Number</span>
                            <input  class="form_input" type="text" placeholder="" name="job_num"/>
                        </div>
                    </div>

                    <div class="row col-md-12">
                        <div class="form_item col-md-12">
                            <span class="form_label">Job Title
                            <input  class="form_input" type="text" placeholder="Give a name for Job" name="title"/>
                        </div>
                    </div>

                    <div class="row col-md-12">
                        <div class="form_item col-md-6">
                            <span class="form_label">Number of Printouts</span>
                            <input  class="form_input" type="text" placeholder="" name="printouts"/>
                        </div>
                        <div class="form_item col-md-6">
                            <span class="form_label">Number of Photocopies</span>
                            <input  class="form_input" type="text" placeholder="" name="photocopies"/>
                        </div>
                    </div>

                    <div class="row col-md-12">
                        <div class="form_item col-md-12">
                            <span class="form_label">For Colour Printing</span>
                            <input  class="form_input" type="text" placeholder="Type page numbers correctly" name="color"/>
                        </div>
                    </div>

                    <div class="row col-md-12">
                        <div class="form_item col-md-6">
                            <span class="form_label">For Laminating</span>
                            <input  class="form_input" type="text" placeholder="Page Numbers:" name="laminating"/>
                        </div>
                        <div class="form_item col-md-6">
                            <span class="form_label">For Binding</span>
                            <input  class="form_input" type="text" placeholder="Page numbers:" name="binding"/>
                        </div>
                    </div>

                    <div class="row col-md-12">
                        <div class="form_item col-md-12">
                            <span class="form_label">Notes</span>
                            <textarea class="" type="" placeholder="" name="notes" style="width:450px"></textarea>
                        </div>
                    </div>

                    <div class="form_item col-md-3">
                        <button type="submit">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </section>
</body>
 -->

 head>
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
<section>
        <div class="row">
            <div class="col-md-5 mx-auto form_container">
                <div class="wrapper">
                    <div class="container">
                        <h1>Sigh Up</h1>
                        
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
            </div>
    </div>
</section>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <!-- <script  src="js/index.js"></script> -->




</body>
