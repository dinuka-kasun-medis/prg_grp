<head>

</head>
<body>
<div class="row">
   <div class="col-md-10 mx-auto form_container">
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
      </div>
  </div>    

</body>

