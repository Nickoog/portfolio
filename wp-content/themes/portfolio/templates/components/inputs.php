<div class="input-wrapper">
    <div class="textInput <?php echo ($required)?"required ":""; echo ($state == "success" || $state == "failed") ? $state:""; echo $type; ?>">
        <label class="inp">
            <input name="<?= $label; ?>" type="<?= $type ?>" placeholder="&nbsp;">
            <span class="span-label"><?= $label; ?></span>
            <span class="span-border"></span>
        </label>
        <i class="fa fa-times failed"></i>
        <i class="fa fa-check success"></i>
    </div>
</div>