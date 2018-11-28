 <body>
    <section>
        <br>
        <br>
    </section>

    <section>
        <?php 
            if(isset($query)){
                foreach($query as $row){

                
            
         ?>
         
        
        <div class="row">
            <div class="col-md-5 mx-auto form_container">

                

                <form  class="column form_content" method="POST" action="<?=base_url("jobadd")?>">

                    <div class="row col-md-12">
                        <div class="form_item col-md-6">
                            <span class="form_label">Print id</span>
                            <input  class="form_input" type="text" placeholder="" name="pid" value = "<?php echo $row->pid ;?>"/>
                        </div>
                    </div>

                    <div class="row col-md-12">
                        <div class="form_item col-md-6">
                            <span class="form_label">Desription</span>
                            <input  class="form_input" type="text" placeholder="" name="description" value = "<?php echo $row->description ;?>"/>
                        </div>
                    </div>

                    <div class="row col-md-12">
                        <div class="form_item col-md-6">
                            <span class="form_label">Price</span>
                            <input  class="form_input" type="text" placeholder="" name="price" value = "<?php echo $row->price ;?>"/>
                        </div>
                    </div>

                    

                    

                    
                    <div class="form_item col-md-3">
                        <button type="submit" value = "Update"  name = "update">Update</button>
                    </div>

                </form>
            </div>
        </div>


        <?php     
          }

        }

        ?>
    
    </section>
</body>

