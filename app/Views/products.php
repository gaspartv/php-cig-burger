<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('content') ?>
<!-- main -->
<section class="container">
    <div class="col">
        <!-- burger 01 -->
        <div class="row mb-5 product-box">
            <div class="col-5 text-center">
                <img class="img-fluid" src="<?= base_url('assets/images/burger_01.png') ?>" alt="Burger 1"/>
            </div>
            <div class="col-7 p-5">
                <h1 class="mb-3 product-text-color">Burguer 1</h1>
                <p class="mb-3">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de
                    impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma
                    bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.</p>
                <h2 class="mt-3 product-text-color">R$15,00</h2>
            </div>
        </div>

        <!-- burger 02 -->
        <div class="row mb-5 product-box">
            <div class="col-7 p-5">
                <h1 class="mb-3 product-text-color">Burguer 2</h1>
                <p class="mb-3">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de
                    impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma
                    bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.</p>
                <h2 class="mt-3 product-text-color">R$14,00</h2>
            </div>
            <div class="col-5 text-center">
                <img class="img-fluid" src="<?= base_url('assets/images/burger_02.png') ?>" alt="Burger 2"/>
            </div>
        </div>

        <!-- burger 03 -->
        <div class="row mb-5 product-box">
            <div class="col-5 text-center">
                <img class="img-fluid" src="<?= base_url('assets/images/burger_03.png') ?>" alt="Burger 3"/>
            </div>
            <div class="col-7 p-5">
                <h1 class="mb-3 product-text-color">Burguer 3</h1>
                <p class="mb-3">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de
                    impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma
                    bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.</p>
                <h2 class="mt-3 product-text-color">R$12,00</h2>
            </div>
        </div>

        <!-- burger 04 -->
        <div class="row mb-5 product-box">
            <div class="col-7 p-5">
                <h1 class="mb-3 product-text-color">Burguer 4</h1>
                <p class="mb-3">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de
                    impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma
                    bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.</p>
                <h2 class="mt-3 product-text-color">R$9,00</h2>
            </div>
            <div class="col-5 text-center">
                <img class="img-fluid" src="<?= base_url('assets/images/burger_04.png') ?>" alt="Burger 4"/>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
