<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <!-- Jquery Library -->
    <script src="/vendor/jquery-3.6.4.min.js"></script>
    <link href="/vendor/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/styles/style.css">
    <!-- Pustaka Toastr -->
    <link rel="stylesheet" href="/vendor/toastr.min.css">
</head>

<body>

    <header class="navbar navbar-expand-lg bg-body-tertiary">
        <section class="container-fluid">
            <img src="https://placehold.co/75x50" alt="Logo">
            <h1 class="navbar-brand ms-2 m-auto p-2">Buildex</h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <nav class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= base_url('pages/home') ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#about">About Us</a>
                    </li>
                    <?php if (session()->get('kode_user') == 10) : ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="<?= base_url('pages/daftarclient') ?>">Daftar Client</a>
                        </li>
                    <?php endif ?>

                    <li class="nav-item">
                        <a class="nav-link active" href="<?= base_url('pages/login') ?>">Login</a>
                    </li>
                    <li class="nav-item">
                        <?php if (session()->has('username')) : ?>
                            <a href="<?= base_url('login/logout'); ?>" class="btn btn-danger">Log Out</a>
                        <?php else : ?>

                        <?php endif; ?>
                    </li>
                </ul>
            </nav>
        </section>
    </header>



    <?= $this->renderSection('content'); ?>

    <script src="/vendor/bootstrap.bundle.min.js" ></script>
    <script src="/vendor/popper.min.js"></script>
    <script src="/vendor/bootstrap.min.js"></script>
    <!-- Pustaka Toastr -->
    <script src="/vendor/toastr.min.js"></script>

    <footer class="footer mt-auto py-3 bg-light">
        <p class="text-center">&copy;Copyright 2023</p>
    </footer>
</body>

</html>
