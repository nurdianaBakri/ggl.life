
<!-- Page Heading --> <h2 style="margin-top:0px">Transaksi <?php echo $button ?></h2>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
            </div>
        </div>
    </div>
    <div class="card-body">
        
        <form action="<?php echo $action; ?>" method="post">
	
		<div class="form-group">
                <label for="int">Id Barang <?php echo form_error('id_barang') ?></label>

                <select class="form-control" name="id_barang">

                    <?php

			foreach ($barang as $key) { ?>
                    <option value="<?= $key->id ?>"><?= $key->id ."-". $key->nama_barang ?></option>

                    <?php }

			?>
                </select>

            </div>

	    <div class="form-group">
            <label for="float">Jumlah <?php echo form_error('jumlah') ?></label>
            <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah" value="<?php echo $jumlah; ?>" />
        </div> 

		    
	    <div class="form-group">
            <label for="int">Status Pelunasan <?php echo form_error('status_pelunasan') ?></label>
            <select class="form-control" name="status_pelunasan">
				<option value="1">Lunas</option>
				<option value="0">Pending</option>
			</select>
        </div> 

	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('transaksi') ?>" class="btn btn-default">Cancel</a>
	</form>
</div>
