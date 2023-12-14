<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<main class="main-detail p-2">
    <!-- <h1 class="text-center fs-5 mt-5" id="test">Detail Rumah</h1> -->
    <article class="content-detail">
        <section class="card mt-2">
            <div id="carouselExampleDark" class="carousel carousel-dark slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="<?= base_url($rumahDetail['rumah']); ?>" class="darken img-fluid m-0" alt="Foto Rumah">
                        <div class="carousel-caption d-md-block">
                            <h5 class="title"><?= $rumahDetail['title']; ?></h5>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="<?= base_url($rumahDetail['desain']); ?>" class="img-fluid m-0" alt="Foto Rumah">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- <img src="https://placehold.co/300x300" class="image img-fluid m-0 " alt="Foto Rumah"> -->
            <section class="p-2">
                <h1 class="fw-bold fs-5 mt-2"><?= $rumahDetail['title']; ?></h1>
                <h2 class="fw-light fs-6 p-2"><?= $rumahDetail['kota']; ?></h2>
                <!-- <h3 class="fw-normal fs-6">Luas Bangunan: <span class="fw-medium"><?= $rumahDetail['luasBangunan']; ?></span></h3> -->
                <!-- <h3 class="fw-normal fs-6">Luas Tanah: <span class="fw-medium"><?= $rumahDetail['luasTanah']; ?></span></h3> -->
                <h3 class="fw-semibold fs-6 ms-4 mb-0 border-start">Harga</h3>
                <h3 class="fw-bold fs-6 ms-4 border-start"><?= $rumahDetail['harga']; ?></h3>
                <h3 class="fw-normal fs-6 ms-2"><?= $rumahDetail['fitur1']; ?></h3>
                <h3 class="fw-normal fs-6 ms-2"><?= $rumahDetail['fitur2']; ?></h3>
                <h3 class="fw-normal fs-6 ms-2"><?= $rumahDetail['fitur3']; ?></h3>
                <p class="mt-3 p-2"><?= $rumahDetail['description']; ?></p>

                <?php if (session()->has('username')) : ?>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalmessage">
                        Pesan
                    </button>

                    <div class="modal fade" id="modalmessage" tabindex="-1" aria-labelledby="modalmessagelabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <label for="tanggal_pembangunan" class="form-label">Tanggal Pembangunan:</label>
                                    <input type="date" class="form-control" id="tanggal_pembangunan">
                                    <label for="contractorSelect" class="form-label">Pilih Kontraktor:</label>
                                    <select class="form-select" id="contractorSelect" name="contractorSelect" aria-label="Default select example">
                                        <?php
                                        foreach ($contractors as $contractor) : ?>
                                            <option value="<?= $contractor['nama']; ?>"><?= $contractor['nama']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-success">Pesan</button>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php else : ?>
                    <button type="button" class="btn btn-secondary" title="You Must Log In!" disabled>
                        Pesan
                    </button>
                <?php endif; ?>

            </section>
        </section>
    </article>
</main>
<?= $this->endSection(); ?>
