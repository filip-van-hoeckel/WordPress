<?
// Custom Body Classes for Mobile Agents
add_filter( 'body_class', 'mobile_agents' );
function mobile_agents( $classes ) {
    //mobile
    if (is_mobile_device()){
        $classes[] ='mobile';
    }
    elseif (is_tablet()){
        $classes[] = 'tablet';
    }
    else {
        // add 'class-name' to the $classes array
        $classes[] = 'class-name';
    }
    // return the $classes array
    return $classes;
}
?>