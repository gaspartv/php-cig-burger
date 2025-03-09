<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('content') ?>
    <!-- main -->
    <section class="container product-box py-5 m-auto mb-2">
        <div class="row">
            <div class="col-5 text-center">
                <img class="img-fluid" src="<?= base_url('assets/images/room.jpg') ?>" alt="Our room">
            </div>
            <div class="col-6">
                <p class="where-we-are-title mb-0">CIGBurger Paris</p>
                <p class="where-we-are-subtitle">Rua des hamburgers, 123 Paris</p>
                <p class="mb-3">Ao contrário do que se acredita, Lorem Ipsum não é simplesmente um texto randômico. Com
                    mais de 2000 anos.</p>

                <div class="d-flex align-items-center mb-3">
                    <img src="<?= base_url('assets/images/icon_phone.png') ?>" alt="Phone"/>
                    <p class="where-we-are-subtitle ms-3">
                        <a class="nav-link" href="tel:+5532998274714">+55 (32) 9 9827-4714</a>
                    </p>
                </div>

                <div class="d-flex align-items-center mb-3">
                    <img src="<?= base_url('assets/images/icon_email.png') ?>" alt="Email"/>
                    <p class="where-we-are-subtitle ms-3">
                        <a class="nav-link" href="mailto:contato@cigburger.com.br">contato@cigburger.com.br</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- map -->
    <section class="container product-box py-5 m-auto">
        <div class="row">
            <div class="col-text-center">
                <img src="<?= base_url('assets/images/map.jpg') ?>" alt="Map"/>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>