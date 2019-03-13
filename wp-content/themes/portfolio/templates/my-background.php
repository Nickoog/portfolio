<section id="my-background" class="section">
    <div class="container">
        <div class="section-title-wrapper">
            <h2><?php _e('<strong>Mon</strong> parcours', 'portfolio-theme'); ?></h2>
            <?php get_separator('50px', '2px')?>
        </div>
        <div class="background-container">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-container">
                        <?= get_field('my_background');?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="skillbar-container">
                        <?php
                        if( have_rows('skills') ):
                            while ( have_rows('skills') ) : the_row();
                                get_skill_bar(get_sub_field('skill'), get_sub_field('percentage'));
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>