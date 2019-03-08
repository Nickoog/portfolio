<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="section-title-wrapper">
                    <h2>Contact <strong>me</strong></h2>
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
                                    <div class="col-md-6">
                                        <?php get_input('Nom'); ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?php get_input('Courriel'); ?>
                                    </div>
                                    <div class="col-md-12">
                                        <?php get_input('Sujet'); ?>
                                    </div>
                                    <div class="col-md-12">
                                        <?php get_textarea('Message'); ?>
                                    </div>       
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="info-container">
                                    <div class="info-title">
                                        <i class="fa fa-map-marker"></i>
                                        <span>Address</span>
                                    </div>
                                    <p>Montreal, QC</p>
                                    <div class="info-title">
                                        <i class="fa fa-mobile"></i>
                                        <span>Mobile</span>
                                    </div>
                                    <p>+1 514 699 7756</p>
                                    <div class="info-title">
                                        <i class="fa fa-envelope-open"></i>
                                        <span>E-mail</span>
                                    </div>
                                    <p>albertoflfilho@gmail.com</p>
                                </div>
                            </div>
                        </div> 
                        <?php get_button('Envoyer', 'submit')?>
                    </div>
                    <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
                    <div class="sent-form">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                        <p>Votre message a bien <strong>ete envoye</strong></p>
                    </div>
                    <div class="error">
                        <i class="fa fa-times-circle" aria-hidden="true"></i>
                        <p>Il semblerait qu'il y ait un probleme <strong>veuillez reessayer</strong></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>