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
                  <?php $this->id = $row['id_pengguna'];?>
                  <td><?php echo $row['nama_lengkap']; ?></td>
                  <td><?php echo $row['nama_pengguna']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td><?php echo $row['alamat']; ?></td>
                  <td><?php echo $row['no_tlp']; ?></td>
                  <td><?php echo $row['kata_sandi']; ?></td>
                  <td>
                  <!-- <td><button class="btn btn-primary btn-round"><?php// echo "<a style='color:white' href='belumCetak/lihatKaryawan/".$this->id."'>Lihat</a>"?></button> -->
                  <button class="btn btn-success btn-round"><?php echo "<a style='color:white' href='belumCetak/hapusKaryawan/".$this->id."'>Hapus</a>"?></button>
                  </td>
                          </tr>
                          <?php }; ?>
                        </tbody>
                      </table>