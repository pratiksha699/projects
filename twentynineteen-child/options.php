<?php
/**
 * Callback function to the add_theme_page
 * Will display the theme options page
 */
function pu_theme_page()
{
?>
<div class="section panel">
<h1>Custom Theme Options</h1>
<form method="post" enctype="multipart/form-data" action="options.php">
        <?php
          settings_fields('pu_theme_options'); 
          do_settings_sections('pu_theme_options.php');
        ?>
<p class="submit">
                <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
            
</form>
Created by <a href="http://www.paulund.co.uk">Paulund</a>.
</div>
    <?php
}