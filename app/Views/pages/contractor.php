<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<main class="p-3">
    <h1 class="text-center fs-5 mt-5" id="test">Detail Kontraktor</h1>
    <article class="content-contractor">
        <?php foreach ($contractors as $contractor) : ?>
            <section class="card p-3">
                <img src="<?= base_url($contractor['logo']); ?>" class="rounded mx-auto d-block img-fluid" alt="Foto Kontraktor">
                <h1 class="fw-bold fs-5 mt-3"><?= $contractor['nama']; ?></h1>
                <p class="fs-6"><?= $contractor['description']; ?></p>
            </section>
        <?php endforeach; ?>
    </article>
</main>
<?= $this->endSection(); ?>