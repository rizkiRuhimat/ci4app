<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <a href="/agenda/create" class="btn btn-primary my-3">Tambah Data</a>
            <h1 class="mt-2">Daftar Agenda</h1>
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
                        <th scope="col">Date</th>
                        <th scope="col">Type Task</th>
                        <th scope="col">Task</th>
                        <th scope="col">Status</th>
                        <th scope="col">Remark</th>
                        <th scope="col-span-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($agenda as $a) : ?>
                    <tr>
                        <th scope="row" class="align-middle"><?= $no++; ?></th>
                        <td class="align-middle"><?= $a['name']; ?></td>
                        <td class="align-middle"><?= $a['date']; ?></td>
                        <td class="align-middle"><?= $a['task_type']; ?></td>
                        <td class="align-middle"><?= $a['task']; ?></td>
                        <td class="align-middle"><?= $a['status']; ?></td>
                        <td class="align-middle"><?= $a['remark']; ?></td>
                        <td class="align-middle"><a href="/agenda/<?= $a['id']; ?>" class="btn btn-warning">Detail</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>