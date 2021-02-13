<?= $this->extend('layout/template'); ?>
<?= $this->Section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md">
            <h2 class="my-3">Form Ubah Data</h2>
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md">
                                    <h5 class="card-title"> Ubah Data
                                        <?= $pic['nama']; ?>
                                    </h5>
                                    <form action="/pic/update/<?= $pic['id']; ?>" method="POST"
                                        enctype="multipart/form-data">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="id" value="<?= $pic['id']; ?>">
                                        <div class="form-group row">
                                            <label for="nama" class="col-md col-form-label">Nama</label>
                                            <div class="col-sm-10">
                                                <input type="text"
                                                    class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>"
                                                    id="nama" name="nama" autofocus
                                                    value="<?= (old('nama')) ? old('nama') : $pic['nama']; ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('nama'); ?>
                                                </div>
                                            </div>
                                        </div><br>
                                        <div class="form-group row">
                                            <label for="alias" class="col-md col-form-label">Alias</label>
                                            <div class="col-sm-10">
                                                <input type="text"
                                                    class="form-control <?= ($validation->hasError('alias')) ? 'is-invalid' : ''; ?>"
                                                    id="alias" name="alias"
                                                    value="<?= (old('alias')) ? old('alias') : $pic['alias']; ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('alias'); ?>
                                                </div>
                                            </div>
                                        </div><br>
                                        <div class="form-group row">
                                            <label for="address" class="col-md col-form-label">Alamat</label>
                                            <div class="col-sm-10">
                                                <input type="text"
                                                    class="form-control <?= ($validation->hasError('address')) ? 'is-invalid' : ''; ?>"
                                                    id="address" name="address"
                                                    value="<?= (old('address')) ? old('address') : $pic['address']; ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('address'); ?>
                                                </div>
                                            </div>
                                        </div><br>
                                        <div class="form-group row">
                                            <label for="dob" class="col-md col-form-label">Tanggal Lahir</label>
                                            <div class="col-sm-10">
                                                <input type="date"
                                                    class="form-control <?= ($validation->hasError('dob')) ? 'is-invalid' : ''; ?>"
                                                    id="dob" name="dob"
                                                    value="<?= (old('dob')) ? old('dob') : $pic['dob']; ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('dob'); ?>
                                                </div>
                                            </div>
                                        </div><br>
                                        <div class="form-group row">
                                            <label for="phone" class="col-md col-form-label">Phone</label>
                                            <div class="col-sm-10">
                                                <input type="text"
                                                    class="form-control <?= ($validation->hasError('phone')) ? 'is-invalid' : ''; ?>"
                                                    id="phone" name="phone"
                                                    value="<?= (old('phone')) ? old('phone') : $pic['phone']; ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('phone'); ?>
                                                </div>
                                            </div>
                                        </div><br>
                                        <div class="form-group row">
                                            <label for="position" class="col-md col-form-label">Position</label>
                                            <div class="col-sm-10">
                                                <select
                                                    class="form-control <?= ($validation->hasError('position')) ? 'is-invalid' : ''; ?>"
                                                    id="position" name="position">
                                                    <option
                                                        value="<?= (old('position')) ? old('position') : $pic['position']; ?>">
                                                        <?= (old('position')) ? old('position') : $pic['position']; ?>
                                                    </option>
                                                    <?php foreach ($position as $pos) : ?>
                                                    <option value="<?= $pos['nama']; ?>"><?= $pos['nama']; ?>
                                                    </option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('position'); ?>
                                                </div>
                                            </div>
                                        </div><br>
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Ubah Data</button>
                                                <a href="/pic/<?= $pic['id']; ?>" class="btn btn-primary">Kembali</a>
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