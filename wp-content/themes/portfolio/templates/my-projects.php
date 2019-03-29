<section id="my-projects" class="row section">
    <div class="container">
        <div class="section-title-wrapper">
            <h2><?php _e('<strong>Mes</strong> projects', 'portfolio-theme'); ?></h2>
            <?php get_separator('50px', '2px')?>
        </div>
        <div class='row'>
            <div class="time-line-container col-lg-2">
                <?php
                if( have_rows('projects') ):
                    $i= 0;
                    while ( have_rows('projects') ) : the_row();
                        $id= "project-".$i++;
                        get_time_line(get_sub_field('project-title'), $id);
                    endwhile;
                endif;
                ?>
            </div>
            <div class="projects-container col-lg-10">
                <?php
                if( have_rows('projects') ):
                    $j= 0;
                    while ( have_rows('projects') ) : the_row();
                ?>
                    <div class="project-wrapper project-<?= $j++?>">
                        <div class="row w-100">
                            <div class="col-lg-5">
                                <div class="description-container">
                                    <h4><?= get_sub_field('project-title');?></h4>
                                    <?= get_sub_field('project_desc');?>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="owl-section owl-active owl-carousel">
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
    </div>
</section>