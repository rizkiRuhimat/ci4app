<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <a href="/sandeza/create" class="btn btn-primary my-3">Tambah Data</a>
            <a href="/pages" class="btn btn-primary my-3"><span class="fas fa-home"></span>Kembali</a>
            <h1 class="mt-2">Daftar Client Sandeza</h1>
            <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success" role="alert">
                <?= (session()->getFlashdata('pesan')); ?>
            </div>
            <?php endif; ?>
            <table class="table table-bordered table-striped" id="myTable">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name Corporate</th>
                        <th scope="col">Name Divisi</th>
                        <th scope="col">Status</th>
                        <th scope="col">Date Created</th>
                        <th scope="col">Date Modified</th>
                        <th scope="col-span-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($sandeza as $a) : ?>
                    <tr>
                        <th scope="row" class="align-middle"><?= $no++; ?></th>
                        <td class="align-middle"><?= $a['name-c']; ?></td>
                        <td class="align-middle"><?= $a['div-name']; ?></td>
                        <td class="align-middle"><?= $a['status']; ?></td>
                        <td class="align-middle"><?= $a['created_at']; ?></td>
                        <td class="align-middle"><?= $a['updated_at']; ?></td>
                        <td class="align-middle"><a href="/sandeza/<?= $a['id']; ?>" class="btn btn-warning">Detail</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>