<?php $this->extend('layout/template'); ?>
<?php $this->section('content'); ?>
<div class="col-sm-12">
    <a href="<?= base_url('templ/tambah_templ') ?>" class="btn btn-primary btn-sm my-2">Tambah data</a>
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
                <th>Produk</th>
                <th>Komponen</th>
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
            foreach ($templ as $key => $value) { ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $value['produk_id']; ?></td>
                    <td><?= $value['komponen_id']; ?></td>
                    <td><?= $value['status']; ?></td>
                    <td><?= $value['create_date']; ?></td>
                    <td><?= $value['modify_date']; ?></td>
                    <td><?= $value['create_user']; ?></td>
                    <td><?= $value['modify_user']; ?></td>
                    <td>
                        <a href="<?= base_url('templ/edit_templ/' . $value['id']) ?>" <i class="fas fa-edit" style="font-size:18px"></i></a>
                        <a href="<?= base_url('templ/delete_templ/' . $value['id']) ?>" <i class="fas fa-trash-alt" style="font-size:18px;color:red" onclick="return confirm('apakah ingin hapus data') "></i></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php $this->endSection(); ?>