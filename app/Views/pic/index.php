<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <a href="/pages" class="btn btn-primary"><span class="fas fa-home"></span> Kembali</a>
            <a href="/pic/create" class="btn btn-primary my-3">Tambah Data</a>
            <h1 class="mt-2">Daftar PIC</h1>
            <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success" role="alert">
                <?= (session()->getFlashdata('pesan')); ?>
            </div>
            <?php endif; ?>
            <table class="table table-bordered table-striped" id="myTable">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alias</th>
                        <th scope="col-span-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($pic as $p) : ?>
                    <tr>
                        <th scope="row" class="align-middle"><?= $no++; ?></th>
                        <td class="align-middle"><?= $p['nama']; ?></td>
                        <td class="align-middle"><?= $p['alias']; ?></td>
                        <td class="align-middle"><a href="/pic/<?= $p['id']; ?>" class="btn btn-warning">Detail</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>