<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<main class="p-3">
    <h1 class="text-center fs-5 mt-5" id="test" tabindex="0">Detail Rumah</h1>
    <article class="content-desain">
        <?php foreach ($rumah as $item) : ?>
            <section class="card mt-2">
                <img src="<?= base_url($item['rumah']); ?>" class="img-fluid m-0" alt="Foto Rumah">
                <section class="p-2">
                    <h1 class="fw-bold fs-5 mt-2 ms-2"><a href="<?= base_url('detail/' . $item['id']); ?>" tabindex="0"><?= $item['title']; ?></a></h1>
                    <h2 class="fw-light fs-6 p-2" tabindex="0"><?= $item['kota']; ?></h2>
                    <h3 class="fw-normal fs-6 ms-2">Luas Bangunan: <span class="fw-medium" tabindex="0"><?= $item['luasBangunan']; ?></span></h3>
                    <h3 class="fw-normal fs-6 ms-2">Luas Tanah: <span class="fw-medium" tabindex="0"><?= $item['luasTanah']; ?></span></h3>
                </section>
            </section>
        <?php endforeach; ?>
    </article>
</main>
<?= $this->endSection(); ?>
