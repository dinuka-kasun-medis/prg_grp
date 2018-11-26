<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>

<table>
  <tr>
    <th>User Id</th>
    <th>Name</th>
    <th>Pdf</th>
    <th>Printouts</th>
    <th>Photo Copy</th>
    <th>Colour</th>
    <th>Laminate</th>
    <th>Binding</th>
    <th>Note</th>
    <th>Time</th>
    <th>Price</th>
  </tr>

<?php  
    foreach ($h->result() as $row)  
    {  
      ?><tr>  
      <td><?php echo $row->oid;?></td>  
      <td><?php echo $row->nprintouts;?></td>
      <td><?php echo $row->npcopies;?></td>  
      <td><?php echo $row->clrprint;?></td>
      <td><?php echo $row->laminate;?></td>  
      <td><?php echo $row->binding;?></td>
      <td><?php echo $row->note;?></td>  
      <td><?php echo $row->sid;?></td>  
      </tr>  
    <?php }  
  ?>



  <tr>
    <td>U0001</td>
    <td>Maria Anders</td>
    <td>pdf</td>
    <td>1</td>
    <td>5</td>
    <td>No</td>
    <td>page 1</td>
    <td>Yes</td>
    <td>-</td>
    <td>00:20:00</td>
    <td>R.500.00</td>
  </tr>
  <tr>
    <td>U0002</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
    <td>1</td>
    <td>5</td>
    <td>No</td>
    <td>page 1</td>
    <td>Yes</td>
    <td>-</td>
    <td>00:20:00</td>
    <td>R.500.00</td>
    
  </tr>
  <tr>
    <td>U0003</td>
    <td>Roland Mendel</td>
    <td>Austria</td>
    <td>1</td>
    <td>5</td>
    <td>No</td>
    <td>page 1</td>
    <td>Yes</td>
    <td>-</td>
    <td>00:20:00</td>
    <td>R.500.00</td>
  </tr>
  
</table>

</body>

