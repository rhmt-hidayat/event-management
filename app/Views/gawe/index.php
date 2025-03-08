<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>
<title>Data Gawe</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <section class="section">
        <div class="section-header">
            <h1>Gawe / Acara</h1>
            <div class="section-header-button">
                <a href="<?= site_url('gawe/add') ?>" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i> Tambah</a>
            </div>
        </div>

        <!-- alert session -->
        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= session()->getFlashdata('success') ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= session()->getFlashdata('error') ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>

        <div class="section-body">
        <div class="card">
            <div class="card-header">
            <h4>Data Tabel</h4>
            </div>
            <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-md">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Created At</th>
                    <th>Information</th>
                    <th>Action</th>
                </tr>
                <?php foreach ($gawe as $key => $value) : ?>
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?= $value->name_gawe ?></td>
                    <td><?= date('d F Y', strtotime($value->date_gawe)); ?></td>
                    <td><?= $value->info_gawe ?></td>
                    <td class="text-center" style="width:15%">
                        <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                        <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
                </table>
            </div>
            </div>
        </div>
        </div>
    </section>
<?= $this->endSection() ?>