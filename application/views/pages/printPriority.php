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
    <th>Time</th>
    <th>Price</th>
    <th>Print</th>
  </tr>
  <tr>
    <td>U0001</td>
    <td>Maria Anders</td>
    <td>pdf</td>
    <td>Time</td>
    <td>Price</td>
    <td><a href="<?=base_url('Email')?>" class="btn red">email</a></td>
  </tr>
  <tr>
    <td>U0002</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
    <td>Time</td>
    <td>Price</td>
    <td><a href="<?=base_url('views/R.pdf')?>" target="_blank">Show My Pdf</a></td>
    
  </tr>
  <tr>
    <td>U0003</td>
    <td>Roland Mendel</td>
    <td>Austria</td>
    <td>Time</td>
    <td>Price</td>
    <td>Print</td>
  </tr>
  
</table>

</body>

