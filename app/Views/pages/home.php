<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
    <h1>Hello . . .</h1>
    <?php
    // echo timezone_select('custom-select', 'Asia/Jakarta');
    echo '<h3>Today is ' . date('D d-m-Y H:i:s') . '</h3> ';
    ?>
    <marquee behavior="" direction="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non praesentium omnis
        veritatis, harum molestiae voluptatem sed odio unde deleniti minima totam dolorem, obcaecati itaque nihil
        assumenda nam sunt. Iste, a. </marquee>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere exercitationem odio quaerat veritatis vitae.
        Consequuntur aut qui vitae sed. Rem voluptates eligendi assumenda harum saepe voluptas a repellendus suscipit
        voluptate?</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid provident deserunt commodi quas, placeat
        veniam. Fugit ab amet, rerum, delectus suscipit numquam est vel, ipsum aliquid laboriosam quidem? Possimus,
        voluptatibus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad pariatur ex maxime repellendus
        consequuntur laborum nam dolores adipisci earum, voluptates provident ipsum ullam dicta eaque exercitationem
        fuga repudiandae dolore libero. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum sapiente
        asperiores, tempora velit deserunt architecto voluptatem atque explicabo. Magni nisi reprehenderit sapiente
        soluta inventore harum cumque, natus alias illo optio. Lorem ipsum dolor, sit amet consectetur adipisicing elit.
        Quibusdam, dicta beatae, sequi dolorem delectus illo magnam cupiditate tenetur consectetur, ad dolore possimus?
        Ut mollitia enim architecto non autem totam sunt!</p>
</div>
<?= $this->endSection(); ?>