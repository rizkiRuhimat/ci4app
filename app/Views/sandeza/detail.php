<?= $this->extend('layout/template'); ?>
<?= $this->Section('content'); ?>
<div class="container">

    <div class="card border-dark mb-3 mt-3">
        <div class="card-header">Detail Client</div>
        <div class="card-body text-dark">
            <h5 class="card-title">
                <?= $sandeza['name-c'] . " - " . $sandeza['div-name']; ?>
            </h5>

            <!-- corporate -->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="namecorp">Name Corporate</label>
                    <input type="text" readonly class="form-control" id="namecorp" value="<?= $sandeza['name-c']; ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="idcorp">Corporate ID</label>
                    <input type="text" readonly class="form-control" id="idcorp"
                        value="<?= $sandeza['id-c-sandeza']; ?>">
                </div>
            </div>

            <!-- division -->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="namediv">Name Divisi</label>
                    <input type="text" readonly class="form-control" id="namediv" value="<?= $sandeza['div-name']; ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="divid">ID Divisi</label>
                    <input type="text" readonly class="form-control" id="divid"
                        value="<?= $sandeza['id-div-sandeza']; ?>">
                </div>
            </div>

            <!-- Sender -->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="sender">Name Sender</label>
                    <input type="text" readonly class="form-control" id="sender"
                        value="<?= $sandeza['name-sender']; ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="senderid">Sender Id</label>
                    <input type="text" readonly class="form-control" id="senderid"
                        value="<?= $sandeza['sender-id']; ?>">
                </div>
            </div>

            <!-- tcp -->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nametcp">Username TCP</label>
                    <input type="text" readonly class="form-control" id="corporate" value="<?= $sandeza['tcpuser']; ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="passtcp">Password TCP</label>
                    <input type="text" readonly class="form-control" id="corporate" value="<?= $sandeza['tcppass']; ?>">
                </div>
            </div>

            <!-- WEB -->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="webuser">Username Web</label>
                    <input type="text" readonly class="form-control" id="webuser" value="<?= $sandeza['webuser']; ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="webpass">Password Web</label>
                    <input type="text" readonly class="form-control" id="webpass" value="<?= $sandeza['webpass']; ?>">
                </div>
            </div>

            <!-- Reports -->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="statussend">URL Status Sent to Client</label>
                    <input type="text" readonly class="form-control" id="statussend"
                        value="<?= $sandeza['url_status_send']; ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="statusdlvr">URL Status Delivery to Client</label>
                    <input type="text" readonly class="form-control" id="statusdlvr"
                        value="<?= $sandeza['url_status_delivery']; ?>">
                </div>
            </div>

            <!-- Other -->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="validate">Whitelist OTP</label>
                    <input type="text" readonly class="form-control" id="validate"
                        value="<?= $sandeza['validator']; ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="service">Services</label>
                    <input type="text" readonly class="form-control" id="service" value="<?= $sandeza['services']; ?>">
                </div>
            </div>

            <p class="card-text"><small class="text-muted">Last Updated on
                    <strong><?= $sandeza['updated_at']; ?></strong></small>
            </p>
            <a href="/sandeza" class="btn btn-primary"><span class="fas fa-home"></span>
                Kembali</a>
            <a href="/sandeza/edit/<?= $sandeza['id']; ?>" class="btn btn-warning">Edit</a>
            <form action="/sandeza/<?= $sandeza['id']; ?>" method="POST" class="d-inline">
                <?= csrf_field(); ?>
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger"
                    onclick="return confirm('Apakah anda yakin ?')">Delete</button>
            </form><br>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>