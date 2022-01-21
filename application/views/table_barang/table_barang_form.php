
<!-- Page Heading --> <h2 style="margin-top:0px">Tambah barang</h2>
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
            <label for="varchar">Kode Barang <?php echo form_error('kode_barang') ?></label>
            <input type="text" class="form-control" name="kode_barang" id="kode_barang" placeholder="Kode Barang" value="<?php echo $kode_barang; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama Barang <?php echo form_error('nama_barang') ?></label>
            <input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder="Nama Barang" value="<?php echo $nama_barang; ?>" />
        </div>

		<div class="form-group">
            <label for="varchar">Harga Barang <?php echo form_error('harga') ?></label>
            <input type="number" class="form-control" name="harga" id="harga" placeholder="Nama Barang" value="<?php echo $harga; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Gambar Barang <?php echo form_error('gambar_barang') ?></label>
            <input type="text" class="form-control" name="gambar_barang" id="gambar_barang" placeholder="Gambar Barang" value="<?php echo $gambar_barang; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('table_barang') ?>" class="btn btn-default">Cancel</a>
	</form>
</div>
