<?
// Mobile Detection
function is_ipad() { // if the user is on an iPad
    $is_ipad = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'iPad');
    if ($is_ipad)
        return true;
    else return false;
}
function is_iphone() { // if the user is on an iPhone
    $cn_is_iphone = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'iPhone');
    if ($cn_is_iphone)
        return true;
    else return false;
}
function is_ipod() { // if the user is on an iPod Touch
    $cn_is_iphone = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'iPod');
    if ($cn_is_iphone)
        return true;
    else return false;
}
function is_ios() { // if the user is on any iOS Device
    if (is_iphone() || is_ipad() || is_ipod())
        return true;
    else return false;
}
function is_android() { // detect ALL android devices
    $is_android = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'Android');
    if ($is_android)
        return true;
    else return false;
}
function is_android_mobile() { // detect only Android phones
    $is_android   = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'Android');
    $is_android_m = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'Mobile');
    if ($is_android && $is_android_m)
        return true;
    else return false;
}
function is_android_tablet() { // detect only Android tablets
    if (is_android() && !is_android_mobile())
        return true;
    else return false;
}
function is_mobile_device() { // detect Android Phones, iPhone or iPod
    if (is_android_mobile() || is_iphone() || is_ipod())
        return true;
    else return false;
}
function is_tablet() { // detect Android Tablets and iPads
    if ((is_android() && !is_android_mobile()) || is_ipad())
        return true;
    else return false;
}
?>