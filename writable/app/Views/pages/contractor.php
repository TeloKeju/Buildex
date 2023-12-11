<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<main class="p-3">
    <h1 class="text-center fs-5 mt-5" id="test">Detail Kontraktor</h1>
    <article class="content-contractor">
        <?php foreach ($contractors as $contractor) : ?>
            <section class="card p-3">
                <img src="https://placehold.co/300x300" class="rounded mx-auto d-block img-fluid" alt="Foto Kontraktor">
                <h1 class="fw-bold fs-5 mt-2">Nama: <?= $contractor['nama']; ?></h1>
                <h2 class="fw-medium fs-6">Umur: <?= $contractor['umur']; ?></h2>
                <p class="fs-6"><?= $contractor['description']; ?></p>
            </section>
        <?php endforeach; ?>
    </article>
</main>
<?= $this->endSection(); ?>