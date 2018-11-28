<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
//?>
<!--<!DOCTYPE html>-->
<!--<html>-->
<!--<head>-->
<!---->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">-->
<!--	-->
<!--    <style>-->
<!--        * {box-sizing: border-box}-->
<!---->
<!--        /* Set height of body and the document to 100% */-->
<!--        body, html {-->
<!--            height: 100%;-->
<!--            margin: 0;-->
<!--            font-family: Arial;-->
<!--        }-->
<!---->
<!--        /* Style tab links */-->
<!--        .tablink {-->
<!--            background-color: #555;-->
<!--            color: white;-->
<!--            float: left;-->
<!--            border: none;-->
<!--            outline: none;-->
<!--            cursor: pointer;-->
<!--            padding: 14px 16px;-->
<!--            font-size: 17px;-->
<!--            width: 25%;-->
<!--        }-->
<!---->
<!--        .tablink:hover {-->
<!--            background-color: #777;-->
<!--        }-->
<!---->
<!--        /* Style the tab content (and add height:100% for full page content) */-->
<!--        .tabcontent {-->
<!--            color: white;-->
<!--            display: none;-->
<!--            padding: 10px 20px;-->
<!--            height: 100%;-->
<!--        }-->
<!---->
<!--        #PriceList {background-color: #8A6BCA;}-->
<!--        #JobCard {background-color: #8A6BCA;}-->
<!--        #Upload {background-color: #8A6BCA;}-->
<!--        #Deals {background-color: #8A6BCA;}/*test*/-->
<!--    </style>-->
<!--    <link rel="stylesheet" type="text/css" href="--><?//=base_url('assets/css/mainstyle.css')?><!--">-->
<!--</head>-->
<!--<body>-->
<!---->
<!--<section>-->
<!--    <div class="container">-->
<!--        <div class="box first">-->
<!--            <span class="icon-cont"><i class="fa fa-user"></i></span>-->
<!---->
<!--<div id="PriceList" class="tabcontent">-->
<!--    --><?php //$this->load->view('forms/PriceList'); ?><!--        -->
<!--</div>-->
<!---->
<!--        <div class="box second">-->
<!--            <span class="icon-cont"><i class="fa fa-list"></i></span>-->
<!--            <a href="--><?//=base_url("JobCard/index")?><!--">-->
<!--                <h3>Job Card</h3>-->
<!---->
<!--        </div>-->
<!---->
<!--        <div class="box third">-->
<!--            <span class="icon-cont"><i class="fa fa-history"></i></span>-->
<!--            <a href="--><?//=base_url("Upload/index")?><!--">-->
<!--                <h3>Upload Center</h3>-->
<!---->
<!--        </div>-->
<!---->
<!--        <div class="box fourth">-->
<!--            <span class="icon-cont"><i class="fa fa-print"></i></span>-->
<!--            <a href="--><?//=base_url("")?><!--">-->
<!--                <h3>History</h3>-->
<!---->
<!--        </div>-->
<!--    </div>-->
<!--</body>-->
<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-5f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>-->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>-->
<!--</html>-->
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/admindashboardcss.css')?>">
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/js/admindashboard.js')?>">
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/mainstyle.css')?>">
<body>

<section>
    <div class="container">

        <div class="box first">
            <span class="icon-cont"><i class="fa fa-user"></i></span>
            <a href="<?=base_url("")?>">
                <h3>Price List</h3>

        </div>

        <div class="box second">
            <span class="icon-cont"><i class="fa fa-list"></i></span>
            <a href="<?=base_url("JobCard/index")?>">
            <h3>Job Card</h3>

        </div>

        <div class="box third">
            <span class="icon-cont"><i class="fa fa-history"></i></span>
            <a href="<?=base_url("Upload/index")?>">
            <h3>Upload Center</h3>

        </div>

        <div class="box fourth">
            <span class="icon-cont"><i class="fa fa-print"></i></span>
            <a href="<?=base_url("")?>">
                <h3>Print History</h3>

        </div>
    </div>
</body>

</section>

