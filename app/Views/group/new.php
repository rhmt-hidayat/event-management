<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>
<title>Data Group</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <section class="section">
        <div class="section-header">
        <div class="section-header-back">
            <a href="<?= site_url('groups') ?>" class="btn btn-icon icon-left btn-primary"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Create Group</h1>
        </div>

        <div class="section-body">
        <div class="card">
            <div class="card-header">
            <h4>Buat Group Kontak</h4>
            </div>
            <div class="card-body">
            <form action="<?= site_url('groups') ?>" method="post">
                <?= csrf_field() ?>
                <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Group</label>
                <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control" name="name_group" required autofocus>
                </div>
                </div>
                <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Info Group</label>
                <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control" name="info_group" required>
                </div>
                </div>
                <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                <div class="col-sm-12 col-md-7">
                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Save</button>
                    <button type="reset" class="btn btn-secondary"><i class="fas fa-redo"></i> Reset</button>
                </div>
                </div>
            </form>
            </div>
        </div>
        </div>
    </section>
<?= $this->endSection() ?>