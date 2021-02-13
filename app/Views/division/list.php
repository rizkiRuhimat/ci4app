<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <!-- <a href="/division/create" class="btn btn-primary my-3">Tambah Data</a> -->
            <a href="/division" class="btn btn-primary my-3"><span class="fas fa-home"></span>Kembali</a>
            <h1 class="mt-2">List Division <?= $corp['name']; ?></h1>
            <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success" role="alert">
                <?= (session()->getFlashdata('pesan')); ?>
            </div>
            <?php endif; ?>
            <table class="table table-bordered table-striped" id="myTable">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Division Id</th>
                        <th scope="col">Name Division</th>
                        <th scope="col">Alias Sender</th>
                        <th scope="col">Sender Id</th>
                        <th scope="col">Username TCP</th>
                        <th scope="col">Password TCP</th>
                        <th scope="col">Url Status Sent to Client</th>
                        <th scope="col">Url Status Delivery to Client</th>
                        <th scope="col">Service Type</th>
                        <th scope="col">Date Created</th>
                        <th scope="col">Date Modified</th>
                        <th scope="col-span-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($div as $d) : ?>
                    <tr>
                        <th scope="row" class="align-middle"><?= $no++; ?></th>
                        <td class="align-middle"><?= $d['division_id_sandeza']; ?></td>
                        <td class="align-middle"><?= $d['name']; ?></td>
                        <td class="align-middle"><?= $d['alias_sender']; ?></td>
                        <td class="align-middle"><?= $d['id-g-send']; ?></td>
                        <td class="align-middle"><?= $d['username']; ?></td>
                        <td class="align-middle"><?= $d['password']; ?></td>
                        <td class="align-middle"><?= $d['url_sent_to_client']; ?></td>
                        <td class="align-middle"><?= $d['url_delivery_to_client']; ?></td>
                        <td class="align-middle"><?= $d['service_type']; ?></td>
                        <td class="align-middle"><?= $d['time_insert']; ?></td>
                        <td class="align-middle"><?= $d['time_update']; ?></td>
                        <td class="align-middle"><a href="/division/<?= $d['id']; ?>" class="btn btn-warning">Detail</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">


    </div>
</div>
<?= $this->endSection(); ?>