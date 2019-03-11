<?php
  include 'config.php';

  if(isset($_REQUEST['edit'])){
    $id = $_REQUEST['edit'];
    $query     =mysqli_query($koneksi,"SELECT * FROM pendaftaran WHERE id='$id'");
    while($row =mysqli_fetch_array($query)){
      $id          = $row['id'];
      $nama        = $row['nama'];
      $hp          = $row['hp'];
      $jk          = $row['jk'];
      $tgl         = $row['tgl'];
      $fakultas    = $row['fakultas'];
      $peminatan   = $row['peminatan'];
      $pesan       = $row['pesan'];
      $tombol      = 'edit';
    }
  }else{
    $query       = mysqli_fetch_array(mysqli_query($koneksi,"SELECT id AS kd FROM pendaftaran ORDER BY id DESC"));
    $kd          = substr($query['kd'],5);
    $kd_baru     = (int) $kd + 1;
    $id          = 'A'.date('my').sprintf('%04s',$kd_baru);
    $nama        = '';
    $hp          = '';
    $jk          = '';
    $pesan       = '';
    $tombol      = 'daftar';
  }
?>

<h1>Formulir Pendaftaran</h1>
<table class="table">
  <form method="post" action="simpan.php" >
    <tr>
      <td>Id Pendaftar</td>
      <td>:</td>
      <td>
        <input class="form-control" type="text" name="id" readonly value="<?=$id?>">
      </td>
    </tr>
    <tr>
      <td>Nama</td>
      <td>:</td>
      <td>
        <input class="form-control" type="text" name="nama" value="<?=$nama?>" placeholder="nama anda..." required>
      </td>
    </tr>
    <tr>
      <td >No Hp</td>
      <td>:</td>
      <td><input class="form-control" type="text" name="hp" value="<?=$hp?>" placeholder="0838 7553 0005" required></td>
    </tr>
    <tr>
      <td >Tgl Daftar</td>
      <td>:</td>
      <td><input class="form-control" type="date" name="tgl" value="<?=$tgl?>" ></td>
    </tr>
    <tr>
      <td >Jenis Kelamin</td>
      <td>:</td>
      <td>
        <input type="radio" name="jk" value="Laki-Laki" <?php if(isset($_REQUEST['edit'])){echo ($jk == 'Laki-Laki')   ? "checked": "";} ?>> Laki-Laki
        <input type="radio" name="jk" value="Perempuan" <?php if(isset($_REQUEST['edit'])){echo ($jk == 'Perempuan')   ? "checked": "";} ?>> Perempuan
      </td>
    </tr>
    <tr>
      <td >Hobi</td>
      <td>:</td>
      <td>
        <?php
        $query       = mysqli_query($koneksi,"SELECT * FROM m_hobi ");
        while ($row  = mysqli_fetch_array($query)){
          $hobi   = $row['id'];
          $edit   = mysqli_query($koneksi,"SELECT * FROM hobi WHERE id='$id' AND hobi='$hobi'");
          $result = mysqli_num_rows($edit);?>
          <input type="checkbox" name="hobi[]" value="<?=$row['id']?>"<?php if($result >= 1){ echo "checked" ; } ?>> <?= $row['hobi'];?>
      <?php }?>
      </td>
    </tr>
    <tr>
      <td >Fakultas</td>
      <td>:</td>iha
      <td>
        <select class="form-control" name="fakultas">
          <option <?php if(isset($_REQUEST['edit'])){echo ($fakultas == 'Ilmu Komputer') ? "selected": "";} ?>> Ilmu Komputer </option>
          <option <?php if(isset($_REQUEST['edit'])){echo ($fakultas == 'Teknik') ? "selected": "";} ?>> Teknik </option>
          <option <?php if(isset($_REQUEST['edit'])){echo ($fakultas == 'Keguruan & Ilmu Pendidikan') ? "selected": "";} ?>> Keguruan & Ilmu Pendidikan </option>
        </select>
      </td>
    </tr>
    <tr>
      <td >Peminatan</td>
      <td>:</td>
      <td>
        <select class="form-control" name="peminatan">
          <option <?php if(isset($_REQUEST['edit'])){echo ($peminatan == 'Software') ? "selected": "";} ?>> Software  </option>
          <option <?php if(isset($_REQUEST['edit'])){echo ($peminatan == 'Hardware') ? "selected": "";} ?>> Hardware  </option>
          <option <?php if(isset($_REQUEST['edit'])){echo ($peminatan == 'Network')  ? "selected": "";} ?>> Network   </option>
          <option <?php if(isset($_REQUEST['edit'])){echo ($peminatan == 'Design')   ? "selected": "";} ?>> Design    </option>
          <option <?php if(isset($_REQUEST['edit'])){echo ($peminatan == 'GNU/Linux')? "selected": "";} ?>> GNU/Linux </option>
        </select>
      </td>
    </tr>
    <tr>
      <td>Pesan</td>
      <td>:</td>
      <td><textarea class="form-control" name="pesan" cols="50" rows="10"> <?=$pesan?></textarea></td>
    </tr>
    <tr>
      <td>
        <button class="btn btn-success col-md-4" type="submit" name="<?=$tombol?>"> <?=$tombol?> </button>&nbsp;&nbsp;
        <button class="btn" type="reset"> batal </button>
      </td>
      <td></td>
      <td>
        <a href="page.php?content=data_anggota" class="btn btn-danger">kembali</a>
      </td>
    </tr>
  </form>
</table>
