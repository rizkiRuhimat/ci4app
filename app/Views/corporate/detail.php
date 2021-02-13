<?= $this->extend('layout/template'); ?>
<?= $this->Section('content'); ?>
<div class="container-fluid">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-9">
        <div class="card mt-3 mb-3">
            <div class="row no-gutters">
                <div class="card-body">
                    <h5 class="card-title">
                        <h2><?= $corp['name']; ?></h2>
                        <address><?= $corp['address']; ?></address>
                    </h5>
                    <hr>
                    <!-- corporate  -->
                    <div class="row">
                        <div class="col">
                            <label for="namec">Corporate ID</label>
                        </div>
                        <div class="col">
                            <input type="text" name="namec" id="namec" class="form-control col-sm"
                                value="<?= $corp['corporate_id_sandeza']; ?>" readonly>
                        </div>
                    </div>
                    <!-- division -->
                    <div class="row">
                        <div class="col">
                            <label for="namec">Division Name</label>
                        </div>
                        <div class="col">
                            <?php $alias = explode('"', $div['alias_sender']); ?>
                            <input type="text" name="namec" id="namec" class="form-control input-group col-sm"
                                value="<?= $div['name']; ?>" readonly>
                        </div>
                    </div>
                    <!-- alias sender -->
                    <div class="row">
                        <div class="col">
                            <label for="namec">Alias Sender</label>
                        </div>
                        <div class="col">
                            <input type="text" name="namec" id="namec" class="form-control col-sm"
                                value="belum bisa parsing nya hehehe" readonly>
                        </div>
                    </div>
                    <hr>
                    <!-- table -->
                    <div class="row">
                        <div class="col">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Divisi</th>
                                        <th>Username TCP</th>
                                        <th>Password TCP</th>
                                        <th>Alias Sender</th>
                                        <th>Division ID</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $div['name']; ?></td>
                                        <td><?= $div['username']; ?></td>
                                        <td><?= $div['password']; ?></td>
                                        <td><?= $div['alias_sender']; ?></td>
                                        <td><?= $div['division_id_sandeza']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <hr>
                    <!-- button -->
                    <div class="row">
                        <div class="col">
                            <a href="/corporate" class="btn btn-primary"><span class="fas fa-home"></span>
                                Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>