<div class="main-panel">
	<div class="content">
    	<div class="container-fluid">
            <h3>Data Transaksi</h3>
            <a href="<?php echo base_url().'admin/tambah_peminjaman'; ?>" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-plus"></span> Transaksi Baru</a>
            <br><br>
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover" id="datatable-peminjaman">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Anggota</th>
                            <th>Buku</th>
                            <th>Tgl. Pinjam</th>
                            <th>Tgl. Kembali</th>
                            <th>Denda/Hari</th>
                            <th>Tgl. Dikembalikan</th>
                            <th>Total Denda</th>
                            <th>Status Buku</th>
							<?php if($this->session->userdata('isAdmin') == 1):?>
                            <th>Status Pinjam</th>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no = 1;
                    foreach ($peminjaman as $p) {?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $p->nama_anggota ?></td>
                            <td><?php echo $p->judul_buku ?></td>
                            <td><?php echo date('d/m/Y',strtotime($p->tgl_pinjam)); ?></td>
                            <td><?php echo date('d/m/Y',strtotime($p->tgl_kembali)); ?></td>
                            <td><?php echo $p->total_denda; ?></td>
                            <td>
                            <?php if($p->tgl_pengembalian =="0000-00-00"){
                                echo "-";
                            }else{
                                echo date('d/m/Y',strtotime($p->tgl_pengembalian));
                            } ?>
                            </td>
                            <td><?php echo "Rp. ". number_format($p->total_denda)." ,-"; ?></td>

                            <td>
                                <?php if($p->status_buku == "1"){
                                    echo "Selesai";
                                }else{
                                    echo "-";
                                } ?>
                            </td>
                            <?php if($this->session->userdata('isAdmin') == 1):?>
                            <td>
                            <?php if($p->status_peminjaman == "1"){
                                echo "-";
                            }else { ?>
                                <a class="btn btn-sm btn-success" href="<?php echo base_url().'admin/transaksi_selesai/'.$p->id_pinjam; ?>"><span class="glyphicon glyphicon-ok"></span> Transaksi Selesai</a>
                                <br>
                                <a class="btn btn-sm btn-danger" href="<?php echo base_url().'admin/transaksi_hapus/'.$p->id_pinjam; ?>"><span class="glyphicon glyphicon-remove"></span> Batalkan Transaksi </a>
                            <?php } ?>
                            </td>
                            <?php endif; ?>

                        </tr>
                    <?php } ?>
                    </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>