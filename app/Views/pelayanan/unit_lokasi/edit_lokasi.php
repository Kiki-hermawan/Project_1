<?php $this->extend('layout/template'); ?>
<?php $this->section('content'); ?>
<!-- left column -->
<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Lokasi</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="<?= base_url('lokasi/update_lokasi/' . $edit_lokasi['id']); ?>" method="post">
            <div class="card-body card-sm">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lokasi</label>
                    <input name="nama" value="<?= $edit_lokasi['nama']; ?>" class="form-control" placeholder="Masukan Nama">
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