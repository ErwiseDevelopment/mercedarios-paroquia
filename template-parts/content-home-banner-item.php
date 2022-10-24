<section class="my-5 py-5">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="row">

                    <!-- loop -->
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a 
                        class="card h-100 border-0 rounded-0 text-decoration-none u-bg-cover u-bg-no-repeat"
                        style="background-color:red"
                        href="<?php echo get_field('link_aviso'); ?>">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                

                                <p class="u-font-size-18 xl:u-font-size-22 u-font-weight-semibold u-font-family-nunito text-center u-color-folk-bold-gray">
                                   <?php echo get_field('descricao_aviso'); ?>     
                            
                                </p>
                                <h3 class="u-font-size-42 xxl:u-font-size-52 u-font-weight-bold u-font-family-cinzel-decorative text-center u-color-folk-dark-marron mb-4">
                                    Avisos <br>
                                    Paroquiais:
                                </h3>
                            </div>
                        </a>
                    </div>
                    <?php
                        $args = array(
                            'posts_per_page' => 1,
                            'post_type'      => 'aviso',
                            'order'          => 'DESC'
                        );

                        $ebooks = new WP_Query( $args );

                        if( $ebooks->have_posts() ) :
                            while( $ebooks->have_posts() ) : $ebooks->the_post();
                    ?>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a 
                        class="card h-100 border-0 rounded-0 text-decoration-none u-bg-cover u-bg-no-repeat"
                        style="background-image: url('<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/notification-background.png')"
                        href="<?php echo get_field('link_aviso'); ?>">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <h3 class="u-font-size-42 xxl:u-font-size-52 u-font-weight-bold u-font-family-cinzel-decorative text-center u-color-folk-dark-marron mb-4">
                                    Avisos <br>
                                    Paroquiais:
                                </h3>

                                <p class="u-font-size-18 xl:u-font-size-22 u-font-weight-semibold u-font-family-nunito text-center u-color-folk-bold-gray">
                                   <?php echo get_field('descricao_aviso'); ?>     
                            
                                </p>
                            </div>
                        </a>
                    </div>
                 <?php endwhile; endif;?>           
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a 
                        class="card h-100 border-0 rounded-0 text-decoration-none u-bg-cover u-bg-no-repeat"
                        style="background-color:red"
                        href="<?php echo get_field('link_aviso'); ?>">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                

                                <p class="u-font-size-18 xl:u-font-size-22 u-font-weight-semibold u-font-family-nunito text-center u-color-folk-bold-gray">
                                   <?php echo get_field('descricao_aviso'); ?>     
                            
                                </p>
                                <h3 class="u-font-size-42 xxl:u-font-size-52 u-font-weight-bold u-font-family-cinzel-decorative text-center u-color-folk-dark-marron mb-4">
                                    Avisos <br>
                                    Paroquiais:
                                </h3>
                            </div>
                        </a>
                    </div>
                    <!-- end loop -->
                </div>
            </div>
        </div>
    </div>
</section>