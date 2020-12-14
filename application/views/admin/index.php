<div class="main-panel">
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">book</i>
              </div>
              <p class="card-category">Jumlah Buku Yang Terdaftar</p>
              <h3 class="card-title"><?php echo $this->M_perpus->get_data('buku')->num_rows(); ?>
                <small></small>
              </h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <a href="javascript:;">View Details</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">people</i>
              </div>
              <p class="card-category">Jumlah Anggota yang terdaftar</p>
              <h3 class="card-title"><?php echo $this->M_perpus->get_data('anggota')->num_rows(); ?></h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <a href="javascript:;">View Details</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
              <div class="card-icon">
                <i class="material-icons">assignment_late</i>
              </div>
              <p class="card-category">Peminjaman belum selesai</p>
              <h3 class="card-title"><?php echo $this->M_perpus->edit_data(array('status_peminjaman'=>0),'transaksi')->num_rows(); ?></h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <a href="javascript:;">View Details</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
                <i class="material-icons">assignment_turned_in</i>
              </div>
              <p class="card-category">Peminjaman Sudah Selesai</p>
              <h3 class="card-title"><?php echo $this->M_perpus->edit_data(array('status_peminjaman'=>1),'transaksi')->num_rows(); ?></h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <a href="javascript:;">View Details</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="card">
            <div class="card-header card-header-tabs card-header-primary">
              <h4 class="card-title">Peminjaman Terakhir</h4>
              <p class="card-category">Last Transaction</p>
            </div>
            <div class="card-body table-responsive">
              <table class="table table-hover">
                <thead class="text-primary">
                  <th>Tgl Pencatatan</th>
                  <th>Tgl Pinjam</th>
                  <th>Tgl Kembali</th>
                  <th>Denda</th>
                </thead>
                <tbody>
                <?php $no = 1;?>
                <?php
                foreach ($transaksi as $p) {
                  ?>
                  <tr>
                    <td><?php echo date('d/m/Y',strtotime($p->tgl_pencatatan)); ?></td>
                    <td><?php echo date('d/m/Y',strtotime($p->tgl_pinjam)); ?></td>
                    <td><?php echo date('d/m/Y',strtotime($p->tgl_kembali)); ?></td>
                    <td><?php echo "Rp. ".number_format($p->total_denda)." ,-"; ?></td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="card">
            <div class="card-header card-header-warning">
              <h4 class="card-title">Anggota Terbaru</h4>
              <p class="card-category">New Members</p>
            </div>
            <div class="card-body table-responsive">
              <table class="table table-hover">
                <thead class="text-warning">
                  <th>No</th>
                  <th>Name</th>
                  <th>Gender</th>
                  <th>Email</th>
                </thead>
                <tbody>
                <?php $no = 1;?>
                <?php foreach ($anggota as $a) { ?>
                  <tr>
                    <td><?php echo $no ++?></td>
                    <td><i class="glyphicon glyphiconuser"></i><?php echo $a->nama_anggota; ?></td>
                    <td><?php echo $a->gender; ?></td>
                    <td><?php echo $a->email; ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>