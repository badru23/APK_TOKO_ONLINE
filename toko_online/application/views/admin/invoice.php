<div class="container-fluid">
    <h4>Invoice Pemesanan Produk</h4>
    <table class="table table-bordered tabel-hover table-striped">
        <tr>
            <td>id invoice</td>
            <td>Nama Pemesanan</td>
            <td>Alamat Pengiriman</td>
            <td>Tanggal Pemesanan</td>
            <td>Batas Pembayaran</td>
            <td>Aksi</td>
        </tr> 

        <?php foreach($invoice as $inv):?>
                <tr>
                    <td><?php echo $inv->id ?></td>
                    <td><?php echo $inv->nama ?></td>
                    <td><?php echo $inv->alamat ?></td>
                    <td><?php echo $inv->tgl_pesan ?></td>
                    <td><?php echo $inv->batas_bayar ?></td>
                    <td><?php echo anchor('admin/invoice/detail/'.$inv->id,'<div class="btn btn-sm btn-primary">Detail</div>')?></td>
                </tr>
        <?php endforeach;?>
    </table>
</div>