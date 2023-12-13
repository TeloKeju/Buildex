<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <!-- Jquery Library -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/styles/style.css">
    <!-- Pustaka Toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
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
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= base_url('pages/daftarclient') ?>">Daftar Client</a>
                    </li>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <!-- Pustaka Toastr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <footer class="footer mt-auto py-3 bg-light">
        <p class="text-center">&copy;Copyright 2023</p>
    </footer>
</body>

</html>
