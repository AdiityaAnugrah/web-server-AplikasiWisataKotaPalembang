    <?= $this->extend('admin/layout/template')?>
    <?= $this->Section('content')?>


    <div id="layoutSidenav_content">
        <!-- <a>
            <lottie-player src="https://assets9.lottiefiles.com/datafiles/ft3xlpduRes83XO/data.json"
                background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay>
            </lottie-player>
        </a> -->

        <a href="<?=base_url('produk')?>" class="bct">
            <lottie-player class="position-fixed" src="https://assets4.lottiefiles.com/packages/lf20_1pxqjqps.json"
                background="transparent" speed="1" loop autoplay></lottie-player>
        </a>



        <?= $this->endSection() ?>