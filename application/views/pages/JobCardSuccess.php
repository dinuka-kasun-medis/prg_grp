<head>
    <meta charset="UTF-8">
    <title>Success</title>
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
        <h1>Job Added</h1>

        <form class="column form_content"  action="<?=base_url("dashboard")?>">
            <h3>Upload your Document via Upload Center</h3><br><br><br>
            <h2>Thank You!</h2><br>
            <br>
            <button type="submit"  name = "" >Back to Dashboard</button>
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


