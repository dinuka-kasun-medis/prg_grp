
<html>

<head>

    <!-- <link href = "css/bootstrap.css" rel = "stylesheet"> -->

    <style>
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #C29CEE;
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
            color: #FC1818;
        }

        .box {
            width: 24%;
            height: 350px;
            margin: 0.2%;
            padding: 15px;
            box-sizing: border-box;
            display: inline-block;
            background:#4E22A8;/* #036C81;*/
            position: relative;
            overflow: hidden;
            box-shadow: 0 0 5px rgba(0,0,0,0.4);
            cursor: pointer;
        }
    </style>

</head>

<body>

<h2>Welcome | UCSC Print Shop</h2>
<div class = "container form-signin">

</div> <!-- /container -->
<div class="container">
    <div class = "box">

    <form class = "form-signin" role = "form"
        action = "<?=base_url("login/login_student")?>" method = "post">

        <label>Email:</label>
        <input type = "text" class = "form-control"
            name = "email" placeholder = "" required autofocus><br>

        <label>Password:</label>
        <input type = "password" class = "form-control"
            name = "password" placeholder = "" required><br>

        <button class = "btn btn-lg btn-primary btn-block" type = "submit"
                name = "login">Login</button>
    </form>

    </div>
</div>


</body>
</html>