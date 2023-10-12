<?php $this->extend('layout/template'); ?>
<?php $this->section('content'); ?>
<!-- left column -->
<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Klasifikasi</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="<?= base_url('klasifikasi/update_klasifikasi/' . $edit_klasifikasi['id']); ?>" method="post">
            <div class="card-body card-sm">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input name="nama" value="<?= $edit_klasifikasi['nama']; ?>" class="form-control" placeholder="Masukan Nama">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Parent</label>
                    <input name="parent" value="<?= $edit_klasifikasi['parent']; ?>" class="form-control" placeholder="Masukan Parent">
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
</div>
<?php $this->endSection(); ?>