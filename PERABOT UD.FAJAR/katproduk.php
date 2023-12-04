<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tb_kategori_produk");
while ($record = mysqli_fetch_array($query)) {
  $result[] = $record;
}

?>
<div class="col-lg-9 mt-2">
  <div class="card">
    <div class="card-header">
      Halaman Kategori Produk
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col d-flex justify-content-end">
          <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#ModalTambahUser"> Tambah Kategori Produk</button>
        </div>
      </div>

      <!-- Modal Tambah Kategori produk-->
      <div class="modal fade" id="ModalTambahUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Kategori Produk</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="needs-validation" novalidate action="proses/proses_input_katmenu.php" method="POST">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" name="jenismenu" id="">
                                                <option value="1">Kasur</option>
                                                <option value="2">Lemari</option>
                                                <option value="3">Meja</option>
                                            </select>
                                            <label for="floatingInput">Jenis Produk</label>
                                            <div class="invalid-feedback">
                                                Masukkan Jenis Produk
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="Kategori Produk" name="katproduk" required>
                                            <label for="floatingInput">Kategori Produk</label>
                                            <div class="invalid-feedback">
                                                Masukkan Kategori Produk
                                            </div>
                                        </div>
                                    </div>
                                </div>                                    

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name="input_katmenu_validate" value="12345">Save changes</button>
                                    </div>
                                </form>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Modal Tambah Kategori Menu Baru-->

      <?php
      foreach ($result as $row) {
      ?>

        <!-- Modal Edit-->
        <div class="modal fade" id="ModalEdit<?php echo $row['id_kat_menu'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Kategori Produk</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <form class="needs-validation" novalidate action="proses/proses_edit_katmenu.php" method="POST">
                                <input type="hidden" value="<?php echo $row['id_kat_menu'] ?>" name="id">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                        <select class="form-select" aria-label="Default select example" required name="jenismenu" id="">
                                                        <?php
                                                        $data = array("Kasur", "Lemari");
                                                        foreach ($data as $key => $value) {
                                                            if ($row['jenis_menu'] == $key + 1) {
                                                                echo "<option selected value=" . ($key + 1) . ">$value</option>";
                                                            } else {
                                                                echo "<option value=" . ($key + 1) . ">$value</option>";
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                            <label for="floatingInput">Jenis Produk</label>
                                            <div class="invalid-feedback">
                                                Masukkan Jenis Produk
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="Kategori Produk" name="katproduk" required value="<?php echo $row ['kategori_produk']?>">
                                            <label for="floatingInput">Kategori Menu</label>
                                            <div class="invalid-feedback">
                                                Masukkan Kategori Produk
                                            </div>
                                        </div>
                                    </div>
                                </div>                                    

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name="input_katmenu_validate" value="12345">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal Edit-->

        <!-- Modal Delete -->
        <div class="modal fade" id="ModalDelete<?php echo $row['id_kat_menu'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-md modal-fullscreen-md-down">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Data Kategori Menu</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form class="needs-validation" novalidate action="proses/proses_delete_katmenu.php" method="POST">
                  <input type="hidden" value="<?php echo $row['id_kat_menu'] ?>" name="id">
                  <div class="col-lg-12">
                    Apakah anda ingin menghapus kategori <b><?php echo $row['kategori_menu'] ?></b>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger" name="hapus_kategori_validate" value="12345">Hapus</button>
                  </div>
                </form>
              </div>

            </div>
          </div>
        </div>
        <!-- akhir Modal Delete -->


      <?php
      }
      if (empty($result)) {
        echo "Data user tidak ada";
      } else {
      ?>
      <!-- Tabel Daftar Kategori Menu -->
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Jenis Produk</th>
                <th scope="col">Kategori Produk</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($result as $row) {
              ?>
                <tr>
                  <th scope="row"><?php echo $no++ ?></th>
                  <td><?php echo ($row['jenis_produk']==1) ? "Kasur" : "Lemari"?>
                  </td>
                  <td><?php echo $row['kategori_produk'] ?></td>
                  
                  <td class="d-flex">
                    <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal" 
                    data-bs-target="#ModalEdit<?php echo $row['id_kat_produk'] ?>"><i 
                    class="bi bi-pencil-square"></i></i></button>
                    <button class="btn btn-danger btn-sm me-1" data-bs-toggle="modal" 
                    data-bs-target="#ModalDelete<?php echo $row['id_kat_produk'] ?>"><i 
                    class="bi bi-trash3"></i></i></button>
                  </td>
                </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
        </div>
            <!-- Akhir Tabel Daftar Kategori Menu -->
      <?php
      }
      ?>
    </div>
  </div>
</div>