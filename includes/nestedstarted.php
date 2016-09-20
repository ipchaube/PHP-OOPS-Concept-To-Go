<?php
/**
 * Created by PhpStorm.
 * User: ichaube
 * Date: 9/20/2016
 * Time: 11:50 AM
 */

namespace concepts\nestednamespace;


class nestedstarted
{
    /* Member variables */
    var $name;

    /* Member functions */
    //Setter
    function setName($_name){
        $this->name = $_name;
    }

    //Getter

    function getName(){
        return $this->name;
    }
}