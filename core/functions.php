<?php
/**
 * function to automatically load all default classes
 * @param $class_name
 */
function __autoload($class_name) {
    $file = ABSPATH . '/core/classes/' . $class_name . '.php';

    if ( ! file_exists( $file ) ) {
        require_once ABSPATH . '/includes/404.php';
        return;
    }
    require_once $file;
}

/**
 * function to check if key exists in array
 * @param $array
 * @param $key
 * @return mixed|null
 */
function check_array ( $array, $key ) {
    if ( isset( $array[ $key ] ) && ! empty( $array[ $key ] ) ) {
        return $array[ $key ];
    }
    return null;
}