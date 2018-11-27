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
    <th>Email</th>
    <th>Telephone</th>
    <th>Faculty</th>
    <!-- <th>Password</th> -->

  </tr>
  <?php  
    foreach ($h->result() as $row)  
    {  
      ?><tr>  
      <td><?php echo $row->sid;?></td>  
      <td><?php echo $row->fname;?></td>
      <td><?php echo $row->lname;?></td>  
      <td><?php echo $row->email;?></td>
      <td><?php echo $row->faculty;?></td>  
      <!-- <td><?php echo $row->password;?></td>   -->
      </tr>  
    <?php }  
  ?>  
  <!-- <tr>
    <td>U0001</td>
    <td>Maria Anders</td>
    <td>maria@gmail.com</td>
    <td>0124545144</td>
    <td>Science</td>
  </tr>
  <tr>
    <td>U0002</td>
    <td>Francisco Chang</td>
    <td>francisco@yahoo.com</td>
    <td>0235641522</td>
    <td>Law</td>
    
  </tr>
  <tr>
    <td>U0003</td>
    <td>Roland Mendel</td>
    <td>ronald@hotmail.com</td>
    <td>52415622</td>
    <td>Art</td>
  </tr> -->
  
</table>

</body>

