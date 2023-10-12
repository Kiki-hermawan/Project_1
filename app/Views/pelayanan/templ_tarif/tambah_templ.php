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
        <form role="form" action="<?= base_url('templ/save_templ') ?>" method="post">
            <div class="card-body">
                <div class="form-group">
                    <label>Produk</label>
                    <input name="produk_id" class="form-control" placeholder="Masukan Nama">
                </div>
                <div class="form-group">
                    <label>Komponen</label>
                    <input name="komponen_id" class="form-control" placeholder="Masukan Tipe">
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" class="form-control">
                        <option value="" disabled selected>Pilih Status</option>
                        <option value="aktif">Aktif</option>
                        <option value="tidak aktif">Tidak Aktif</option>
                    </select>
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