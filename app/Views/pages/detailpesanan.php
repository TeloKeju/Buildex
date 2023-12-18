<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="p-5 mt-5 mb-5">
    <div class="row">
        <div class="col">
            <div class="card" style="overflow-y: auto;">
                <table class="table table-bordered" id="daftarpesanan">
                    <thead>
                        <tr>
                            <th colspan="1" rowspan="2" class="text-center" tabindex="0">No.</th>
                            <th colspan="1" rowspan="2" class="text-center" tabindex="0">Alamat</th>
                            <th colspan="1" rowspan="2" class="text-center" tabindex="0">No. Telp</th>
                            <th colspan="1" rowspan="2" class="text-center" tabindex="0">Email</th>
                            <th colspan="1" rowspan="2" class="text-center" tabindex="0">Harga</th>
                            <th colspan="1" rowspan="2" class="text-center" tabindex="0">Luas Bangunan</th>
                            <th colspan="1" rowspan="2" class="text-center" tabindex="0">Luas Tanah</th>
                            <th colspan="3" rowspan="1" class="text-center" tabindex="0">Fitur</th>
                            <th colspan="4" rowspan="1" class="text-center" tabindex="0">Deskripsi</th>
                        </tr>
                        <tr>
                            <th colspan="1" rowspan="1" class="text-center"tabindex="0">Fitur 1</th>
                            <th colspan="1" rowspan="1" class="text-center"tabindex="0">Fitur 2</th>
                            <th colspan="1" rowspan="1" class="text-center"tabindex="0">Fitur 3</th>
                            <th colspan="1" rowspan="1" class="text-center"tabindex="0">Desc. 1</th>
                            <th colspan="1" rowspan="1" class="text-center"tabindex="0">Desc. 2</th>
                            <th colspan="1" rowspan="1" class="text-center"tabindex="0">Desc. 3</th>
                            <th colspan="1" rowspan="1" class="text-center"tabindex="0">Desc. 4</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <tr>
                            <td scope="row" class="text-center"><?= $i++ ?></td>
                            <td tabindex="0"><?= $pesanan['alamat'] ?></td>
                            <td tabindex="0"><?= $pesanan['no_telp'] ?></td>
                            <td tabindex="0"><?= $pesanan['email'] ?></td>
                            <td tabindex="0"><?= $pesanan['housePrice'] ?></td>
                            <td tabindex="0"><?= $pesanan['luasBangunan'] ?></td>
                            <td tabindex="0"><?= $pesanan['luasTanah'] ?></td>
                            <td tabindex="0"><?= $pesanan['fitur1'] ?></td>
                            <td tabindex="0"><?= $pesanan['fitur2'] ?></td>
                            <td tabindex="0"><?= $pesanan['fitur3'] ?></td>
                            <td tabindex="0"><?= $pesanan['description1'] ?></td>
                            <td tabindex="0"><?= $pesanan['description2'] ?></td>
                            <td tabindex="0"><?= $pesanan['description3'] ?></td>
                            <td tabindex="0"><?= $pesanan['description4'] ?></td>
                        </tr>
                        <?php
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {});
</script>
<?= $this->endSection(); ?>
