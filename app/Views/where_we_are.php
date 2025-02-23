<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CIG-Burger</title>
    <!-- bootstrap -->
    <link rel="shortcut icon" href="<?= base_url('assets/images/logo.png') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/app.css') ?>">
</head>
<body>
    <!-- nav -->
    <nav class="container-fluid">
        <div class="row align-items-center">
            <div class="col p-3">
                <!-- logo -->
                <img src="<?= base_url('assets/images/logo.png') ?>" alt="CIGBurger Logo">
            </div>
            <div class="col p-3 pe-5 d-flex flex-row justify-content-end">
                <div><a class="nav-link ms-5" href="<?= site_url('/') ?>">Início</a></div>
                <div><a class="nav-link ms-5" href="<?= site_url('products') ?>">Produtos</a></div>
                <div><a class="nav-link ms-5" href="<?= site_url('where_we_are') ?>">Onde estamos</a></div>
            </div>
        </div>
    </nav>

    <!-- main -->
    <section class="container product-box py-5">
        <div class="row">
            <div class="col-5 text-center">
                <img class="img-fluid" src="<?= base_url('assets/images/room.jpg') ?>" alt="Our room">
            </div>
            <div class="col-6">
                <p class="where-we-are-title mb-0">CIGBurger Paris</p>
                <p class="where-we-are-subtitle">Rua des hamburgers, 123 Paris</p>
                <p class="mb-3">Ao contrário do que se acredita, Lorem Ipsum não é simplesmente um texto randômico. Com mais de 2000 anos.</p>

                <div class="d-flex align-items-center mb-3">
                    <img src="<?= base_url('assets/images/icon_phone.png') ?>" alt="Phone" />
                    <p class="where-we-are-subtitle ms-3">
                        <a class="nav-link" href="tel:+5532998274714">+55 (32) 9 9827-4714</a>
                    </p>
                </div>

                <div class="d-flex align-items-center mb-3">
                    <img src="<?= base_url('assets/images/icon_email.png') ?>" alt="Email" />
                    <p class="where-we-are-subtitle ms-3">
                        <a class="nav-link" href="mailto:contato@cigburger.com.br">contato@cigburger.com.br</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- map -->
    <section class="container product-box py-5">
        <div class="row">
            <div class="col text-center">
                <img src="<?= base_url('assets/images/map.jpg') ?>" alt="Map" />
            </div>
        </div>
    </section>

    <!-- social networks -->
    <footer class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-6 d-flex flex-row justify-content-center">
                <div class="text-center mx-4">
                    <a href="#">
                        <img src="<?= base_url('assets/images/facebook.png') ?>" alt="Facebook" />
                    </a>
                </div>
                <div class="text-center mx-4">
                    <a href="#">
                        <img src="<?= base_url('assets/images/instagram.png') ?>" alt="Instagram" />
                    </a>
                </div>
                <div class="text-center mx-4">
                    <a href="#">
                        <img src="<?= base_url('assets/images/whatsapp.png') ?>" alt="Whatsapp" />
                    </a>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col text-center">
                <h6>Todos os direitos reservados &copy; <?= date('Y') ?></h6>
            </div>
        </div>
    </footer>

    <!-- bootstrap -->
    <script src="<?= base_url('assets/bootstrap/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>
