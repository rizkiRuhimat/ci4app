<?= $this->extend('layout/template'); ?>
<?= $this->Section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Detail PIC</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">
                                        <?= $pic['nama']; ?>
                                    </h5>
                                    <p class="card-text"><strong>Nama : </strong></p>
                                    <p class="card-text"><?= $pic['nama']; ?></p>
                                    <p class="card-text"><strong>Username : </strong></p>
                                    <p class="card-text"><?= $pic['alias']; ?></p>
                                    <p class="card-text"><strong>Position : </strong></p>
                                    <p class="card-text"><?= $pic['position']; ?></p>
                                    <p class="card-text"><strong>Phone : </strong></p>
                                    <p class="card-text"><?= $pic['phone']; ?></p>
                                    <p class="card-text"><strong>Tanggal Lahir : </strong></p>
                                    <p class="card-text"><?= $pic['dob']; ?></p>
                                    <p class="card-text"><small class="text-muted">Last Updated on
                                            <?= $pic['updated_at']; ?></small>
                                    </p>
                                    <a href="/pic" class="btn btn-primary"><span class="fas fa-home"></span>
                                        Kembali</a>
                                    <a href="/pic/edit/<?= $pic['id']; ?>" class="btn btn-warning">Edit</a>
                                    <form action="/pic/<?= $pic['id']; ?>" method="POST" class="d-inline">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Apakah anda yakin ?')">Delete</button>
                                    </form><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>