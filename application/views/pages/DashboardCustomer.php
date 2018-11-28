<!DOCTYPE html>
<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {box-sizing: border-box}

        /* Set height of body and the document to 100% */
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial;
        }

        /* Style tab links */
        .tablink {
            background-color: #555;
            color: white;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            font-size: 17px;
            width: 25%;
        }

        .tablink:hover {
            background-color: #777;
        }

        /* Style the tab content (and add height:100% for full page content) */
        .tabcontent {
            color: white;
            display: none;
            padding: 100px 20px;
            height: 100%;
        }

        #PriceList {background-color: red;}
        #JobCard {background-color: green;}
        #Upload {background-color: yellow;}
        #Deals {background-color: orange;}
    </style>
</head>
<body>

<button class="tablink" onclick="openPage('PriceList', this, 'red')">Price List</button>
<button class="tablink" onclick="openPage('JobCard', this, 'green')" id="defaultOpen">Job Card</button>
<button class="tablink" onclick="openPage('Upload', this, 'blue')">Upload</button>
<button class="tablink" onclick="openPage('Deals', this, 'orange')">Deals</button>

<div id="PriceList" class="tabcontent">

</div>

<div id="JobCard" class="tabcontent">
    <?php $this->load->view("forms/JobCard"); ?>
</div>

<div id="Upload" class="tabcontent">
    <?php $this->load->view("forms/UploadDoc"); ?>
</div>

<div id="Deals" class="tabcontent">
    <?php $this->load->view("pages/Deals"); ?>
</div>

<script>
    function openPage(pageName,elmnt,color) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].style.backgroundColor = "";
        }
        document.getElementById(pageName).style.display = "block";
        elmnt.style.backgroundColor = color;

    }
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>

</body>
</html>
