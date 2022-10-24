<section class="py-4">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="row justify-content-center">

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <a 
                        class="d-block text-center u-bg-folk-dark-marron py-3 px-2 text-decoration-none"
                        >
                            <span class="u-line-height-100 u-font-size-22 xxl:u-font-size-28 u-font-weight-bold u-font-family-cinzel u-color-folk-white"><?php echo get_field('nome_paroquia', 'option') ?></span> <br>
                            <span class="u-font-size-12 u-font-weight-bold u-font-family-lato u-color-folk-white"><?php echo get_field ('local_paroquia', 'option') ?></span>
                        </a>
                    </div>

                    <div class="col-10 col-lg-3">
                        <a >
                            <img 
                            class="img-fluid w-100 u-object-fit-cover"
                            src="<?php echo get_field('logo', 'option')?>" 
                            alt="Ordem das Mercês">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>