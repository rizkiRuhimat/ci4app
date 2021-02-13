<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="card">
    <h5 class="card-header">About</h5>
    <div class="card-body">
        <h5 class="card-title">About Me</h5>
        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus quaerat, non, error sed
            veritatis dolorem excepturi harum aut totam mollitia architecto voluptatibus dolor quidem velit corrupti
            recusandae tempora unde nesciunt! </p>
        <a href="/pages" class="btn btn-primary"><span class="fas fa-home"></span> Kembali</a>
    </div>
</div>

<?= $this->endSection(); ?>