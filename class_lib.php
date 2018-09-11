<?php
/**
 * Created by PhpStorm.
 * User: amir.zamani
 * Date: 10.09.18
 * Time: 19:06
 */

class person
{

    var $name;

    function get_name()
    {

        return $this->name;
    }

    function set_name($new_name)
    {
        $this->name = $new_name;
    }


}