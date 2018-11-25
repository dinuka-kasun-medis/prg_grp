<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #ADABAB;
        }
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
    </style>
</head>
<body>
<h1 class="text-center">User Details</h1>

            <table class="table table-hover">
                <thead>
                <tr scope="col" class="success">
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Faculty</th>
                </tr>
                </thead>
                <?php
                    if($fetch_data->num_rows()>0){
                        foreach($fetch_data->result() as $row){
                ?>            
                            <tbody>
                            <tr scope="row" class="active">
                                <td><?php echo $row->sid; ?></td>
                                <td><?php echo $row->fname; ?></td>
                                <td><?php echo $row->lname; ?></td>
                                <td><?php echo $row->email; ?></td>
                                <td><?php echo $row->faculty; ?></td>
                            </tr>
                            <tbody>
                <?php            
                    }
                    }else{
                ?>
                        <tr>
                            <td colspan="5">No data Found</td>
                        </tr>   
                <?php             
                    }
                ?>
            </table>


</body>

</html>