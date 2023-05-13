<h2>Edit Biodata</h2>
<?php echo form_open_multipart('biodata/edit/'.$biodata['id']); ?>
<input type="hidden" name="id" value="<?php echo $biodata['id']; ?>">
<label for="nama">Nama:</label>
<input type="text" name="nama" value="<?php echo $biodata['nama']; ?>">
<p>
<label for="tgl_lahir">Tanggal Lahir:</label>
<input type="date" name="tgl_lahir" value="<?php echo $biodata['tgl_lahir']; ?>">
</p><p>
<label for="jk">Jenis Kelamin:</label>
<input type="radio" name="jk" value="Laki-laki" <?php if ($biodata['jk'] == 'Laki-laki') echo 'checked'; ?>>Laki-laki
<input type="radio" name="jk" value="Perempuan" <?php if ($biodata['jk'] == 'Perempuan') echo 'checked'; ?>>Perempuan
</p><p>
<label for="agama">Agama:</label>
<select name="agama">
<option value="Islam" <?php if ($biodata['agama'] == 'Islam') echo 'selected'; ?>>Islam</option>
<option value="Kristen" <?php if ($biodata['agama'] == 'Kristen') echo 'selected'; ?>>Kristen</option>
<option value="Katolik" <?php if ($biodata['agama'] == 'Katolik') echo 'selected'; ?>>Katolik</option>
<option value="Budha" <?php if ($biodata['agama'] == 'Budha') echo 'selected'; ?>>Budha</option>
<option value="Hindu" <?php if ($biodata['agama'] == 'Hindu') echo 'selected'; ?>>Hindu</option>
</select>
</p><p>
<label for="alamat">Alamat:</label>

<textarea name="alamat"><?php echo $biodata['alamat']; ?></textarea>
</p><p>
<label for="status">Status:</label>
<input type="radio" name="status" value="Menikah" <?php if ($biodata['status'] == 'Menikah') echo 'checked'; ?>>Menikah
<input type="radio" name="status" value="Belum Menikah" <?php if ($biodata['status'] == 'Belum Menikah') echo 'checked'; ?>>Belum Menikah
</p><p>
<label for="pekerjaan">Pekerjaan:</label>
<input type="text" name="pekerjaan" value="<?php echo $biodata['pekerjaan']; ?>">
</p><p>
<label for="no_telp">No. Telp:</label>
<input type="text" name="no_telp" value="<?php echo $biodata['no']; ?>">
</p><p>
<label for="email">Email:</label>
<input type="email" name="email" value="<?php echo $biodata['email']; ?>">
</p>
<br>
<input type="submit" value="Simpan">
<?php echo form_close(); ?>