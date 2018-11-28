<!-- <body>-->
<!--    <section>-->
<!--        <br>-->
<!--        <br>-->
<!--    </section>-->
<!---->
<!--    <section>-->
<!--        <div class="row">-->
<!--            <div class="col-md-5 mx-auto form_container">-->
<!---->
<!--                <div class="form_title">Job Card</div>-->
<!---->
<!---->
<!--                <form  class="column form_content" method="POST" action="--><?//=base_url("jobadd")?><!--">-->
<!---->
<!--                    <div class="row col-md-12">-->
<!--                        <div class="form_item col-md-6">-->
<!--                            <span class="form_label">Job Number</span>-->
<!--                            <input  class="form_input" type="text" placeholder="" name="job_num"/>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="row col-md-12">-->
<!--                        <div class="form_item col-md-12">-->
<!--                            <span class="form_label">Job Title-->
<!--                            <input  class="form_input" type="text" placeholder="Give a name for Job" name="title"/>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="row col-md-12">-->
<!--                        <div class="form_item col-md-6">-->
<!--                            <span class="form_label">Number of Printouts</span>-->
<!--                            <input  class="form_input" type="text" placeholder="" name="printouts"/>-->
<!--                        </div>-->
<!--                        <div class="form_item col-md-6">-->
<!--                            <span class="form_label">Number of Photocopies</span>-->
<!--                            <input  class="form_input" type="text" placeholder="" name="photocopies"/>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="row col-md-12">-->
<!--                        <div class="form_item col-md-12">-->
<!--                            <span class="form_label">For Colour Printing</span>-->
<!--                            <input  class="form_input" type="text" placeholder="Type page numbers correctly" name="color"/>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="row col-md-12">-->
<!--                        <div class="form_item col-md-6">-->
<!--                            <span class="form_label">For Laminating</span>-->
<!--                            <input  class="form_input" type="text" placeholder="Page Numbers:" name="laminating"/>-->
<!--                        </div>-->
<!--                        <div class="form_item col-md-6">-->
<!--                            <span class="form_label">For Binding</span>-->
<!--                            <input  class="form_input" type="text" placeholder="Page numbers:" name="binding"/>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="row col-md-12">-->
<!--                        <div class="form_item col-md-12">-->
<!--                            <span class="form_label">Notes</span>-->
<!--                            <textarea class="" type="" placeholder="" name="notes" style="width:450px"></textarea>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="form_item col-md-3">-->
<!--                        <button type="submit">Submit</button>-->
<!--                    </div>-->
<!---->
<!--                </form>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!--</body>-->
////////////////////////////////////////////////////////////////////////////////////////////////////////////////


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

        <form class="column form_content" method="POST" action="<?=base_url("signup/process_add")?>">
            <div class="row">
                <div class="col-md-6">

                </div>
                <div class="col-md-6">
                    <input type="text" name="job_num" placeholder = "Job Number" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <input type="text" name="title" placeholder = "Title" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <input type="text" name="printouts" placeholder = "Num of Printouts" required>
                </div>
                <div class="col-md-6">
                    <input type="text" name="photocopies" placeholder = "Num of Photocopies" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <input type="text" name="color" placeholder = "Page nums of Color prints" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <input type="text" name="binding" placeholder = "Num of Binding copies" required>
                </div>
                <div class="col-md-6">
                    <input type="text" name="laminating" placeholder = "Num of Laminating copies" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <input type="text" name="notes" placeholder = "Notes" required>
                </div>
            </div>



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
