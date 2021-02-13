<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Daftar Komik</h1>
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Masukkan keyword pencarian .." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-success" type="submit" name="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <!-- <a href="/orang/create" class="btn btn-primary my-3">Tambah Data</a> -->
            <!-- <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success" role="alert">
                <?= (session()->getFlashdata('pesan')); ?>
            </div>
            <?php endif; ?> -->
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Kota</th>
                        <th scope="col">KodePos</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1 + (5 * ($currentPage - 1)); ?>
                    <?php foreach ($orang as $o) : ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $o['nama']; ?></td>
                        <td><?= $o['alamat']; ?></td>
                        <td><?= $o['kota']; ?></td>
                        <td><?= $o['kodepos']; ?></td>
                        <td><a href="" class="btn btn-success"><span class="fas fa-eye"></span></a></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $pager->links('orang', 'orang_pagination'); ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>