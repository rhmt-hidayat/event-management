<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>
<title>Data Grup</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <section class="section">
        <div class="section-header">
            <h1>Grup Kontak</h1>
            <div class="section-header-button">
                <a href="<?= site_url('groups/add') ?>" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i> Tambah</a>
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
                    <th>Nama</th>
                    <th>Info</th>
                    <th>Action</th>
                </tr>
                <?php foreach ($group as $key => $value) : ?>
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?= $value->name_group ?></td>
                    <td><?= $value->info_group ?></td>
                    <td class="text-center" style="width:15%">
                        <a href="<?= site_url('group/edit/'.$value->id_group)?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                        <form action="<?= site_url('group/'.$value->id_group) ?>" method="post" style="display:inline-block" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                            <?= csrf_field() ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                        </form>
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