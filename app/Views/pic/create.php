<?= $this->extend('layout/template'); ?>
<?= $this->Section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-sm">
            <h2 class="my-3">Tambah PIC</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">Tambah Data</h5>
                                    <form action="/pic/save" method="POST" enctype="multipart/form-data">
                                        <?= csrf_field(); ?>
                                        <div class="form-group row">
                                            <label for="nama" class="col-sm col-form-label">Nama</label>
                                            <div class="col-sm">
                                                <input name="nama" id="nama" class="form-control" type="text" autofocus>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="alias" class="col-sm col-form-label">Alias</label>
                                            <div class="col-sm">
                                                <input name="alias" id="alias" class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="address" class="col-sm col-form-label">Alamat</label>
                                            <div class="col-sm">
                                                <textarea name="address" id="address" class="form-control"
                                                    rows="4"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="phone" class="col-sm col-form-label">Telepon</label>
                                            <div class="col-sm">
                                                <input name="phone" id="phone" class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="dob" class="col-sm col-form-label">Tanggal Lahir</label>
                                            <div class="col-sm">
                                                <input name="dob" id="dob" class="form-control" type="date">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="posisi" class="col-sm col-form-label">Position</label>
                                            <div class="col-sm">
                                                <select name="posisi" id="posisi" class="form-control col-sm">
                                                    <option value="">-- pilih posisi --</option>
                                                    <?php foreach ($posisi as $pos) :  ?>
                                                    <option value="<?= $pos['nama']; ?>">
                                                        <?= $pos['nama']; ?>
                                                    </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm">
                                                <button type="submit" class="btn btn-primary">Tambah Data</button>
                                                <a href="/pic" class="btn btn-primary">Kembali</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?= $this->endSection(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>