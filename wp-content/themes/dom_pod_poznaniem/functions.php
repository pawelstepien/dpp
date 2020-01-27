<?php

//Remove automatic wrapping WYSWIG editor content into <p>
function my_acf_add_local_field_groups() {
    remove_filter('acf_the_content', 'wpautop' );
}
add_action('acf/init', 'my_acf_add_local_field_groups');

function format_phone($phone) {
    if (strlen( $phone ) != 9 ) {
        return $phone;
    }
    $result = '+48&nbsp;' . substr( $phone, 0, 3 ) . '&nbsp;' . substr( $phone, 3, 3 ) . '&nbsp;' . substr( $phone, 6, 3 );
    return $result;
}

add_action('get_header', 'remove_admin_login_header');

function get_image_sources($field_name) {
    echo ''?>
        <source srcset="<?= get_field( $field_name )['sizes']['medium']?>?version=0.8"
        media="(max-width: 300px)">
        <source srcset="<?= get_field( $field_name )['sizes']['medium_large']?>?version=0.8"
        media="(max-width: 768px)">
        <source srcset="<?= get_field( $field_name )['sizes']['large']?>?version=0.8"
        media="(max-width: 1024px)">
    <?php ;
}

?>