<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section id="jumbotron">
    <img src="<?= base_url('images/home/jumbotron.png'); ?>" class="d-block w-100 img-fluid" alt="..." />
</section>

<main class="p-3">
    <article class="mt-3">
        <section class="card p-3">
            <h1 class="text-center fs-5" id="about">About Us</h1>
            <section class="left-picture">
                <img src="<?= base_url('images/home/about-us.png'); ?>" class="rounded mx-auto d-block img-fluid" alt="pict" />
                <p class="mt-3 lh-base">
                    Buildex adalah platform inovatif yang didedikasikan untuk membantu Anda mewujudkan impian memiliki rumah impian. Kami memahami betapa pentingnya proses perencanaan dan pembangunan rumah, dan itulah mengapa kami hadir untuk menyediakan solusi yang mudah dan efektif.
                </p>
            </section>
        </section>
        <section class="card p-3 mt-3">
            <h1 class="text-center mt-3 fs-5">Desain Rumah</h1>
            <section class="right-picture">
                <section class="pict-wrap btn-wrap">
                    <p class="mt-3 lh-base">
                        Navigasi intuitif dan antarmuka yang ramah pengguna memungkinkan Anda menjelajahi berbagai desain rumah dari berbagai gaya arsitektur. Dari rumah minimalis hingga klasik, kami memiliki koleksi desain yang beragam untuk memenuhi selera Anda.
                    </p>
                    <a href="<?= base_url('pages/desain') ?>" class="btn btn-light m-auto w-auto">Selengkapnya</a>
                </section>
                <img src="<?= base_url('images/home/house-design.png'); ?>" class="rounded mx-auto d-block img-fluid" alt="pict" />
            </section>
        </section>
        <section class="card p-3 mt-3">
            <h1 class="text-center fs-5">Detail Contractor</h1>
            <section class="left-picture">
                <img src="<?= base_url('images/home/contractor.png'); ?>" class="rounded mx-auto d-block img-fluid" alt="pict" />
                <section class="btn-wrap">
                    <p class="mt-3 lh-base">
                        Temukan kontraktor yang tepat untuk proyek Anda melalui katalog kontraktor terpercaya kami. Profil lengkap dan portofolio proyek akan membantu Anda membuat keputusan yang lebih baik dan mengurangi ketidakpastian dalam memilih kontraktor pembangunan.
                    </p>
                    <a href="<?= base_url('pages/contractor') ?>" class="btn btn-light m-auto w-auto">Selengkapnya</a>
                </section>
            </section>
        </section>
        <section class="card p-3 mt-3">
            <h1 class="text-center mt-3 fs-5">Contact Person</h1>
            <section class="right-picture">
                <section class="pict-wrap btn-wrap">
                    <p class="mt-3 lh-base">
                        Kami berkomitmen untuk memberikan layanan pelanggan terbaik dan merespons setiap pertanyaan dengan segera. Terima kasih atas kepercayaan Anda kepada kami, dan kami berharap dapat membantu Anda dengan kebutuhan atau pertanyaan apa pun yang Anda miliki.
                        Terima kasih telah mengunjungi Buildex!
                    </p>
                    <a href="https://wa.me/08974829142" class="btn btn-light m-auto w-auto">Kontak Kami Disini</a>
                </section>
                <img src="<?= base_url('images/home/contact-us.png'); ?>" class="rounded mx-auto d-block img-fluid" alt="pict" />
            </section>
        </section>
    </article>
</main>
<?= $this->endSection(); ?>