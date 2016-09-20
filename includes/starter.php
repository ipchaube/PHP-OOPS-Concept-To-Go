<?php
/**
 * Created by PhpStorm.
 * Description: This fill will give you an idea, how to create name sapce, class.
 * User: ichaube
 * Date: 9/20/2016
 * Time: 11:17 AM
 */

namespace concepts;


class starter
{
    /* Member variables */
    var $name;
    var $address;

    /* Member functions */
    //Setter
    function setName($_name){
        $this->name = $_name;
    }

    function setAddress($_address){
        $this->address = $_address;
    }

    //Getter

    function getName(){
        return $this->name;
    }

    function getAddress(){
        return $this->address;
    }

}