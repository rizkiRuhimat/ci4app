<?= $this->extend('layout/template'); ?>
<?= $this->Section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md">
            <h2 class="my-3">Form Ubah Data</h2>
            <form action="/sandeza/update/<?= $sandeza['id']; ?>" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="id" value="<?= $sandeza['id']; ?>">

                <!-- input old API -->
                <div class="form-group row">
                    <label for="api" class="col-md-3 col-form-label">Rest API webSMS</label>
                    <div class="col-md">
                        <input name="api" id="api" class="form-control col-sm"
                            value="<?= (old('API')) ? old('API') : $sandeza['API']; ?>">
                    </div>
                </div>

                <!-- input name-c -->
                <div class="form-group row">
                    <label for="namecorp" class="col-md-3 col-form-label">Name Corporate</label>
                    <div class="col-md">
                        <input name="name-c" id="namecorp" class="form-control col-sm"
                            value="<?= (old('name-c')) ? old('name-c') : $sandeza['name-c']; ?>">
                    </div>
                </div>

                <!-- input corp id sandeza -->
                <div class="form-group row">
                    <label for="idsandeza" class="col-md-3 col-form-label">ID Corporate Sandeza</label>
                    <div class="col-md">
                        <input name="id-c-sandeza" id="idsandeza" autofocus class="form-control col-sm"
                            value="<?= (old('id-c-sandeza')) ? old('id-c-sandeza') : $sandeza['id-c-sandeza']; ?>">
                    </div>
                </div>

                <!-- input divisi -->
                <div class="form-group row">
                    <label for="namedivisi" class="col-md-3 col-form-label">Name Divisi Sandeza</label>
                    <div class="col-md">
                        <input name="div-name" id="namedivisi" class="form-control col-sm"
                            value="<?= (old('div-name')) ? old('div-name') : $sandeza['div-name']; ?>">
                    </div>
                </div>

                <!-- input id divisi -->
                <div class="form-group row">
                    <label for="iddiv" class="col-md-3 col-form-label">ID Division Sandeza</label>
                    <div class="col-md">
                        <input name="id-div-sandeza" id="iddiv" _ class="form-control col-sm"
                            value="<?= (old('id-div-sandeza')) ? old('id-div-sandeza') : $sandeza['id-div-sandeza']; ?>">
                    </div>
                </div>

                <!-- input usertcp -->
                <div class="form-group row">
                    <label for="usertcp" class="col-md-3 col-form-label">TCP User</label>
                    <div class="col-md">
                        <input name="tcpuser" id="usertcp" class="form-control col-sm"
                            value="<?= (old('tcpuser')) ? old('tcpuser') : $sandeza['tcpuser']; ?>">
                    </div>
                </div>

                <!-- input passtcp -->
                <div class="form-group row">
                    <label for="passtcp" class="col-md-3 col-form-label">TCP Password</label>
                    <div class="col-md">
                        <input name="tcppass" id="passtcp" class="form-control col-sm"
                            value="<?= (old('tcppass')) ? old('tcppass') : $sandeza['tcppass']; ?>">
                    </div>
                </div>

                <!-- input name sender -->
                <div class="form-group row">
                    <label for="namesender" class="col-md-3 col-form-label">Name Sender</label>
                    <div class="col-md">
                        <input name="name-sender" id="namesender" class="form-control col-sm"
                            value="<?= (old('name-sender')) ? old('name-sender') : $sandeza['name-sender']; ?>">
                    </div>
                </div>

                <!-- input id sender -->
                <div class="form-group row">
                    <label for="idsender" class="col-md-3 col-form-label">Alias Sender</label>
                    <div class="col-md">
                        <input name="sender-id" id="idsender" class="form-control col-sm"
                            value="<?= (old('sender-id')) ? old('sender-id') : $sandeza['sender-id']; ?>">
                    </div>
                </div>

                <!-- input token -->
                <div class="form-group row">
                    <label for="token" class="col-md-3 col-form-label">Token</label>
                    <div class="col-md">
                        <input name="token" id="token" class="form-control col-sm"
                            value="<?= (old('token')) ? old('token') : $sandeza['token']; ?>">
                    </div>
                </div>

                <!-- input Service -->
                <div class="form-group row">
                    <label for="services" class="col-md-3 col-form-label">Service Type</label>
                    <div class="col-md">
                        <select name="services" id="tipe" class="form-control">
                            <?php foreach ($token as $d) : ?>
                            <option value="<?= $d; ?>"><?= $d; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <!-- <input name="services" id="services" class="form-control col-sm"
                            value="<?= (old('services')) ? old('services') : $sandeza['services']; ?>"> -->
                    </div>
                </div>

                <!-- input validator OTP -->
                <div class="form-group row">
                    <label for="validator" class="col-md-3 col-form-label">OTP Whitelist</label>
                    <div class="col-md">
                        <input name="validator" id="validator" class="form-control col-sm"
                            value="<?= (old('validator')) ? old('validator') : $sandeza['validator']; ?>">
                    </div>
                </div>

                <!-- input urlstatussent -->
                <div class="form-group row">
                    <label for="urlstatussent" class="col-md-3 col-form-label">Url Status Send</label>
                    <div class="col-md">
                        <input name="url_status_send" id="urlstatussent" class="form-control col-sm"
                            value="<?= (old('url_status_send')) ? old('url_status_send') : $sandeza['url_status_send']; ?>">
                    </div>
                </div>

                <!-- input urldelivery -->
                <div class="form-group row">
                    <label for="urldelivery" class="col-md-3 col-form-label">Url Status Delivery</label>
                    <div class="col-md">
                        <input name="url_status_delivery" id="urldelivery" class="form-control col-sm"
                            value="<?= (old('url_status_delivery')) ? old('url_status_delivery') : $sandeza['url_status_delivery']; ?>">
                    </div>
                </div>

                <!-- input webuser -->
                <div class="form-group row">
                    <label for="webuser" class="col-md-3 col-form-label">Web Username</label>
                    <div class="col-md">
                        <input name="webuser" id="webuser" class="form-control col-sm"
                            value="<?= (old('webuser')) ? old('webuser') : $sandeza['webuser']; ?>">
                    </div>
                </div>

                <!-- input webpass -->
                <div class="form-group row">
                    <label for="webpass" class="col-md-3 col-form-label">Web Password</label>
                    <div class="col-md">
                        <input name="webpass" id="webpass" class="form-control col-sm"
                            value="<?= (old('webpass')) ? old('webpass') : $sandeza['webpass']; ?>">
                    </div>
                </div>

                <!-- status client -->
                <div class="form-group row">
                    <label for="status" class="col-md-3 col-form-label">Status</label>
                    <div class="col-md">
                        <select name="status" id="status" class="form-control">
                            <option selected value="<?= (old('status')) ? old('status') : $sandeza['status']; ?>">
                                <?= (old('status')) ? old('status') : $sandeza['status']; ?></option>
                            <option value="Migrated">Migrated</option>
                            <option value="Active Migrated">Active-Migrate</option>
                            <option value="Not Active">Not-Active</option>
                            <option value="Active">Active</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Ubah Data</button>
                        <a href="/sandeza/<?= $sandeza['id']; ?>" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>