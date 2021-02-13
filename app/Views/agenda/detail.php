<?= $this->extend('layout/template'); ?>
<?= $this->Section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Detail Agenda</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">
                                        <?= $agenda['task_type'] . " - " . $agenda['date']; ?>
                                    </h5>
                                    <p class="card-text"><strong>Task : </strong></p>
                                    <p class="card-text"><?= $agenda['task']; ?></p>
                                    <p class="card-text"><strong>Status : </strong></p>
                                    <p><?= $agenda['status']; ?></p>
                                    <p class="card-text"><strong>Remark : </strong></p>
                                    <p class="card-text"><?= $agenda['remark']; ?></p>
                                    <p class="card-text"><strong>PIC : </strong></p>
                                    <p class="card-text"><?= $agenda['name']; ?></p>
                                    <p class="card-text"><small class="text-muted">Last Updated on
                                            <?= $agenda['updated_at']; ?></small>
                                    </p>
                                    <a href="/agenda" class="btn btn-primary"><span class="fas fa-home"></span>
                                        Kembali</a>
                                    <a href="/agenda/edit/<?= $agenda['id']; ?>" class="btn btn-warning">Edit</a>
                                    <form action="/agenda/<?= $agenda['id']; ?>" method="POST" class="d-inline">
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