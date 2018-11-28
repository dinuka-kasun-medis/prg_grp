<body>
    <section>
        <br>
        <br>
        <br>
    </section>

    <section>
        <div class="row">
            <div class="col-md-6 mx-auto form_container">

                <div class="form_title">Price List</div>
                <table class="table table-hover">
                    
                    <thead class="text-danger">
                        <tr scope="col" class="success">
                            <th>PID</th>
                            <th>Description</th>
                            <th>price</th>
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

