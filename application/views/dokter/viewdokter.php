

			<div class="card">
                  <div class="card-header">
                    <div class="card-header-action">
                      <form>
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search">
                          <div class="input-group-btn">
                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped" id="sortable-table">
                        <thead>
                          <tr>
                            <th class="text-center">
                              <i class="fas fa-th"></i>
                            </th>
                            <th>Kode Dokter</th>
                            <th>Nama Dokter</th>
                            <th>Jenis Kelamin</th> 
                            <th>Alamat Tinggal</th>
                            <th>No telp</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                        foreach ($list->result() as $row) :
                        ?>
                          <tr>
                            <td>
                              <div class="sort-handler">
                                <i class="fas fa-th"></i>
                              </div>
                            </td>

                            <td><?php echo $row->kd_dokter; ?></td>
                            <td><?php echo $row->nm_dokter; ?></td>
                            <td><?php echo $row->jk; ?></td>
                            <td><?php echo $row->almt_tgl; ?></td>
                            <td><?php echo $row->no_telp; ?></td>
                            <td><a href="<?= site_url('dokter/edit/')  .$row->kd_dokter ?>" class="btn btn-secondary">Edit</a></td>
                            <td><a href="<?php echo site_url('dokter/hapus/') . $row->kd_dokter ?>" class="btn btn-danger">Delete</a></td>
                          </tr>
                      <?php endforeach; ?>

                            

</body>
</html>
