                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>No. Berkas</th>
                            <th>Layanan</th>
                            <th>Pengguna</th>
                            <th>Tinta</th>
                            <th>Status</th>
                            <th>Kertas</th>
                            <th>Berkas</th>
                            <th>Salinan</th>
                            <th>Halaman di Cetak</th>
                            <th>Komentar</th>
                            <th>Aksi</th>
                            
                          </tr>
                        </thead>

                        <tbody>
                          <?php foreach($hasil as $row){ ?>
                          <tr class="even pointer">
                  <?php $this->id = $row['ID_CETAK'];?>
                  <td><?php echo $row['ID_CETAK']; ?></td>
                  <td><?php echo $row['NAMA_LAYANAN']; ?></td>
                  <td><?php echo $row['NAMA_LENGKAP']; ?></td>
                  <td><?php echo $row['JENIS_TINTA']; ?></td>
                  <td><?php echo $row['NAMA_STATUS']; ?></td>
                  <td><?php echo $row['JENIS_KERTAS']; ?></td>
                  <td><?php echo $row['BERKAS']; ?></td>
                  <td><?php echo $row['SALINAN']; ?></td>
                  <td><?php echo $row['CETAK_HALAMAN']; ?></td>
                  <td><?php echo $row['KOMENTAR']; ?></td>
                  <td><button class="btn btn-primary btn-round"><?php echo "<a style='color:white' href='belumCetak/lihatFile/".$this->id."'>Cetak</a>"?></button>
                  <button class="btn btn-success btn-round"><?php echo "<a style='color:white' href='belumCetak/selesaiCetak/".$this->id."'>Selesai</a>"?></button>
                  </td>
                          </tr>
                          <?php }; ?>
                        </tbody>
                      </table>
