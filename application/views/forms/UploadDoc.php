
<html>

<head>

    <link href = "css/bootstrap.min.css" rel = "stylesheet">

    <style>
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #ADABAB;
        }

        .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
            color: #017572;
        }

        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 10px;
        }

        .form-signin .checkbox {
            font-weight: normal;
        }

        .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
        }

        .form-signin .form-control:focus {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            border-color:#017572;
        }

        .form-signin input[type="password"] {
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

<h2>Upload Document . . . . </h2>
<div class = "container form-signin">

</div> <!-- /container -->

<div class = "container">

    <form class = "form-signin" role = "form" action = "<?=base_url("uploader")?>" method = "post">
        <div class="row col-md-12">
            <div class="form_item col-md-12">
                <span class="form_label">When upload your document . . . </span>
                <h6> 1) Must be PDF or DOC </h6>
                <h6> 2) Rename it as Job Number </h6>
            </div>
        </div>

        <div class="form_item col-md-12">
            <button type="submit">Upload >></button>
        </div>

    </form>

    Click here to clean <a href = "logout.php" tite = "Logout">Session.

</div>

</body>
</html>