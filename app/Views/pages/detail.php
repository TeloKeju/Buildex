<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<main class="p-3">
    <h1 class="text-center fs-5 mt-5" id="test">Detail Rumah</h1>
    <article class="content-detail">
        <section class="card mt-2">
            <img src="https://placehold.co/300x300" class="img-fluid m-0 " alt="Foto Rumah">
            <section class="p-2">
                <h1 class="fw-bold fs-5 mt-2"><?= $rumahDetail['title']; ?></h1>
                <h2 class="fw-light fs-6"><?= $rumahDetail['kota']; ?></h2>
                <h3 class="fw-normal fs-6">Luas Bangunan: <span class="fw-medium"><?= $rumahDetail['luasBangunan']; ?></span></h3>
                <h3 class="fw-normal fs-6">Luas Tanah: <span class="fw-medium"><?= $rumahDetail['luasTanah']; ?></span></h3>
            </section>
        </section>
    </article>
</main>
<?= $this->endSection(); ?>
