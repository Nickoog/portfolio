<section id="about-me" class="section">
    <div class="container">
        <div class="section-title-wrapper">
            <h2><?php _e('A propos de <strong>moi</strong>', 'portfolio-theme');?></h2>
            <?php get_separator('50px', '2px'); ?>
        </div>
        <div class="content-container animated">
            <div class="row justify-content-end">
                <div class="col-md-9">
                    <div class="text-container">
                        <?= get_field('resume'); ?>
                    </div>
                </div>
            </div>
            <div class="row justify-content-end">
                <?php
                    if( have_rows('skills_bloc') ):
                        while ( have_rows('skills_bloc') ) : the_row();
                            echo'<div class="col-md-3">';
                            get_skill(get_sub_field('class'), get_sub_field('bloc_title'), get_sub_field('bloc-content'));
                            echo'</div>';
                        endwhile;
                    endif;
                ?>
            </div>
            <div class="row width">
                <div class="col-md-3">
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="button-container">
                                <?php get_button('Télécharger mon CV');?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="button-container">
                                <?php get_button('Contact');?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portrait-wrapper animated">
        <div id="portrait" class="background-image" style="background-image:url('<?= get_field('portrait')['url']; ?>')">
            <div class="filter"></div>
        </div>
    </div>
</section>