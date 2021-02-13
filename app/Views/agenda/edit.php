<?= $this->extend('layout/template'); ?>
<?= $this->Section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md">
            <h2 class="my-3">Form Ubah Data</h2>
            <form action="/agenda/update/<?= $agenda['id']; ?>" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="id" value="<?= $agenda['id']; ?>">
                <!-- <input type="hidden" name="task_type" value="<?= $agenda['task_type']; ?>"> -->
                <div class="form-group row">
                    <label for="date" class="col-md col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                        <input type="date"
                            class="form-control <?= ($validation->hasError('date')) ? 'is-invalid' : ''; ?>" id="date"
                            name="date" autofocus value="<?= (old('date')) ? old('date') : $agenda['date']; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('date'); ?>
                        </div>
                    </div>
                </div><br>
                <div class="form-group row">
                    <label for="tipe" class="col-md col-form-label">Tipe Task</label>
                    <div class="col-sm-10">
                        <select name="tipe" id="tipe" class="form-control">
                            <!-- <option value="<?= (old('task_type')) ? old('task_type') : $agenda['task_type']; ?>"> -->
                            <!-- <?= (old('task_type')) ? old('task_type') : $agenda['task_type']; ?></option> -->
                            <?php foreach ($category as $c) : ?>
                            <option value="<?= $c['typetask']; ?>"><?= $c['typetask']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <!-- <input type="text" class="form-control" id="tipe" name="tipe" disabled
                            value="<?= (old('task_type')) ? old('task_type') : $agenda['task_type']; ?>"> -->
                    </div>
                </div><br>
                <div class="form-group row">
                    <label for="task" class="col-md col-form-label">Task</label>
                    <div class="col-sm-10">
                        <textarea name="task" id="task" class="col-md form-control"
                            rows="3"><?= (old('task')) ? old('task') : $agenda['task']; ?></textarea>
                    </div>
                </div><br>
                <div class="form-group row">
                    <label for="status" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-md">
                        <select name="status" id="status" class="form-control">
                            <option selected value="<?= (old('status')) ? old('status') : $agenda['status']; ?>">
                                <?= (old('status')) ? old('status') : $agenda['status']; ?></option>
                            <option value="Done">Done</option>
                            <option value="Pending">Pending</option>
                            <option value="OnProgress">On Progress</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="remark" class="col-md col-form-label">Remark</label>
                    <div class="col-sm-10">
                        <textarea name="remark" id="remark" class="col-md form-control"
                            rows="3"><?= (old('remark')) ? old('remark') : $agenda['remark']; ?></textarea>
                    </div>
                </div><br>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Ubah Data</button>
                        <a href="/agenda/<?= $agenda['id']; ?>" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>