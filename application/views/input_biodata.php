<!DOCTYPE html>
<html>
<head>
  <title>Input Biodata</title>
</head>
<body>
  <h1>Input Biodata</h1>
  <?php echo form_open_multipart('biodata/save_biodata'); ?>
  <p>
    <label for="nama">Nama</label>
    <input type="text" name="nama" id="nama" required>
  </p>
  <p>
    <label for="tgl_lahir">Tanggal Lahir</label>
    <input type="date" name="tgl_lahir" id="tgl_lahir" required>
  </p>
  <p>
    <label for="jk">Jenis Kelamin</label>
    <select name="jk" id="jk" required>
      <option value="">--Pilih Jenis Kelamin--</option>
      <option value="Laki-laki">Laki-laki</option>
      <option value="Perempuan">Perempuan</option>
    </select>
  </p>
  <p>
    <label for="agama">Agama</label>
    <select name="agama" id="agama" required>
      <option value="">--Pilih Agama--</option>
      <option value="Islam">Islam</option>
      <option value="Kristen">Kristen</option>
      <option value="Katolik">Katolik</option>
      <option value="Budha">Budha</option>
      <option value="Hindu">Hindu</option>
    </select>
  </p>
  <p>
    <label for="alamat">Alamat</label>
    <textarea name="alamat" id="alamat" required></textarea>
  </p>
  <p>
    <label for="status">Status</label>
    <select name="status" id="status" required>
      <option value="">--Pilih Status--</option>
      <option value="Menikah">Menikah</option>
      <option value="Belum Menikah">Belum Menikah</option>
    </select>
  </p>
  <p>
    <label for="pekerjaan">Pekerjaan</label>
    <input type="text" name="pekerjaan" id="pekerjaan" required>
  </p>
  <p>
    <label for="no_telp">No. Telepon</label>
    <input type="tel" name="no_telp" id="no_telp" required>
  </p>
  <p>
    <label for="email">Email</label>
    <input type="email" name="email" id="email" required>
  </p>
  <p>
    <label for="foto">Foto</label>
    <input type="file" name="foto" id="foto">
  </p>
  <p>
    <input type="submit" value="Simpan">
  </p>
  <?php echo form_close(); ?>
</body>
</html>
