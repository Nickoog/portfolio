<section id="my-projects" class="section">
    <div class="container">
        <div class="section-title-wrapper">
            <h2><?php _e('<strong>Mes</strong> projects', 'portfolio-theme'); ?></h2>
            <?php get_separator('50px', '2px')?>
        </div>
        <div class="owl-section owl-active owl-carousel">
            <?php
            if( have_rows('projects') ):
                while ( have_rows('projects') ) : the_row();
            ?>
                <div class="item">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="description-container">
                                <div class="translate">
                                    <?= get_sub_field('project_desc');?>
                                </div> 
                                <div class="information-wrapper">
                                    <?= get_sub_field('project_info');?>
                                </div>
                                <!-- <div class="circle-plus closed">
                                    <div class="circle">
                                        <div class="horizontal"></div>
                                        <div class="vertical"></div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="owl-section owl-active owl-carousel-inner">
                                <?php
                                if( have_rows('images') ):
                                    while ( have_rows('images') ) : the_row();
                                ?>
                                    <div class="image-wrapper">
                                        <img src="<?= get_sub_field('image')['url']?>" alt="<?= get_field('image')['alt']?>">
                                    </div>
                                <?php
                                    endwhile;
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>