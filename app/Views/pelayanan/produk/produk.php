<?php $this->extend('layout/template'); ?>
<?php $this->section('content'); ?>
<div class="col-sm-12">
    <a href="<?= base_url('produk/tambah_produk') ?>" class="btn btn-primary btn-sm my-2">Tambah data</a>
    <?php
    if (!empty(session()->getFlashdata('sukses'))) { ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('sukses'); ?>
        </div>
    <?php } ?>
    <table id="example1" class="table table-bordered table-striped table-sm text-middle">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Klasifikasi</th>
                <th>Status</th>
                <th>Tanggal Dibuat</th>
                <th>tanggal Diedit</th>
                <th>Pengguna</th>
                <th>Edit Pengguna</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($produk as $key => $value) { ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $value['nama']; ?></td>
                    <td><?= $value['klasifikasi']; ?></td>
                    <td><?= $value['status']; ?></td>
                    <td><?= $value['create_date']; ?></td>
                    <td><?= $value['modify_date']; ?></td>
                    <td><?= $value['create_user']; ?></td>
                    <td><?= $value['modify_user']; ?></td>
                    <td>
                        <a href="<?= base_url('produk/edit_produk/' . $value['id']) ?>" <i class="fas fa-edit" style="font-size:18px"></i></a>
                        <a href="<?= base_url('produk/delete_produk/' . $value['id']) ?>" <i class="fas fa-trash-alt" style="font-size:18px;color:red" onclick="return confirm('apakah ingin hapus data') "></i></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php $this->endSection(); ?>