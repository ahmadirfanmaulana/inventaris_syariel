<ul class="breadcrumb" style="padding:0px">
  <li><a href="<?php echo PATH_THEME; ?>jenis_barang">user</a></li>
  <li class="active">Hapus User</li>
</ul>

          <?php
          $delete_jb = isset($delete_jb) ? $delete_jb : "";
          if (empty($delete_jb)) {
            ?>
              <h4>Konfirmasi Penghapusan</h4>
              <?php foreach ($get_where_jb as $key): ?>
                Apakah anda ingin menghapus <?php echo $key->user_username ; ?> ?
              <?php endforeach; ?>
              <br><br>
            <?php
          }
          else {
            if ($delete_jb == "berhasil") {
              ?>
              <div class="alert alert-success">
                Berhasil Dihapus. <a href="<?php echo PATH_THEME; ?>user">Kembali</a>
              </div>
              <?php
            }
            else {
              ?>
              <div class="alert alert-danger">
                Gagal Dihapus. Coba Kembali !</a>
              </div>
              <?php
            }
          }
           ?>

      <?php
      if (empty($delete_jb)) {
        ?>
            <form class="" action="" method="post">
              <button type="submit" name="button" value="button" class="btn btn-danger"><i class="fa fa-trash"></i> Konfirmasi Penghapusan Disini</button>
            </form>
        <?php
      }
      else {
        # code...
      }
       ?>
