<!DOCTYPE html>
<html>
<head>
    <title>List Biodata</title>
</head>
<body>
    <h1>List Biodata</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Alamat</th>
                <th>Status</th>
                <th>Pekerjaan</th>
                <th>Nomor Telepon</th>
                <th>Email</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach ($biodata as $data) { ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data->nama; ?></td>
                    <td><?php echo $data->tgl_lahir; ?></td>
                    <td><?php echo $data->jk; ?></td>
                    <td><?php echo $data->agama; ?></td>
                    <td><?php echo $data->alamat; ?></td>
                    <td><?php echo $data->status; ?></td>
                    <td><?php echo $data->pekerjaan; ?></td>
                    <td><?php echo $data->no; ?></td>
                    <td><?php echo $data->email; ?></td>
                    <th>
                        <a href="<?php echo base_url('biodata/detail/'.$data->id); ?>">Detail</a>
                        <a href="<?php echo base_url('biodata/edit/'.$data->id); ?>">Edit</a>
                        <a href="<?php echo base_url('biodata/delete/'.$data->id); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                    </th>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
