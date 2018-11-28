<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>

<body>
    <section>
        <br>
        <div class="form_title text-center text-danger"><h1>Price List</h1></div>
    </section>

    <section>
        <div class="row">
            <div class="col-md-6 mx-auto form_container">

                
                <table class="table table-hover">
                    
                    <thead class="thead-dark">
                        <tr scope="col" class="success">
                            <th>Price ID</th>
                            <th>Description</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <?php
                        foreach($fetch_data->result() as $row){
                    ?>            
                    <tbody>
                    <tr scope="row" class="active">
                        <td><?php echo $row->pid; ?></td>
                        <td><?php echo $row->description; ?></td>
                        <td><?php echo $row->price; ?></td>
                    </tr>
                    <tbody>
                    <?php            
                        }
                    ?> 
                </table>
            </div>
        </div>
    </section>
</body>

