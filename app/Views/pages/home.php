<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section id="jumbotron">
    <img src="<?= base_url('images/home/jumbotron.png'); ?>" class="d-block w-100 img-fluid" alt="..." />
</section>

<main class="p-3">
    <article class="mt-3">
        <section class="card p-3">
            <h1 class="text-center fs-5" id="about" tabindex="0">About Us</h1>
            <section class="left-picture">
                <img src="<?= base_url('images/home/about-us.png'); ?>" class="rounded mx-auto d-block img-fluid" alt="pict" />
                <p class="mt-3 lh-base" tabindex="0">
                    Buildex adalah platform inovatif yang didedikasikan untuk membantu mewujudkan rumah impian anda. Kami menyediakan berbagai desain rumah yang kreatif yang anda impikan serta memiliki konstruktor yang terintegrasi dengan baik dan membantu anda dalam membangun rumah. Kami memahami betapa pentingnya proses perencanaan dan pembangunan rumah. Maka dari itu kami hadir untuk menyediakan solusi yang mudah dan efektif dalam membangun rumah impian anda.
                </p>
            </section>
        </section>
        <section class="card p-3 mt-3">
            <h1 class="text-center mt-3 fs-5" tabindex="0">Desain Rumah</h1>
            <section class="right-picture">
                <section class="pict-wrap btn-wrap">
                    <p class="mt-3 lh-base" tabindex="0">
                        Navigasi yang intuitif dan antarmuka yang ramah pengguna, memungkinkan Anda untuk menjelajahi berbagai desain rumah. mulai dari gaya arsitektur seperti mediterania, kontemporer, klasik hingga rumah yang minimalis. kami memiliki koleksi desain rumah yang beragam dan bervariasi untuk memenuhi selera dan kebutuhan rumah impian Anda.
                    </p>
                    <a href="<?= base_url('pages/desain') ?>" class="btn btn-light m-auto w-auto">Selengkapnya</a>
                </section>
                <img src="<?= base_url('images/home/house-design.png'); ?>" class="rounded mx-auto d-block img-fluid" alt="pict" />
            </section>
        </section>
        <section class="card p-3 mt-3">
            <h1 class="text-center fs-5" tabindex="0">Detail Contractor</h1>
            <section class="left-picture">
                <img src="<?= base_url('images/home/contractor.png'); ?>" class="rounded mx-auto d-block img-fluid" alt="pict" />
                <section class="btn-wrap">
                    <p class="mt-3 lh-base" tabindex="0">
                        kontraktor yang baik merupakan kunci dari rumah yang baik maka dari itu, temukan kontraktor yang tepat untuk proyek anda melalui katalog kontraktor kepercayaan kami. profil yang lengkap dan portofolio proyek akan membantu anda membuat keputusan yang tepat serta mengurangi ketidakpastian anda dalam memilih kontraktor pembangunan rumah.
                    </p>
                    <a href="<?= base_url('pages/contractor') ?>" class="btn btn-light m-auto w-auto">Selengkapnya</a>
                </section>
            </section>
        </section>
        <section class="card p-3 mt-3">
            <h1 class="text-center mt-3 fs-5" tabindex="0">Contact Person</h1>
            <section class="right-picture">
                <section class="pict-wrap btn-wrap">
                    <p class="mt-3 lh-base" tabindex="0">
                        Kami berkomitmen untuk memberikan layanan pelanggan terbaik dan merespons setiap pertanyaan dengan segera. Terima kasih atas kepercayaan Anda kepada kami, dan kami berharap dapat membantu Anda dengan kebutuhan atau pertanyaan apa pun yang Anda miliki.
                        Terima kasih telah mengunjungi Buildex!
                    </p>
                    <a href="https://wa.me/+628976461590" class="btn btn-light m-auto w-auto">Kontak Kami Disini</a>
                </section>
                <img src="<?= base_url('images/home/contact-us.png'); ?>" class="rounded mx-auto d-block img-fluid" alt="pict" />
            </section>
        </section>
    </article>
</main>
<?= $this->endSection(); ?>
