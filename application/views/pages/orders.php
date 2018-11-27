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
      <td><?php echo $row->sid;?></td>  
      <td><?php echo $row->fname;?></td>
      <td><?php echo $row->lname ;?></td>  
      <td><?php echo $row->nprintouts ;?></td>
      <td><?php echo $row->npcopies ;?></td>  
      <td><?php echo $row->clrprint ;?></td>
      <td><?php echo $row->laminate ;?></td>  
      <td><?php echo $row->binding;?></td>  
      <td><?php echo $row->binding;?></td>  
      <td><?php echo $row->binding;?></td>  
      <td><?php echo $row->binding;?></td>  
      </tr>  
    <?php }  
  ?>

</table>

</body>

