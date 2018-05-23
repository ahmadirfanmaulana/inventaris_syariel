<ul class="breadcrumb" style="padding:0px">
  <li><a href="<?php echo PATH_THEME; ?>user">user</a></li>
  <li class="active">Edit user</li>
</ul>

<?php foreach ($get_where_jb as $row): ?>
  <?php
    if (!empty(isset($edit))) {
      if ($edit == "berhasil") {
        ?>
        <div class="alert alert-success">
          Berhasil Diubah. <a href="<?php echo PATH_THEME; ?>user">Kembali</a>
        </div>
        <?php
      }
      else {
        ?>
        <div class="alert alert-danger">
          Gagal Diubah! Silahkan coba kembali. atau <a href="<?php echo PATH_THEME; ?>user">Kembali</a>
        </div>
        <?php
      }
    }
   ?>
  <div class="row">
    <form class="" action="" method="post">
      <div class="col-md-12">
        <div class="form-group">
          <label for="">User</label>
          <input type="text" name="user_tipe" value="<?php echo $row->user_username; ?>" class="form-control" placeholder="Isikan user">
        </div>
      </div>
      <div class="col-md-12">
        <button type="submit" name="button" class="btn btn-primary" value="button">Update</button>
      </div>
    </form>
  </div>

<?php endforeach; ?>
