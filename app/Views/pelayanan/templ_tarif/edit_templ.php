<?php $this->extend('layout/template'); ?>
<?php $this->section('content'); ?>
<!-- left column -->
<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Template</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="<?= base_url('templ/update_templ/' . $edit_templ['id']); ?>" method="post">
            <div class="card-body card-sm">
                <div class="form-group">
                    <label for="exampleInputEmail1">Produk</label>
                    <input name="produk_id" value="<?= $edit_templ['produk_id']; ?>" class="form-control" placeholder="Masukan Nama">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Komponen</label>
                    <input name="komponen_id" value="<?= $edit_templ['komponen_id']; ?>" class="form-control" placeholder="Masukan Komponen">
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" class="form-control">
                        <option value="" disabled selected>Pilih Status</option>
                        <option value="aktif" <?= $edit_templ['status'] === 'aktif' ? ' selected' : '' ?>>Aktif</option>
                        <option value="tidak aktif" <?= $edit_templ['status'] === 'tidak aktif' ? ' selected' : '' ?>>Tidak Aktif</option>
                    </select>
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