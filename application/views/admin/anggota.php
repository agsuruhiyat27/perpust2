<div class="main-panel">
	<div class="content">
    	<div class="container-fluid">
            <h3>Data Anggota</h3>
            <a href="<?php echo base_url().'admin/tambah_anggota'; ?>" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-plus"></span>Anggota Baru</a>
            <br><br>
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover" id="datatable-anggota">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Anggota</th>
                            <th>Gender</th>
                            <th>No.Telpon</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>Pilihan</th>
                            <th>verify</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($anggota as $a) {
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $a->nama_anggota ?></td>
                            <td><?php echo $a->gender ?></td>
                            <td><?php echo $a->no_telp ?></td>
                            <td><?php echo $a->alamat ?></td>
                            <td><?php echo $a->email ?></td>
                            <td>
                                <?php if($a->verify == 0 ) : ?>
                                    <span class="fa fa-times"></span>
                                <?php else : ?>
                                    <span class="fa fa-check"></span>
                                <?php endif;?>
                            </td>
                            <td nowrap="nowrap">
                               <?php if($a->verify == 0 ) : ?>
                                    <a class="btn btn-primary btn-xs" href="<?php echo base_url().'admin/verify_anggota/'.$a->id_anggota; ?>"><span class="fa fa-check"></span></a>
                                <?php endif;?>
                                <a class="btn btn-primary btn-xs" href="<?php echo base_url().'admin/edit_anggota/'.$a->id_anggota; ?>"><span class="fa fa-edit"></span></a>
                                <a class="btn btn-warning btn-xs" href="<?php echo base_url().'admin/hapus_anggota/'.$a->id_anggota; ?>"><span class="fa fa-trash"></span></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>