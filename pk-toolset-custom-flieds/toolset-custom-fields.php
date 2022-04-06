<?php
// Select box for selecting photoshoot convert_invalid_entities
add_filter( 'wpt_field_options', 'pkSelectShootClient', 10, 3);
function pkSelectShootClient( $options, $title, $type )
{
    switch( $title )
    {
    case 'Shoot Client':
        $args = array(
            'orderby' => 'display_name',
            'fields' => array( 'ID', 'display_name')
        );
        foreach( get_users($args) as $user ) {
            $options[] = array(
                '#value' => $user->ID,
                '#title' => $user->display_name,
            );
        }
        break;
    }
    return $options;
}
