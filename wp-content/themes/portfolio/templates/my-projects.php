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
                    <div class="image-wrapper">
                        <img src="<?= get_sub_field('project_img')['url']?>" alt="<?= get_field('project_img')['alt']?>">
                    </div>
                    <div class="description-container">
                        <div class="translate">
                            <?= get_sub_field('project_desc');?>
                        </div> 
                        <div class="information-wrapper">
                            <?= get_sub_field('project_info');?>
                        </div>
                        <div class="circle-plus closed">
                            <div class="circle">
                                <div class="horizontal"></div>
                                <div class="vertical"></div>
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