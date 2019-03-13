<header class="banner section">
    <div class="container">
        <div class="position">
            <div class="row">
                <div class="col-12">
                    <div class="text-container">
                        <div class="title-wrapper">
                            <h1 class=""><?= get_field('name'); ?></h1>
                        </div>
                        <span class="separator"></span>
                        <div class="text-wrapper">
                            <h2 class="tlt">
                                <ul class="list">
                                <?php
                                if( have_rows('List') ):
                                    while ( have_rows('List') ) : the_row();
                                ?>
                                    <li><?= get_sub_field('description'); ?></li>
                                <?php
                                    endwhile;
                                endif;
                                ?>
                                </ul>
                            </h2>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="chevron-container">
                <div class="chevron"></div>
                <div class="chevron"></div>
                <div class="chevron"></div>
            </div>
        </div>
    </div>
</header>
