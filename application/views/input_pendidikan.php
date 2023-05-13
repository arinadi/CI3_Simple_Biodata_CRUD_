<h2>Input Pendidikan</h2>

<?php echo form_open('pendidikan/create/'.$profil_id); ?>
<p>
<label for="jenjang">Jenjang:</label>
<select name="jenjang">
    <option value="SD">SD</option>
    <option value="SMP">SMP</option>
    <option value="SMA/K">SMA/K</option>
    <option value="S1">S1</option>
    <option value="S2">S2</option>
</select>
</p><p>
<label for="nama_sekolah">Nama Sekolah:</label>
<input type="text" name="nama_sekolah">
</p><p>
<label for="start">Tahun Masuk:</label>
<input type="number" name="start">
</p><p>
<label for="end">Tahun Lulus:</label>
<input type="number" name="end">
</p><p>
<input type="submit" value="Simpan">
</p>
<?php echo form_close(); ?>
