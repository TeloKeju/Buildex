<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col">
            <div class="card" style="overflow-y: auto;">
                <table class="table table-bordered" id="daftarpesanan">
                    <thead>
                        <tr>
                            <th colspan="1" rowspan="2" class="text-center">No.</th>
                            <th colspan="1" rowspan="2" class="text-center">Alamat</th>
                            <th colspan="1" rowspan="2" class="text-center">No. Telp</th>
                            <th colspan="1" rowspan="2" class="text-center">Email</th>
                            <th colspan="1" rowspan="2" class="text-center">Harga</th>
                            <th colspan="1" rowspan="2" class="text-center">Luas Bangunan</th>
                            <th colspan="1" rowspan="2" class="text-center">Luas Tanah</th>
                            <th colspan="3" rowspan="1" class="text-center">Fitur</th>
                            <th colspan="4" rowspan="1" class="text-center">Deskripsi</th>
                        </tr>
                        <tr>
                            <th colspan="1" rowspan="1" class="text-center">Fitur 1</th>
                            <th colspan="1" rowspan="1" class="text-center">Fitur 2</th>
                            <th colspan="1" rowspan="1" class="text-center">Fitur 3</th>
                            <th colspan="1" rowspan="1" class="text-center">Desc. 1</th>
                            <th colspan="1" rowspan="1" class="text-center">Desc. 2</th>
                            <th colspan="1" rowspan="1" class="text-center">Desc. 3</th>
                            <th colspan="1" rowspan="1" class="text-center">Desc. 4</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        // dd($pesanan);
                            // foreach($pesanan as $pesanan):
                        ?>
                        <tr>
                            <td scope="row" class="text-center"><?= $i++ ?></td>
                            <td><?= $pesanan['alamat'] ?></td>
                            <td><?= $pesanan['no_telp'] ?></td>
                            <td><?= $pesanan['email'] ?></td>
                            <td><?= $pesanan['housePrice'] ?></td>
                            <td><?= $pesanan['luasBangunan'] ?></td>
                            <td><?= $pesanan['luasTanah'] ?></td>
                            <td><?= $pesanan['fitur1'] ?></td>
                            <td><?= $pesanan['fitur2'] ?></td>
                            <td><?= $pesanan['fitur3'] ?></td>
                            <td><?= $pesanan['description1'] ?></td>
                            <td><?= $pesanan['description2'] ?></td>
                            <td><?= $pesanan['description3'] ?></td>
                            <td><?= $pesanan['description4'] ?></td>
                        </tr>
                        <?php //endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        // $('#daftarpesanan').DataTable()
    });
</script>
<?= $this->endSection(); ?>
