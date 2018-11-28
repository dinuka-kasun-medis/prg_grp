<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>

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

 

<style>
table {
    border-collapse: collapse;
    width: 100%;
    align:right;

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
<div class ="table-responsive">
  <table class = "table table-bordered" >
    <tr>
      <th>Order id</th>
      <th>Number of Printouts</th>
      <th>Number of Copies</th>
      <th>Color or Not</th>
      <th>Laminating</th>
      <th>Binding</th>
      <th>State</th>
      <th>Student id</th>
      <th>Delete Record</th>
      
    <tr>

      <?php 
        if($query->num_rows()>0){
          foreach ($query->result() as $row) {
        ?>

        <tr>
          <td><?php echo $row->oid; ?></td>
          <td><?php echo $row->nprintouts; ?></td>
          <td><?php echo $row->npcopies; ?></td>
          <td><?php echo $row->clrprint; ?></td>
          <td><?php echo $row->laminate; ?></td>
          <td><?php echo $row->binding; ?></td>
          <td><?php echo $row->note; ?></td>
          <td><?php echo $row->sid; ?></td>
          
          
          <td><a href="OrderDetails/delete_data/?oid=<?php echo $row->oid;?>">Delete</a></td>

        </tr>
        <?php     
          }

        }
        else{

        
       ?>

       <tr>
        <td colspan ="3" >No Data Found</td>
       </tr>
       <?php 
       }
        ?>
        

    
    


  </table>
</div> 
<script>
  
  $(document).ready(function(){

    $('.delete_data').click(function())

    var oid = $(this).attr("oid");
    if(confirm("Are  you sure want to delete this?")){
      window.location =>"<?php echo base_url(); ?> OrderDetails/delete_data/"+oid;
    }else{
      return false;
    }
  });
</script>   
  
 </body>
 </html>