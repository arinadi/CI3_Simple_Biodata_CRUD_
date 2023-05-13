<!DOCTYPE html>
<html>
<head>
    <title>Detail Biodata</title>
</head>
<body>
    <h1>Detail Biodata</h1>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $biodata->nama; ?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><?php echo $biodata->tgl_lahir; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?php echo $biodata->jk; ?></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td><?php echo $biodata->agama; ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?php echo $biodata->alamat; ?></td>
        </tr>
        <tr>
            <td>Status</td>
            <td>:</td>
            <td><?php echo $biodata->status; ?></td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>:</td>
            <td><?php echo $biodata->pekerjaan; ?></td>
        </tr>
        <tr>
            <td>Nomor Telepon</td>
            <td>:</td>
            <td><?php echo $biodata->no; ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><?php echo $biodata->email; ?></td>
        </tr>

    </tr>
</table>
<h2>Riwayat Pendidikan</h2>
<a href="<?php echo base_url('pendidikan/create/'.$biodata->id); ?>">Tambah Pendidikan</a>

<table>
    <tr>
        <th>Jenjang</th>
        <th>Nama Sekolah</th>
        <th>Tahun Masuk</th>
        <th>Tahun Lulus</th>
        <th>Aksi</th>
    </tr>

    <?php foreach ($pendidikan as $p) { ?>
    <tr>
        <td><?php echo $p['jenjang']; ?></td>
        <td><?php echo $p['nama_sekolah']; ?></td>
        <td><?php echo $p['start']; ?></td>
        <td><?php echo $p['end']; ?></td>
        <td>
            <a href="<?php echo base_url('pendidikan/edit/'.$p['id']); ?>">Edit</a>
            <a href="<?php echo base_url('pendidikan/delete/'.$p['id']); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
        </td>
    </tr>
    <?php } ?>
</table>
</body>
</html>
