<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<main class="p-3">
    <h1 class="text-center fs-5 mt-5" id="test">Detail Rumah</h1>
    <article class="content-desain">
        <?php foreach ($rumah as $item) : ?>
            <section class="card mt-2">
                <img src="<?= base_url($item['rumah']); ?>" class="img-fluid m-0" alt="Foto Rumah">
                <section class="p-2">
                    <h1 class="fw-bold fs-5 mt-2"><a href="<?= base_url('detail/' . $item['id']); ?>"><?= $item['title']; ?></a></h1>
                    <h2 class="fw-light fs-6"><?= $item['kota']; ?></h2>
                    <h3 class="fw-normal fs-6">Luas Bangunan: <span class="fw-medium"><?= $item['luasBangunan']; ?></span></h3>
                    <h3 class="fw-normal fs-6">Luas Tanah: <span class="fw-medium"><?= $item['luasTanah']; ?></span></h3>
                </section>
            </section>
        <?php endforeach; ?>
    </article>
</main>
<?= $this->endSection(); ?>