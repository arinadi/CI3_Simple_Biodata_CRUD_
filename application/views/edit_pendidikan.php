<h2>Edit Pendidikan</h2>

<?php echo form_open('pendidikan/edit/'.$pendidikan['id']); ?>
<p>
<label for="jenjang">Jenjang:</label>
<select name="jenjang">
    <option value="SD" <?php if($pendidikan['jenjang'] == 'SD') echo 'selected'; ?>>SD</option>
    <option value="SMP" <?php if($pendidikan['jenjang'] == 'SMP') echo 'selected'; ?>>SMP</option>
    <option value="SMA/K" <?php if($pendidikan['jenjang'] == 'SMA/K') echo 'selected'; ?>>SMA/K</option>
    <option value="S1" <?php if($pendidikan['jenjang'] == 'S1') echo 'selected'; ?>>S1</option>
    <option value="S2" <?php if($pendidikan['jenjang'] == 'S2') echo 'selected'; ?>>S2</option>
</select>
</p><p>
<label for="nama_sekolah">Nama Sekolah:</label>
<input type="text" name="nama_sekolah" value="<?php echo $pendidikan['nama_sekolah']; ?>">
</p><p>
<label for="start">Tahun Masuk:</label>
<input type="number" name="start" value="<?php echo $pendidikan['start']; ?>">
</p><p>
<label for="end">Tahun Lulus:</label>
<input type="number" name="end" value="<?php echo $pendidikan['end']; ?>">
</p><p>
<input type="submit" value="Simpan">
</p>
<?php echo form_close(); ?>
