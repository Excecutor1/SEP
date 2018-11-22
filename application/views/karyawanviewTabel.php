                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>Nama Lengkap</th>
                            <th>Nama Pengguna</th>
                            <th>E-mail</th>
                            <th>Alamat</th>
                            <th>No. Tlp</th>
                            <th>Kata Sandi</th>                            
                            <th> </th>
                          </tr>
                        </thead>

                        <tbody>
                          <?php foreach($hasil as $row){ ?>
                          <tr class="even pointer">
                  <?php $this->id = $row['ID_PENGGUNA'];?>
                  <td><?php echo $row['NAMA_LENGKAP']; ?></td>
                  <td><?php echo $row['NAMA_PENGGUNA']; ?></td>
                  <td><?php echo $row['EMAIL']; ?></td>
                  <td><?php echo $row['ALAMAT']; ?></td>
                  <td><?php echo $row['NO_TLP']; ?></td>
                  <td><?php echo $row['KATA_SANDI']; ?></td>
                  <td>
                  <!-- <td><button class="btn btn-primary btn-round"><?php// echo "<a style='color:white' href='belumCetak/lihatKaryawan/".$this->id."'>Lihat</a>"?></button> -->
                  <button class="btn btn-success btn-round"><?php echo "<a style='color:white' href='belumCetak/hapusKaryawan/".$this->id."'>Hapus</a>"?></button>
                  </td>
                          </tr>
                          <?php }; ?>
                        </tbody>
                      </table>