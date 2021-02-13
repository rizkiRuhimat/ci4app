<?= $this->extend('layout/template'); ?>
<?= $this->Section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md">
            <h2 class="my-3">Form Tambah Agenda</h2>
            <!-- function save ada di controller -->
            <form action="/agenda/save" method="POST" enctype="multipart/form-data">
                <!-- <input type="hidden" name="created_at" value="<?= $time; ?>"> -->
                <?= csrf_field(); ?>
                <div class="form-group row">
                    <label for="date" class="col-md-3 col-form-label">Tanggal</label>
                    <div class="col-md">
                        <input name="date" id="date" class="form-control col-sm" type="date" autofocus
                            value="<?= date('Y-m-d'); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pic" class="col-md-3 col-form-label">PIC</label>
                    <div class="col-md">
                        <select name="pic" id="pic" class="form-control">
                            <option value="">-- pilih pic --</option>
                            <?php foreach ($pic as $p) : ?>
                            <option value="<?= $p['nama']; ?>"><?= $p['alias']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div><br>
                <div class="form-group row">
                    <label for="category" class="col-md-3 col-form-label">Type Task</label>
                    <div class="col-md">
                        <select name="category" id="category" class="form-control">
                            <option value="">-- pilih tipe --</option>
                            <?php foreach ($category as $c) : ?>
                            <option value="<?= $c['typetask']; ?>"><?= $c['typetask']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div><br>
                <div class="form-group row">
                    <label for="task" class="col-md-3 col-form-label">Task</label>
                    <div class="col-md">
                        <textarea name="task" id="task" class="form-control col-sm" rows="4"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="status" class="col-md-3 col-form-label">Status</label>
                    <div class="col-md">
                        <select name="status" id="status" class="form-control">
                            <option value="Done">Done</option>
                            <option value="Pending">Pending</option>
                            <option value="OnProgress">On Progress</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="remark" class="col-md-3 col-form-label">Remark</label>
                    <div class="col-md">
                        <textarea name="remark" id="remark" class="form-control col-sm" rows="2"></textarea>
                    </div>
                </div>
                <!-- <div class="form-group row">
                    <div class="col-md">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input col-md" id="customFile">
                            <label for="customfiles" class="custom-file-label col-form-label">Choose
                                Files</label>
                        </div>
                    </div>
                </div> -->
                <div class="form-group row">
                    <div class="col-sm-8">
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                        <a href="/agenda" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>