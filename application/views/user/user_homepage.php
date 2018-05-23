<ul class="breadcrumb" style="padding:0px">
</ul>
<li class="active">Dana Barang</li>

<div class="text-right">
  <?php
    if ($user_level != "admin") {
      # code...
    }
    else {
      ?>
      <a href="<?php echo PATH_THEME; ?>user/tambah">
        <button type="button" name="button" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</button>
      </a>
      <?php
    }
     ?>
</div>

<br>
<br>

<table class="table table-bordered" id="myTable">
  <!-- <form class="" action="<?php echo PATH_THEME; ?>inventaris/result" method="post">
    <div class="input-group">
      <input type="text" name="search" value="" class="form-control" placeholder="Cari barang...">
      <div class="input-group-btn">
        <button type="submit" name="button" value="button" class="btn btn-info"><i class="fa fa-search"></i></button>
      </div>
    </div>
  </form> -->
<thead>
  <tr>
    <th class="text-center">Id User</th>
    <th class="text-center">Nama User</th>
    <?php
    if ($user_level != "admin") {
      # code...
    }
    else {
      ?>
      <th class="text-center">Aksi</th>
      <?php
    }
     ?>
  </tr>
</thead>
<tbody>
<?php
$no = 1;
foreach ($get_jb as $key) {
  ?>
  <tr>
    <td class="text-center"><?php echo $no; ?></td>
    <td><?php echo $key->user_username; ?></td>
    <?php
    if ($user_level != "admin") {
      # code...
    }
    else {
      ?>
      <td class="text-center">
        <a href="<?php echo PATH_THEME; ?>user/edit/<?php echo $key->user_id; ?>">
          <button type="button" name="button" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</button>
        </a>

        <a href="<?php echo PATH_THEME; ?>user/hapus/<?php echo $key->user_id; ?>">
          <button type="button" name="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</button>
        </a>

      </td>
      <?php
    }
     ?>
  </tr>
  <?php
  $no++;
}
 ?>
</tbody>
</table>
