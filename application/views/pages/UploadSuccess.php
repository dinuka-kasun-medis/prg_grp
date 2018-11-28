<html>
<head>
    <title>Upload Form</title>

</head>
<body>

<h3>Your file was successfully uploaded!</h3>

<ul>
    <?php foreach ($upload_data as $item => $value):?>
        <li><?php echo $item;?>: <?php echo $value;?></li>
    <?php endforeach; ?>
</ul>

<p><?php echo anchor('dashboard', 'Back to Dashboard!'); ?></p>

</body>
</html>

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
        <h1>Successfully Uploaded</h1>

        <form class="column form_content" method="POST" action="<?=base_url("dashboard")?>">



            <ul>
                <?php foreach ($upload_data as $item => $value):?>
                    <li><?php echo $item;?>: <?php echo $value;?></li>
                <?php endforeach; ?>
            </ul>

            <br>
            <button type="submit"  name = "login" id="login-button">Back to Dashboard</button>
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


