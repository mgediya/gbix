<?php
if( have_rows('components') ) {
    while ( have_rows('components') ) {
        the_row();
        $layout = get_row_layout();
        switch ($layout) {

            case "annual_return":
                include(locate_template('template-part/components/annual_return.php'));
                break;

            case "crypto_platforms":
                include(locate_template('template-part/components/crypto_platforms.php'));
                break;

            case "cryptos_services":
                include(locate_template('template-part/components/cryptos_services.php'));
                break;

            case "why_gbix":
                include(locate_template('template-part/components/why_gbix.php'));
                break;

            case "free_report":
                include(locate_template('template-part/components/free_report.php'));
                break;

            case "trusted_leader":
                include(locate_template('template-part/components/trusted_leader.php'));
                break;

            case "gbix_team":
                include(locate_template('template-part/components/gbix_team.php'));
                break;

            case "contact_us":
                include(locate_template('template-part/components/contact_us.php'));
                break;

            case "two_column":
                include(locate_template('template-part/components/two_column.php'));
                break;

            case "crypto_currencies":
                include(locate_template('template-part/components/crypto_currencies.php'));
                break;

            case "manual_assurances":
                include(locate_template('template-part/components/manual_assurances.php'));
                break;

            case "get_started":
                include(locate_template('template-part/components/get_started.php'));
                break;

            case "why_crypto":
                include(locate_template('template-part/components/why_crypto.php'));
                break;

            case "choose_what_s_best":
                include(locate_template('template-part/components/choose_what_s_best.php'));
                break;

            case "wysiwyg_editor":
                include(locate_template('template-part/components/wysiwyg_editor.php'));
                break;
        }
    }
}

?>