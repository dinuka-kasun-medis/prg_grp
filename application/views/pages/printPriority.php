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
    <!-- <th>Time</th> -->
    <th>Price</th>
    <th>Print</th>
  </tr>

  <?php  
    foreach ($h->result() as $row){  
      ?><tr>  
      <td><?php echo $row->sid;?></td>  
      <td><?php 
        echo $row->fname;
        echo " ";
        echo $row->lname;
      ?></td>
      <?php
        $prt1 = "public/pdf/";
        $name = $row->oid;
        $prt2 = ".pdf";
        $link = $prt1.$name.$prt2;
      ?>
      <td><a href="<?=base_url($link)?>" target="_blank">View Pdf</a>
        <?php
        ?>
      </td>  
      <!-- <td><?php echo $row->nprintouts ;?></td> -->
      <td><?php echo $row->npcopies ;?></td>

      <td>
        <?php
          $prt1 = "public/pdf/";
          $name = $row->oid;
          $prt2 = ".pdf";
          $link = $prt1.$name.$prt2;

          $mp1 = "Email/index/";
          $email = $row->email;
          $sent = explode("@",$mp1.$email);
        ?>
        <!-- <a href="<?=base_url('Email')?>" class="btn red">Start Printing</a> -->
        <!-- <td><a href="<?=base_url($link)?>" target="_blank">View Pdf</a> -->
        <a href="<?php echo base_url($sent[0]) ?>" href="<?=base_url($link)?>" target="_blank" class="btn red">Starting Printing</a>
      </td>
      
      </tr>  
    <?php }  
?>

  <!-- <tr>
    <td>U0001</td>
    <td>Maria Anders</td>
    <td>pdf</td>
    <td>Time</td>
    <td>Price</td>
    <td><a href="<?=base_url('Email')?>" class="btn red">email</a></td>
  </tr> -->

  <!-- <tr>
    <td>U0002</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
    <td>Time</td>
    <td>Price</td>
    <td><a href="<?=base_url('public/pdf/R.pdf')?>" target="_blank">Show My Pdf</a></td>
    
  </tr>
  <tr>
    <td>U0003</td>
    <td>Roland Mendel</td>
    <td>Austria</td>
    <td>Time</td>
    <td>Price</td>
    <td>Print</td>
  </tr> -->
  
</table>

</body>

