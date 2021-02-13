<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <a href="/pages" class="btn btn-primary my-3"><span class="fas fa-home"></span>Kembali</a>
            <h1 class="mt-2">Daftar Corporate Sandeza</h1>
            <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success" role="alert">
                <?= (session()->getFlashdata('pesan')); ?>
            </div>
            <?php endif; ?>
            <table class="table table-bordered table-striped" id="myTable">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Corporate ID</th>
                        <th scope="col">Name Corporate</th>
                        <th scope="col-span-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($corp as $a) : ?>
                    <input type="hidden" name="id" value="<?= $a['corporate_id_sandeza']; ?>">
                    <tr>
                        <th scope="row" class="align-middle"><?= $no++; ?></th>
                        <td class="align-middle"><?= $a['corporate_id_sandeza']; ?></td>
                        <td class="align-middle"><?= $a['name']; ?></td>
                        <td class="align-middle"><a href="/corporate/<?= $a['corporate_id_sandeza']; ?>"
                                class="btn btn-warning">Detail</a></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>