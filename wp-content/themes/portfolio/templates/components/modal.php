<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="section-title-wrapper">
                    <h2><?php _e('Contact <strong>me</strong>', 'portfolio-theme');?></h2>
                    <?php get_separator('50px', '2px')?>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times-circle" aria-hidden="true"></i>
                </button>
            </div>
            <div class="modal-body">
                <form id="subscription-forms" class="" object="Landing page 2019: vous avez un nouveau lead!">
                    <div class="form-container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="row">
                                    <!-- get_input($label, $required=false, $type="text", $state="") -->
                                    <?php
                                        if( have_rows('form_fields','option') ):
                                            while ( have_rows('form_fields','option') ) : the_row();
                                    ?>
                                            <div class="col-md-<?= get_sub_field('lenght'); ?>">
                                            <?php 
                                                get_input(
                                                    get_sub_field('label'), 
                                                    get_sub_field('required'), 
                                                    get_sub_field('text')
                                                );
                                            ?>
                                            </div>
                                    <?php
                                            endwhile;
                                        endif;
                                    ?>
                                    <div class="col-md-12">
                                        <?php get_textarea('Message'); ?>
                                    </div>       
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="info-container">
                                    <div class="info-title">
                                        <i class="fa fa-map-marker"></i>
                                        <span><?= get_field('adress','option'); ?></span>
                                    </div>
                                    <p><?= get_field('adress_reponse','option'); ?></p>
                                    <div class="info-title">
                                        <i class="fa fa-mobile"></i>
                                        <span><?= get_field('cell','option'); ?></span>
                                    </div>
                                    <p><?= get_field('number','option'); ?></p>
                                    <div class="info-title">
                                        <i class="fa fa-envelope-open"></i>
                                        <span><?= get_field('mail','option'); ?></span>
                                    </div>
                                    <p><?= get_field('mail_reponse','option'); ?></p>
                                </div>
                            </div>
                        </div> 
                        <?php get_button(get_field('send', 'option'), 'submit', true, 'fa fa-paper-plane', '')?>
                    </div>
                    <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
                    <div class="sent-form">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                        <p><?= get_field('success', 'option'); ?></p>
                    </div>
                    <div class="error">
                        <i class="fa fa-times-circle" aria-hidden="true"></i>
                        <p><?= get_field('error', 'option'); ?></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>