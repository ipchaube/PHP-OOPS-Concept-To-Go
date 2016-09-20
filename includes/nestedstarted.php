<?php
/**
 * Created by PhpStorm.
 * Description: Nested namespace concepts
 * User: ichaube
 * Date: 9/20/2016
 * Time: 11:50 AM
 */

namespace concepts\nestednamespace;


class nestedstarted
{

    function __construct() {
        //Nothing to construct for now
    }
    function __destruct() {
        //Nothing to destruct for now
    }
    
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