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
            <section class="p-2">
                <h1 class="fw-bold fs-5 mt-2" tabindex="0"><?= $rumahDetail['title']; ?></h1>
                <h2 class="fw-light fs-6 p-2" tabindex="0"><?= $rumahDetail['kota']; ?></h2>
                <h3 class="fw-semibold fs-6 ms-4 mb-0 border-start" tabindex="0">Harga</h3>
                <h3 class="fw-bold fs-6 ms-4 border-start" tabindex="0">Rp. <?= $rumahDetail['harga']; ?></h3>
                <h3 class="fw-normal fs-6 ms-2" tabindex="0"><?= $rumahDetail['fitur1']; ?></h3>
                <h3 class="fw-normal fs-6 ms-2" tabindex="0"><?= $rumahDetail['fitur2']; ?></h3>
                <h3 class="fw-normal fs-6 ms-2" tabindex="0"><?= $rumahDetail['fitur3']; ?></h3>
                <h3 class="fw-bold fs-6 ms-2 mt-4" tabindex="0">Deskripsi</h3>
                <p class="mt-3 mb-0 p-2 lh-base" tabindex="0"><?= $rumahDetail['description1']; ?></p>
                <p class="p-2 mb-0 lh-base" tabindex="0"><?= $rumahDetail['description2']; ?></p>
                <p class="p-2 mb-0 lh-base" tabindex="0"><?= $rumahDetail['description3']; ?></p>
                <p class="p-2 mb-0 lh-base"tabindex="0"><?= $rumahDetail['description4']; ?></p>

                <?php
                ?>
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
                                <label for="nama" class="form-label" tabindex="0">Nama Lengkap:</label>
                                <input type="text" class="form-control" id="nama">
                                <label for="nik" class="form-label" tabindex="0">NIK:</label>
                                <input type="number" class="form-control" id="nik">
                                <label for="no_telp" class="form-label" tabindex="0">Nomor Telp:</label>
                                <input type="number" class="form-control" id="no_telp">
                                <label for="email" class="form-label" tabindex="0">Email:</label>
                                <input type="email" class="form-control" id="email">
                                <label for="alamat" class="form-label" tabindex="0">Alamat:</label>
                                <input type="text" class="form-control" id="alamat">
                                <label for="tanggal_pembangunan" class="form-label" tabindex="0">Tanggal Pembangunan:</label>
                                <input type="date" class="form-control" id="tanggal_pembangunan" min="<?= date('Y-m-d', strtotime('+7 days')); ?>">
                                <label for="contractorSelect" class="form-label" tabindex="0">Pilih Kontraktor:</label>
                                <select class="form-select" id="contractorSelect" name="contractorSelect" aria-label="Default select example">
                                    <?php
                                    foreach ($contractors as $contractor) : ?>
                                        <option value="<?= $contractor['nama']; ?>"><?= $contractor['nama']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <input type="hidden" class="fw-bold fs-5 mt-2" id="title" value="<?= $rumahDetail['title']; ?>">
                                <input type="hidden" class="fw-light fs-6 p-2" id="kota" value="<?= $rumahDetail['kota']; ?>">
                                <input type="hidden" class="fw-bold fs-6 ms-4 border-start" id="harga" value="<?= $rumahDetail['harga']; ?>">
                                <input type="hidden" class="fw-normal fs-6 ms-2" id="fitursatu" value="<?= $rumahDetail['fitur1']; ?>">
                                <input type="hidden" class="fw-normal fs-6 ms-2" id="fiturdua" value="<?= $rumahDetail['fitur2']; ?>">
                                <input type="hidden" class="fw-normal fs-6 ms-2" id="fiturtiga" value="<?= $rumahDetail['fitur3']; ?>">
                                <input type="hidden" class="mt-3 mb-0 p-2 lh-base" id="descsatu" value="<?= $rumahDetail['description1']; ?>">
                                <input type="hidden" class="p-2 mb-0 lh-base" id="descdua" value="<?= $rumahDetail['description2']; ?>">
                                <input type="hidden" class="p-2 mb-0 lh-base" id="desctiga" value="<?= $rumahDetail['description3']; ?>">
                                <input type="hidden" class="p-2 mb-0 lh-base" id="descempat" value="<?= $rumahDetail['description4']; ?>">
                                <input type="hidden" class="p-2 mb-0 lh-base" id="luasBangunan" value="<?= $rumahDetail['luasBangunan']; ?>">
                                <input type="hidden" class="p-2 mb-0 lh-base" id="kota" value="<?= $rumahDetail['kota']; ?>">
                                <input type="hidden" class="p-2 mb-0 lh-base" id="rumah" value="<?= $rumahDetail['rumah']; ?>">
                                <input type="hidden" class="p-2 mb-0 lh-base" id="desain" value="<?= $rumahDetail['desain']; ?>">
                            </div>
                            <div class="modal-footer">
                                <button type="button" id="pesan" class="btn btn-success">Pesan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </article>
</main>

<script>
    $(document).ready(function() {

        $('#pesan').on('click', function() {
            var nama = $('#nama').val();
            var nik = $('#nik').val();
            var no_telp = $('#no_telp').val();
            var alamat = $('#alamat').val();
            var email = $('#email').val();
            var tanggal_pembangunan = $('#tanggal_pembangunan').val();
            var contractorSelect = $('#contractorSelect').val();
            var housePrice = $('#harga').val();
            var luasBangunan = $('#luasBangunan').val();
            var luasTanah = $('#luasTanah').val();
            var fitur1 = $('#fitursatu').val();
            var fitur2 = $('#fiturdua').val();
            var fitur3 = $('#fiturtiga').val();
            var description1 = $('#descsatu').val();
            var description2 = $('#descdua').val();
            var description3 = $('#desctiga').val();
            var description4 = $('#descempat').val();
            var title = $('#title').val();
            var kota = $('#kota').val();

            $.ajax({
                type: "POST",
                url: "<?= base_url('pages/pesanan') ?>",
                data: {
                    nama: nama,
                    nik: nik,
                    no_telp: no_telp,
                    alamat: alamat,
                    email: email,
                    tanggal_pembangunan: tanggal_pembangunan,
                    contractorSelect: contractorSelect,
                    housePrice: housePrice,
                    luasBangunan: luasBangunan,
                    luasTanah: luasTanah,
                    fitur1: fitur1,
                    fitur2: fitur2,
                    fitur3: fitur3,
                    description1: description1,
                    description2: description2,
                    description3: description3,
                    description4: description4,
                    title: title,
                    kota: kota
                },
                async: true,
                beforeSend: function() {
                    $('#pesan').html('<i class="fas fa-spinner fa-spin"></i>');
                },
                success: function(response) {
                    toastr.success('Data berhasil dikirim. Tunggu konfirmasi selanjutnya.');
                    setTimeout(function() {
                        location.reload();
                    }, 3000);
                },
                error: function(error) {
                    console.error('Error sending message:', error);
                }
            });
        });
    });
</script>

<?= $this->endSection(); ?>
