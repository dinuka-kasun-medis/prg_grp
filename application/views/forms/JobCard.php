<head>
     <meta charset="UTF-8">
     <title>Job Card</title>
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
         <h1>Job Card</h1>

         <form class="column form_content" method="POST" action="<?=base_url("jobadd")?>">
             <div class= "row">
                 <input type="text" name="job_num" placeholder = "Job Number" required>
             </div>

             <div class= "row">
                 <input type="text" name="title" placeholder = "Title" required>
             </div>

             <div class= "row">
                 <div class="col-md-6">
                     <input type="text" name = "printouts" placeholder = "Number of Printouts" required>
                 </div>
                 <div class="col-md-6">
                     <input type="text" name="photocopies" placeholder = "Number of Photocopies" required>
                 </div>
             </div>

             <div class= "row">
                 <input type="text" name = "binding" placeholder = "Number of Sets for Binding" required>
             </div>

             <div class= "row">
                 <div class="col-md-6">
                     <input type="text" name = "color" placeholder = "Page Nums for Color Printing" required>
                 </div>
                 <div class="col-md-6">
                     <input type="text" name="laminating" placeholder = "Page Numbers for Laminating" required>
                 </div>
             </div>

             <input type="text" name="notes" placeholder = "Notes" required>
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
