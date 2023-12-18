<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<main class="p-3">
    <form>
        <div class="mb-3">
            <label for="loginEmail" class="form-label" tabindex="0">Email address</label>
            <input type="email" class="form-control" id="loginEmail" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="loginPassword" class="form-label" tabindex="0">Password</label>
            <input type="password" class="form-control" id="loginPassword">
        </div>
        <button type="submit" class="btn btn-primary" id="btnLogin" tabindex="0">Log In</button>
        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pendaftaran">
            Daftar Sekarang
        </button> -->
    </form>

    <div class="modal fade" id="pendaftaran" tabindex="-1" aria-labelledby="pendaftaran" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="pendaftaran" tabindex="0">Pendaftaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" tabindex="0">Username anda</span>
                        </div>
                        <input type="text" class="form-control nama" id="username" placeholder="username anda" />
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" tabindex="0">Nama Lengkap</span>
                        </div>
                        <input type="text" class="form-control nama" id="nama_lengkap" placeholder="Nama Anda" />
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" tabindex="0">Email</span>
                        </div>
                        <input type="text" class="form-control kelas" id="email" placeholder="Email anda" />
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" tabindex="0">No Telephone</span>
                        </div>
                        <input type="text" class="form-control kelas" id="no_telephone" placeholder="Nomor Telepone anda" />
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" tabindex="0">Password</span>
                        </div>
                        <input type="password" class="form-control kelas" id="password" placeholder="Masukkan Password anda" />
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" tabindex="0"> Konfirmasi Password</span>
                        </div>
                        <input type="password" class="form-control kelas" placeholder="Passwordnya disamakan" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" tabindex="0">Close</button>
                    <button type="button" class="btn btn-primary" id="btnDaftar" tabindex="0">Daftar</button>
                </div>
            </div>
        </div>
    </div>

</main>

<script>
    $(document).ready(function() {
        $('#btnDaftar').click(function() {
            var username = $('#username').val();
            var nama_lengkap = $('#nama_lengkap').val();
            var email = $('#email').val();
            var no_telephone = $('#no_telephone').val();
            var password = $('#password').val();

            $.ajax({
                type: 'POST',
                url: '<?= base_url('login/register'); ?>',
                data: {
                    username: username,
                    nama_lengkap: nama_lengkap,
                    email: email,
                    no_telephone: no_telephone,
                    password: password
                },
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        console.log(response.message);
                        // window.location = '<?php //echo base_url('pages/index'); 
                                                ?>';
                        setTimeout(function() {
                            toastr.success(response.message, 'Berhasil Register!');
                            location.reload();
                        }, 2000);
                    } else {
                        alert(response.message);
                    }
                },
                error: function() {
                    alert('Terjadi kesalahan.');
                }
            });
        });

        $('#btnLogin').click(function() {
            var loginEmail = $('#loginEmail').val();
            var loginPassword = $('#loginPassword').val();
            console.log('loginEmail', loginEmail);
            console.log('loginPassword', loginPassword);

            $.ajax({
                type: 'POST',
                url: '<?= base_url('login/login'); ?>',
                data: {
                    email: loginEmail,
                    password: loginPassword
                },
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        console.log(response.message);
                        setTimeout(function() {
                            toastr.success(response.message, 'Berhasil Login!');
                            window.location = '<?= base_url('pages/index');
                                                ?>';
                        }, 2000);
                    } else {
                        alert(response.message);
                    }
                },
                error: function() {
                    alert('Terjadi kesalahan.');
                }
            });
        });
    });
</script>
<?= $this->endSection(); ?>
