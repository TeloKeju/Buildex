<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col">
            <div class="card" style="overflow-y: auto;">
                <table class="table table-bordered" id="daftarclient">
                    <thead>
                        <tr>
                            <th colspan="1" rowspan="2" class="text-center">No.</th>
                            <th colspan="1" rowspan="2" class="text-center">Nama Client</th>
                            <th colspan="1" rowspan="2" class="text-center">Tgl. Pembangunan</th>
                            <th colspan="1" rowspan="2" class="text-center">Detail</th>
                            <th colspan="3" rowspan="1" class="text-center">Progress</th>
                        </tr>
                        <tr>
                            <th colspan="1" rowspan="1" class="text-center">Accept</th>
                            <th colspan="1" rowspan="1" class="text-center">Mulai Pengerjaan</th>
                            <th colspan="1" rowspan="1" class="text-center">Pengerjaan Selesai</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <tr>
                            <td scope="row" class="text-center"><?= $i++ ?></td>
                            <td></td>
                            <td></td>
                            <td>
                                <button class="btn btn-warning">Detail</button>
                            </td>
                            <td>
                                <button class="btn btn-success btn-sm mt-2">Accept</button>
                                <button class="btn btn-danger btn-sm mt-2">Declined</button>
                                <!-- Tambahkan kondisi jika accept atau declined telah diklik, maka tampilkan span -->
                                <!-- Jika === 1 -->
                                <span class="badge badge-success btn-sm" style="width: 75px;">
                                    Accept
                                </span>
                                <!-- Jika === 0 -->
                                <span class="badge badge-danger btn-sm" style="width: 75px;">
                                    Declined
                                </span>
                            </td>
                            <td>
                                <!-- Tambahkan kondisi jika start project != 1 -->
                                <button class="btn btn-success btn-sm mt-2">Start</button> <!-- Tambahkan fungsi untuk mengirim data tanggal saat klik button -->
                                <!-- Tambahkan kondisi jika accept belum diklik (accept (1) ataupun declined (0)) maka tombol start project tidak muncul -->
                                <span class="badge badge-secondary btn-sm mt-2" style="width: 75px;">
                                    Pending
                                </span>
                                <!-- jika start project === 1 -->
                                <span class="badge badge-success btn-sm" style="width: 75px;">
                                    On Progress
                                </span>
                            </td>
                            <td>
                                <!-- Tambahkan kondisi jika start project != 1 -->
                                <button class="btn btn-success btn-sm mt-2">Done</button> <!-- Tambahkan fungsi untuk mengirim data tanggal saat klik button -->
                                <!-- Tambahkan kondisi jika start project belum diklik maka tombol start project tidak muncul dan span pending yang muncul -->
                                <span class="badge badge-secondary btn-sm" style="width: 75px;">
                                    Pending
                                </span>
                                <!-- jika start project === 1 && project done === 1 maka span started akan muncul -->
                                <span class="badge badge-success btn-sm" style="width: 75px;">
                                    Started
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        // $('#daftarclient').DataTable()
    });
</script>
<?= $this->endSection(); ?>
