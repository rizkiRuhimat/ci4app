<?= $this->extend('layout/template'); ?>
<?= $this->Section('content'); ?>
<div class="container">

    <div class="card border-dark mb-3 mt-3">
        <div class="card-header">Detail Client</div>
        <div class="card-body text-dark">
            <h5 class="card-title">
                <?= $corp['name'] . " - " . $div['name']; ?>
            </h5>

            <!-- corporate -->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="namecorp">Name Corporate</label>
                    <input type="text" readonly class="form-control" id="namecorp" value="<?= $corp['name']; ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="idcorp">Corporate ID</label>
                    <input type="text" readonly class="form-control" id="idcorp"
                        value="<?= $corp['corporate_id_sandeza']; ?>">
                </div>
            </div>

            <!-- division -->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="namediv">Name Divisi</label>
                    <input type="text" readonly class="form-control" id="namediv" value="<?= $div['name']; ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="divid">ID Divisi</label>
                    <input type="text" readonly class="form-control" id="divid"
                        value="<?= $div['division_id_sandeza']; ?>">
                </div>
            </div>

            <!-- Sender -->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="sender">Name Sender</label>
                    <input type="text" readonly class="form-control" id="sender" value="<?= $div['name']; ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="senderid">Alias Sender</label>
                    <input type="text" readonly class="form-control" id="senderid" value='<?= $div["alias_sender"]; ?>'>
                </div>
            </div>

            <!-- tcp -->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nametcp">Username TCP</label>
                    <input type="text" readonly class="form-control" id="corporate" value="<?= $div['username']; ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="passtcp">Password TCP</label>
                    <input type="text" readonly class="form-control" id="corporate" value="<?= $div['password']; ?>">
                </div>
            </div>

            <!-- Reports -->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="statussend">URL Status Sent to Client</label>
                    <input type="text" readonly class="form-control" id="statussend"
                        value="<?= $div['url_sent_to_client']; ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="statusdlvr">URL Status Delivery to Client</label>
                    <input type="text" readonly class="form-control" id="statusdlvr"
                        value="<?= $div['url_delivery_to_client']; ?>">
                </div>
            </div>

            <!-- Other -->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="validate">Whitelist Ip (client)</label>
                    <input type="text" readonly class="form-control" id="validate" value="<?= $div['ip_whitelist']; ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="service">Services</label>
                    <input type="text" readonly class="form-control" id="service" value="<?= $div['service_type']; ?>">
                </div>
            </div>

            <p class="card-text"><small class="text-muted">Last Updated on
                    <strong><?= $div['time_update']; ?></strong></small>
            </p>
            <a href="/division" class="btn btn-primary"><span class="fas fa-home"></span>
                Kembali</a>
            <a href="/division/edit/<?= $div['id']; ?>" class="btn btn-warning">Edit</a>
            <form action="/division/<?= $div['id']; ?>" method="POST" class="d-inline">
                <?= csrf_field(); ?>
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger"
                    onclick="return confirm('Apakah anda yakin ?')">Delete</button>
            </form><br>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>