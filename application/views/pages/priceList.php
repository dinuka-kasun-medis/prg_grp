<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>

 <!DOCTYPE html>
 <html>
 <head>
  <title>Price Details</title>

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
      <th>Print id</th>
      <th>Discription</th>
      <th>Price</th>
      <th>Edit</th>
      
      
      
    <tr>

      <?php 
        if($query->num_rows()>0){
          foreach ($query->result() as $row) {
        ?>

        <tr>
          <td><?php echo $row->pid; ?></td>
          <td><?php echo $row->description; ?></td>
          <td><?php echo $row->price; ?></td>
          <td><a href="PriceListAdmin/update_data/?oid=<?php echo $row->pid;?>">Edit</a></td>
          

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

    $('.update_data').click(function())

    var pid = $(this).attr("pid");
    if(confirm("Are  you sure want to delete this?")){
      window.location =>"<?php echo base_url(); ?> PriceListAdmin/update_data/"+pid;
    }else{
      return false;
    }
  });
</script>   
  
 </body>
 </html>