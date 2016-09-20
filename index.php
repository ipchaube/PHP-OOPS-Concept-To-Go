<?php
/**
 * Created by PhpStorm.
 * Description: This fill will be use for testing purpuses
 * User: ichaube
 * Date: 9/20/2016
 * Time: 11:14 AM
 */

/*
 * ***************START --STARTER CLASS TESTING****************
 */
//Namespace declaration statement: It should bevery first statement in the script
namespace concepts;

include_once('includes/starter.php');

/*
 * If you are not declearing name space on top of the script, Object statement will be like below
 * $objStarter= new \concepts\starter();
 *
 */
$objStarter= new starter();
//Set Name and address in starter class
$objStarter->setName("Indu Prakash Chaube");
$objStarter->setAddress("Santa Brabara, CA, USA");
//Get name and address from Starter class
$name= $objStarter->getName();
$address= $objStarter->getAddress();
echo "<b>Name: </b>". $name;
echo "<BR />";
echo "<b>Address: </b>". $address;

//***************END --STARTER CLASS TESTING****************

?>