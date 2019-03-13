<?php if($modal) :?>
<div class="button-wrapper">
    <button 
        class="portfolio-button"
        type="<?= $type; ?>" 
        name="<?= $button_title ?>" 
        data-toggle="modal" 
        data-target="<?= $modal_link ?>"
    >
        <span class="text"><?= $button_title ?></span>
        <span class="<?= $icon ?>"></span>
    </button>
</div>
<?php else :  ?>
<div class="button-wrapper">
    <a 
        href="<?= $type; ?>" 
        class="portfolio-button <?= $button_style ?>"
        target="_blank"
    >
        <span class="text"><?= $button_title ?></span>
    </a>
</div>
<?php endif; ?>
