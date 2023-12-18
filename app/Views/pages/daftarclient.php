<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="p-2 mt-5 mb-5">
    <div class="row">
        <div class="col">
            <div class="card" style="overflow-y: auto;">
                <table class="table table-bordered" id="daftarclient">
                    <thead>
                        <tr>
                            <th colspan="1" rowspan="2" class="text-center" tabindex="0">No.</th>
                            <th colspan="1" rowspan="2" class="text-center" tabindex="0">Nama Client</th>
                            <th colspan="1" rowspan="2" class="text-center" tabindex="0">Nama Contractor</th>
                            <th colspan="1" rowspan="2" class="text-center" tabindex="0">Tgl. Pembangunan</th>
                            <th colspan="1" rowspan="2" class="text-center" tabindex="0">Detail</th>
                            <th colspan="3" rowspan="1" class="text-center" tabindex="0">Progress</th>
                        </tr>
                        <tr>
                            <th colspan="1" rowspan="1" class="text-center" tabindex="0">Accept</th>
                            <th colspan="1" rowspan="1" class="text-center" tabindex="0">Mulai Pengerjaan</th>
                            <th colspan="1" rowspan="1" class="text-center" tabindex="0">Pengerjaan Selesai</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php $i = 1;
                        foreach ($client as $client) :
                        ?>
                            <tr>
                                <td scope="row" class="text-center"><?= $i++ ?></td>
                                <td tabindex="0"><?= isset($client['nama']) ? $client['nama'] : '' ?></td>
                                <td tabindex="0"><?= isset($client['contractor']) ? $client['contractor'] : '' ?></td>
                                <td tabindex="0"><?= isset($client['tanggal_pembangunan']) ? $client['tanggal_pembangunan'] : '' ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url('pages/detailpesanan/' . $client['id']); ?>" class="btn btn-warning">Detail</a>
                                </td>
                                <td class="text-center">
                                    <?php if ($client['accept'] === null) : ?>
                                        <button class="btn btn-success btn-sm mt-2 accept-btn" data-order-id="<?= $client['id']; ?>" onclick="updateStatus(<?= $client['id']; ?>, 1)">Accept</button>
                                        <button class="btn btn-danger btn-sm mt-2 declined-btn" data-order-id="<?= $client['id']; ?>" onclick="updateStatus(<?= $client['id']; ?>, 0)">Declined</button>
                                    <?php elseif ($client['accept'] == 1) : ?>
                                        <span class="badge" style="width: 75px; background-color: #28a745; color: #fff; font-size: 14px; padding: 5px;" tabindex="0">Accept</span>
                                    <?php elseif ($client['accept'] == 0) : ?>
                                        <span class="badge" style="width: 75px; background-color: #dc3545; color: #fff; font-size: 14px; padding: 5px;" tabindex="0">Declined</span>
                                    <?php endif ?>
                                </td>
                                <td class="text-center">
                                    <?php if ($client['start'] === null && $client['accept'] == 1) : ?>
                                        <button class="btn btn-success btn-sm mt-2" onclick="updateStart(<?= $client['id']; ?>, 1)" tabindex="0">Start</button>
                                    <?php elseif ($client['start'] === null && $client['accept'] === null) : ?>
                                        <button class="btn btn-secondary btn-sm mt-2" tabindex="0">Start</button>
                                    <?php elseif ($client['start'] === null && $client['accept'] == 0) : ?>
                                        <span class="badge" style="width: 75px; background-color: #dc3545; color: #fff; font-size: 14px; padding: 5px;" tabindex="0">Declined</span>
                                    <?php elseif ($client['start'] == 1 && $client['done'] == 1) : ?>
                                        <span class="badge" style="width: 100px; background-color: #28a745; color: #fff; font-size: 14px; padding: 5px;">
                                            Done
                                        </span>
                                    <?php elseif ($client['start'] == 1 && ($client['done'] == 0 || $client['done'] == null)) : ?>
                                        <span class="badge" style="width: 100px; background-color: #28a745; color: #fff; font-size: 14px; padding: 5px;">
                                            On Progress
                                        </span>
                                    <?php endif ?>
                                </td>
                                <td class="text-center">
                                    <?php if ($client['done'] === null && $client['start'] == 1) : ?>
                                        <button class="btn btn-success btn-sm mt-2" onclick="updateDone(<?= $client['id']; ?>, 1)" tabindex="0">Done</button>
                                    <?php elseif ($client['done'] == null && $client['start'] == null && ($client['accept'] == 1 || $client['accept'] === null)) : ?>
                                        <button class="btn btn-secondary btn-sm mt-2" tabindex="0">Done</button>
                                    <?php elseif ($client['done'] == null && $client['accept'] == 0 && $client['accept'] == 0) : ?>
                                        <span class="badge" style="width: 75px; background-color: #dc3545; color: #fff; font-size: 14px; padding: 5px;" tabindex="0">Declined</span>
                                    <?php elseif ($client['done'] == 1 && $client['start'] == 1) : ?>
                                        <span class="badge" style="width: 110px; background-color: #28a745; color: #fff; font-size: 14px; padding: 5px;" tabindex="0">
                                            Project Ended
                                        </span>
                                    <?php endif ?>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    function updateStatus(orderId, status) {
        $.ajax({
            url: '<?= base_url('pages/update_status'); ?>',
            method: 'POST',
            data: {
                id: orderId,
                status: status
            },
            success: function(response) {
                location.reload();
            }
        });
    }

    function updateStart(orderId, status) {
        $.ajax({
            url: '<?= base_url('pages/update_start'); ?>',
            method: 'POST',
            data: {
                id: orderId,
                status: status
            },
            success: function(response) {
                location.reload();
            }
        });
    }

    function updateDone(orderId, status) {
        $.ajax({
            url: '<?= base_url('pages/update_done'); ?>',
            method: 'POST',
            data: {
                id: orderId,
                status: status
            },
            success: function(response) {
                location.reload();
            }
        });
    }
</script>
<?= $this->endSection(); ?>
