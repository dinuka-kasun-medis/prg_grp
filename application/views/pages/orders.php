<?php $this->load->view('common/head.php')?>
<?php $this->load->view('common/headerindex.php')?>
<?php $this->load->view('common/script.php')?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Order Details</title>

 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

 	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 </head>
 <body>

 	<!-- <?php 
 	// 	$sql = "SELECT FROM order VALUES('print_id' ,'stu_id' ,'faculty' ,'ammount' ,'no_of_page' ,'color' ,'e_date' ,'e_time' ,'state')";

		// $records = mysqli_query($conn, $sql);

 	 ?> -->

<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #FEB712;
    color: black;
}
</style>
 	<table >
 		<tr>
 			<th>Print id</th>
 			<th>Student id</th>
 			<th>Faculty</th>
 			<th>Amount</th>
 			<th>No-Of-Page</th>
 			<th>Color</th>
 			<th>Estimate Date</th>
 			<th>Estimate Time</th>
 			<th>State</th>
 			<th>Delete Record</th>
 			
 		<tr>

 		<!-- <?php 

 			// while ($order = mysqli_fetch_assoc($records)){
 			// 	echo "<tr>";

 			// 	echo "<td>".$order['print_id']."</td>";

 			// 	echo "<td>".$order['stu_id']."</td>";

 			// 	echo "<td>".$order['faculty']."</td>";

 			// 	echo "<td>".$order['ammount']."</td>";

 			// 	echo "<td>".$order['no_of_page']."</td>";

 			// 	echo "<td>".$order['color']."</td>";

 			// 	echo "<td>".$order['e_date']."</td>";

 			// 	echo "<td>".$order['e_time']."</td>";

 			// 	echo "<td>".$order['state']."</td>";

 				


 			// 	echo "<td><a type='button' class='btn btn-danger' href=deleteOrder.php?print_id=".$order['print_id'].">Delete</a></td>";

 				

 			// 	echo "</tr>";
 			// }


 		 ?> -->


 	</table>
 	
 	
 </body>
 </html>