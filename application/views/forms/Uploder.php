<!--<html>-->
<!--    <head>-->
<!--        <title>Upload Form</title>-->
<!--    </head>-->
<!---->
<!--    <body>-->
<!---->
<!--        --><?php //echo $error;?>
<!---->
<!--        --><?php //echo form_open_multipart('Upload/do_upload');?>
<!---->
<!--            <input type="file" name="userfile" size="20" />-->
<!---->
<!--            <br /><br />-->
<!---->
<!--            <input type="submit" value="upload" />-->
<!---->
<!--        </form>-->
<!---->
<!--    </body>-->
<!--</html>-->


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
        <h1>Upload File Here</h1>

        <?php echo $error;?>

        <?php echo form_open_multipart('Upload/do_upload');?>

        <h3>Note: File name should be Job Number</h3><br>

        <input type="file" name="userfile" size="20" />

        <br /><br />

        <input type="submit" value="Upload" />

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


