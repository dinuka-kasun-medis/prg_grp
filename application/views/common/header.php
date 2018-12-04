<!DOCTYPE html>

<head>
    <title>UCSC PrintShop OnLine </title>

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?=base_url("assets/css/form_styles.css")?>"

    <!--<script type="text/javascript" src="<?=base_url("assets/js/modal_script.js")?>"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



</head>

<body>

<style>
    html,body{
        overflow:auto;
        height:100%;
    }

    body{
        font-family: 'Roboto', sans-serif;
    }

    
</style>

<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/mainstyle.css')?>">
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/mainstyle.css')?>">

<link rel="stylesheet" type="text/css" href="<?=base_url("assets/css/custom_modal_styles.css")?>">

<div id="header" class="row align-middle" style="width:100%; margin:0px;">
    <div class="flex-row col-md-12" style="display:flex; align-items:center;">
        <div>
            <a href="http://ucsc.cmb.ac.lk/">
                <img src="<?=base_url('images/ucsc.png')?>" width="100px">
            </a>
        </div>
        <div>
            <link rel="stylesheet" type="text/css" href="<?=base_url("assets/css/header_styles.css")?>">
            <div id="header_title">UCSC PrintShop OnLine</div>
        </div>

        <div class="flex-grow-1"></div>

        <div style="margin-right:20px;">
            <div>
                <!-- <a href="https://www.facebook.com/PahasaraUCSC/">
                    <img src="<?=base_url('images/facebook.png')?>" width="50px">
                </a>
                <a href="https://twitter.com/UCSC_LK">
                    <img src="<?=base_url('images/twitter.png')?>" width="35px" style="margin-right: 10px">
                </a>
                <a href="https://www.instagram.com/ucsc_lk/">
                    <img src="<?=base_url('images/instagram.png')?>" width="30px" style="margin-right: 10px">
                </a>
                <a href="https://plus.google.com/+UniversityofColomboSchoolofComputingUCSC">
                    <img src="<?=base_url('images/googlePlus.png')?>" width="35px" style="margin-right: 10px">
                </a>
                <a href="https://www.youtube.com/channel/UC0gdcqEL6ZZeT67s0IbOrHg">
                    <img src="<?=base_url('images/youtube.png')?>" width="36px">
                </a> -->
                <a href="<?=base_url("Home")?>" class="btn red">Sign Out</a>
                <a href="<?=base_url('DashboardAdmin')?>" >tst</a><br>
                <!-- <a href="<?=base_url("signup")?>" class="btn red">Sign Up</a><br> -->
            </div>
        </div>
        <div>
            <div id="header_links">
<!--                --><?php //if($this->session->userdata('logged') !== null && $this->session->userdata('logged')): ?>
<!--                    <span><a href="--><?//=base_url("dashboard")?><!--">Dashboard</a></span>-->
<!--                    <span>--><?php //$fname = $this->session->userdata('fname'); echo $fname; ?><!--</span>-->
<!--                    <span><a href="--><?//=base_url("logout")?><!--">Log out</a></span>-->
<!--                --><?php //else : ?>
<!--                    <span><a href="--><?//=base_url("log-in")?><!--">Login</a></span>-->
<!--                --><?php //endif ?>
            </div>
        </div>

    </div>
</div>


<div class="column" id="content" style="margin-top:100px; margin-bottom:50px; min-height:100%; padding-left:20px; padding-right:20px;">
