<header class="banner section">
    <div class="background-image" style="background-image:url('https://as1.ftcdn.net/jpg/01/29/15/14/500_F_129151469_W5XFsIXPV0MLmzcPFqK1ZSoDmDOyTCEq.jpg')">
        <div class='filter'>
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
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
                    <div class="col-md-7">
                        <div class="text-container">
                            <div class="title-wrapper">
                                <h1 class=""><?= get_field('name'); ?></h1>
                            </div>
                            <span class="separator"></span>
                            <div class="text-wrapper">
                                <h2><?= get_field('poste'); ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
