<?= $this->extend('layout/template'); ?>
<?= $this->Section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-sm">
            <h2 class="my-3">Form Tambah Client</h2>
            <!-- function save ada di controller -->
            <form action="/sandeza/save" method="POST" enctype="multipart/form-data">
                <!-- <input type="hidden" name="created_at" value="<?= $time; ?>"> -->
                <?= csrf_field(); ?>
                <!-- input name-c -->
                <div class="form-group row">
                    <label for="namecorp" class="col-md-3 col-form-label">Name Corporate</label>
                    <div class="col-md">
                        <input name="namecorp" id="namecorp" class="form-control col-sm"
                            value="<?= old('namecorp'); ?>">
                    </div>
                </div>
                <!-- input corp id sandeza -->
                <div class="form-group row">
                    <label for="idsandeza" class="col-md-3 col-form-label">ID Corporate Sandeza</label>
                    <div class="col-md">
                        <input name="idsandeza" id="idsandeza" class="form-control col-sm"
                            value="<?= old('idsandeza'); ?>">
                    </div>
                </div>
                <!-- input divisi -->
                <div class="form-group row">
                    <label for="namedivisi" class="col-md-3 col-form-label">Name Divisi Sandeza</label>
                    <div class="col-md">
                        <input name="namedivisi" id="namedivisi" class="form-control col-sm"
                            value="<?= old('namedivisi'); ?>">
                    </div>
                </div>
                <!-- input id divisi -->
                <div class="form-group row">
                    <label for="iddiv" class="col-md-3 col-form-label">ID Division Sandeza</label>
                    <div class="col-md">
                        <input name="iddiv" id="iddiv" class="form-control col-sm" value="<?= old('iddiv'); ?>">
                    </div>
                </div>
                <!-- input usertcp -->
                <div class="form-group row">
                    <label for="usertcp" class="col-md-3 col-form-label">TCP User</label>
                    <div class="col-md">
                        <input name="usertcp" id="usertcp" class="form-control col-sm" value="<?= old('usertcp'); ?>">
                    </div>
                </div>
                <!-- input passtcp -->
                <div class="form-group row">
                    <label for="passtcp" class="col-md-3 col-form-label">TCP Password</label>
                    <div class="col-md">
                        <input name="passtcp" id="passtcp" class="form-control col-sm" value="<?= old('passtcp'); ?>">
                    </div>
                </div>
                <!-- input name sender -->
                <div class="form-group row">
                    <label for="namesender" class="col-md-3 col-form-label">Name Sender</label>
                    <div class="col-md">
                        <input name="namesender" id="namesender" class="form-control col-sm"
                            value="<?= old('namesender'); ?>">
                    </div>
                </div>
                <!-- input id sender -->
                <div class="form-group row">
                    <label for="idsender" class="col-md-3 col-form-label">Alias Sender</label>
                    <div class="col-md">
                        <input name="idsender" id="idsender" class="form-control col-sm"
                            value="<?= old('idsender'); ?>">
                    </div>
                </div>
                <!-- input webuser -->
                <div class="form-group row">
                    <label for="webuser" class="col-md-3 col-form-label">Alias Sender</label>
                    <div class="col-md">
                        <input name="webuser" id="webuser" class="form-control col-sm" value="<?= old('webuser'); ?>">
                    </div>
                </div>
                <!-- input webpass -->
                <div class="form-group row">
                    <label for="webpass" class="col-md-3 col-form-label">Alias Sender</label>
                    <div class="col-md">
                        <input name="webpass" id="webpass" class="form-control col-sm" value="<?= old('webpass'); ?>">
                    </div>
                </div>
                <!-- input token -->
                <div class="form-group row">
                    <label for="token" class="col-md-3 col-form-label">Alias Sender</label>
                    <div class="col-md">
                        <input name="token" id="token" class="form-control col-sm" value="<?= old('token'); ?>">
                    </div>
                </div>
                <!-- input urlstatussent -->
                <div class="form-group row">
                    <label for="urlstatussent" class="col-md-3 col-form-label">Url Status Send</label>
                    <div class="col-md">
                        <input name="urlstatussent" id="urlstatussent" class="form-control col-sm"
                            value="<?= old('urlstatussent'); ?>">
                    </div>
                </div>
                <!-- input urldelivery -->
                <div class="form-group row">
                    <label for="urldelivery" class="col-md-3 col-form-label">Url Status Delivery</label>
                    <div class="col-md">
                        <input name="urldelivery" id="urldelivery" class="form-control col-sm"
                            value="<?= old('urldelivery'); ?>">
                    </div>
                </div>
                <!-- status client -->
                <div class="form-group row">
                    <label for="status" class="col-md-3 col-form-label">Status</label>
                    <div class="col-md">
                        <select name="status" id="status" class="form-control">
                            <option value="">--Pilih Status--</option>
                            <option selected value="Migrated">Migrated</option>
                            <option value="Active Migrated">Active-Migrate</option>
                            <option value="Not Active">Not-Active</option>
                            <option value="Active">Active</option>
                        </select>
                    </div>
                </div>
                <!-- submit -->
                <div class="form-group row">
                    <div class="col-sm-8">
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                        <a href="/sandeza" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>