<?php $this->extend('layout/template'); ?>
<?php $this->section('content'); ?>
<!-- left column -->
<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title ">Tambah Data</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="<?= base_url('klasifikasi/save_klasifikasi') ?>" method="post">
            <div class="card-body">
                <div class="form-group">
                    <label>Nama</label>
                    <input name="nama" class="form-control" placeholder="Masukan Nama">
                </div>
                <div class="form-group">
                    <label>Parent</label>
                    <input name="parent" class="form-control" placeholder="Masukan Parent">
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
</div>
<?php $this->endSection(); ?>