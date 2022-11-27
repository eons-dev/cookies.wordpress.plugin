<?php

/**
 * Add the html required for the cookie button.
 * @return void
 */
function inject_cookie_button() {
    $button_html = '
<div id="usercentrics-psl" class="fl-module fl-module-button">
    <div class="fl-module-content fl-node-content">
        <div class="fl-button-wrap fl-button-width-auto fl-button-center">
            <a href="JavaScript:onClick=UC_UI.showSecondLayer();" target="_self" class="fl-button"role="button"></a>
        </div>
    </div>
</div>
';
    echo $button_html;
}
add_action('wp_footer', 'inject_cookie_button');

