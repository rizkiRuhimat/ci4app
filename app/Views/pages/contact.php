<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h4>Contact Us</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere in architecto qui voluptate totam sunt,
                veniam facilis tenetur rerum iusto minima illum. Facere perspiciatis veritatis maxime explicabo odio
                amet et.</p>
            <?php foreach ($alamat as $a) : ?>
            <address>
                <strong><?= $a['tipe']; ?><br></strong>
                <?= $a['alamat']; ?><br>
                <?= $a['kec']; ?>
                <?= $a['kel']; ?>
                <?= $a['kota']; ?><br>
                <?= $a['provinsi']; ?>
                <?= $a['kodepos']; ?>
            </address>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>