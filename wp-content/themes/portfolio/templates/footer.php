<footer class="content-info">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center w-100">
            <div>Copyright © <?php echo date("Y"); ?></div>
            <div class="social-container">
                <?php
                    if( have_rows('links', 'option') ):
                        while ( have_rows('links','option') ) : the_row();
                ?>
                        <a href="<?= get_sub_field('link','option')?>"><span class="<?= get_sub_field('logo','option')?>"></span></a>
                <?php
                        endwhile;
                    endif;
                ?>
            </div>
        </div>
    </div>
</footer>
