<h2 style="margin-top:0px">Transaksi Read</h2>
<table class="table">
    <tr>
        <td>Tgl Order</td>
        <td><?php echo $tgl_order; ?></td>
    </tr>
    <tr>
        <td>Status Pelunasan</td>
        <td> 
            <?php 
			if($status_pelunasan==1){
				echo "Lunas";
			}
			else{
				echo "Pending"; 
			} 
			?></td>
    </tr> 
	<tr>
        <td>ID Barang</td>
        <td><?php echo $id_barang; ?></td>
    </tr>
	<tr>
        <td>Jumlah</td>
        <td><?php echo $jumlah; ?></td>
    </tr>
	<tr>
        <td>Sub Total</td>
        <td><?php echo $sub_total; ?></td>
    </tr>
    <tr>
        <td></td>
        <td><a href="<?php echo site_url('transaksi') ?>" class="btn btn-default">Cancel</a></td>
    </tr>
</table>
