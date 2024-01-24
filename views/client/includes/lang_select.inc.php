<select class="select2" name="lang" id="lang-select">
    <option value="en" <?php if ($_SESSION['lang'] === 'en') echo ' selected'; ?>>
    <?php echo __('en'); ?>
    </option>
    <option value="fr" <?php if ($_SESSION['lang'] === 'fr') echo ' selected'; ?> >
        <?php echo __('fr'); ?>
    </option>
</select>