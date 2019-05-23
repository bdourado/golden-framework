<?php
/**
 * MainController - All controllers should extend this class
 */
class MainController
{


    public function view($name, $params)
    {
        if (is_array($params)) {
            extract($params);
        }

        require ABSPATH . '/app/views/'.$name.'.php';
    }

}