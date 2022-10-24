<section class="my-5 py-5">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="row">
                     <div class="col-lg-4 my-3 my-lg-0">
                        <a 
                        class="card h-100 border-0 rounded-0 text-decoration-none u-bg-cover u-bg-no-repeat"
                        style="background-color:red"
                        href="<?php echo get_field('link_esq'); ?>">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                

                                <p class="u-font-size-18 xl:u-font-size-22 u-font-weight-semibold u-font-family-nunito text-center u-color-folk-bold-gray">
                                <img src="<?php echo get_field('icone_esq'); ?>" >  
                            
                                </p>
                                <h3 class="u-font-size-42 xxl:u-font-size-52 u-font-weight-bold u-font-family-cinzel-decorative text-center u-color-folk-dark-marron mb-4">
                                    <?php echo get_field('titulo_icon_esquerdo'); ?>
                                </h3>
                                <span 
                                class="w-100 d-block u-font-size-14 xxl:u-font-size-16 u-font-weight-regular u-font-family-lato text-center text-decoration-none u-color-folk-white u-bg-folk-dark-marron hover:u-bg-folk-dark-golden py-2" 
                                >
                                <?php echo get_field('botao_esq'); ?>
                                </span>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-lg-4 my-3 my-lg-0">
                    <!-- <php
                        $args = array(
                            'posts_per_page' => 1,
                            'post_type'      => 'aviso',
                            'order'          => 'DESC'
                        );

                        $avisos = new WP_Query( $args );

                        if( $avisos->have_posts() ) :
                            while( $avisos->have_posts() ) : $avisos->the_post();
                    ?> -->
                        <a 
                        class="card h-100 border-0 rounded-0 text-decoration-none u-bg-cover u-bg-no-repeat"
                        style="background-image: url('<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/notification-background.png')"
                        href="<?php echo get_field('link_aviso', 'option'); ?>">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <h3 class="u-font-size-42 xxl:u-font-size-52 u-font-weight-bold u-font-family-cinzel-decorative text-center u-color-folk-dark-marron mb-4">
                                    Avisos <br>
                                    Paroquiais:
                                </h3>

                                <p class="u-font-size-18 xl:u-font-size-22 u-font-weight-semibold u-font-family-nunito text-center u-color-folk-bold-gray">
                                   <?php echo get_field('descricao_aviso', 'option'); ?>     
                            
                                </p>
                            </div>
                        </a>
                        <!-- <php endwhile; endif; ?>  -->
                    </div>
                  

                    <div class="col-lg-4 my-3 my-lg-0">
                        <a 
                        class="card h-100 border-0 rounded-0 text-decoration-none u-bg-cover u-bg-no-repeat"
                        style="background-color:red"
                        href="<?php echo get_field('link_dir'); ?>">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                

                                <p class="u-font-size-18 xl:u-font-size-22 u-font-weight-semibold u-font-family-nunito text-center u-color-folk-bold-gray">
                                   <img src="<?php echo get_field('icone_dir'); ?>" >    
                            
                                </p>
                                <h3 class="u-font-size-42 xxl:u-font-size-52 u-font-weight-bold u-font-family-cinzel-decorative text-center u-color-folk-dark-marron mb-4">
                                    <?php echo get_field('titulo_icon_direito'); ?>
                                </h3>
                                <span 
                                class="w-100 d-block u-font-size-14 xxl:u-font-size-16 u-font-weight-regular u-font-family-lato text-center text-decoration-none u-color-folk-white u-bg-folk-dark-marron hover:u-bg-folk-dark-golden py-2" 
                                >
                                <?php echo get_field('botao_dir'); ?>
                                </span>
                            </div>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>