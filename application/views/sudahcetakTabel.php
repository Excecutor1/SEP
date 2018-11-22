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
                            <th>Tanggal</th>                            
                          </tr>
                        </thead>

                        <tbody>
                          <?php foreach($hasil as $row){ ?>
                          <tr class="even pointer">
                  <?php $this->id = $row['ID_CETAK'];?>
                  <td><?php echo $row['ID_CETAK']; ?></td>
                  <td><?php echo $row['NAMA_LAYANAN']; ?></td>
                  <td><?php echo $row['NAMA_LENGKAP']; ?>uji</td>
                  <td><?php echo $row['JENIS_TINTA']; ?></td>
                  <td><?php echo $row['NAMA_STATUS']; ?></td>
                  <td><?php echo $row['JENIS_KERTAS']; ?></td>
                  <td><?php echo $row['BERKAS']; ?></td>
                  <td><?php echo $row['SALINAN']; ?></td>
                  <td><?php echo $row['CETAK_HALAMAN']; ?></td>
                  <td><?php echo $row['KOMENTAR']; ?></td>
                  <td><?php echo $row['TANGGAL']; ?></td>
                          </tr>
                          <?php }; ?>
                        </tbody>
                      </table>