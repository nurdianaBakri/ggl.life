 <h2 style="margin-top:0px">Soal 2</h2>
 <!-- DataTales Example -->
 <div class="card shadow mb-4">
     <div class="card-header py-3">  </div>
     <div class="card-body">

         <form action="<?php echo $action; ?>" method="post" >
           
             <div class="row">
                 <div class="col-md-12">

                     <div class="form-group"> 
                         <label for="varchar">Angka<?php echo form_error('angka') ?></label>
                 <input type="number" class="form-control" name="angka" id="angka" placeholder="angka"
                     value="<?php echo $angka; ?>" />
                     </div>

                 </div> 
 
             <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
             <a href="<?php echo site_url('Home') ?>" class="btn btn-warning">Cancel</a>
         </form>
     </div>
 </div>  
