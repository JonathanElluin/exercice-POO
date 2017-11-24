<?php

/**
 * Created by PhpStorm.
 * User: Jonathan
 * Date: 24/11/2017
 * Time: 16:52
 */
class calculator
{

    /**
     * calculator constructor.
     */
    public function __construct()
    {
    }

    static function addition($val1, $val2){
        return $val1 + $val2;
    }

    static function soustraction($val1, $val2){
        return $val1 - $val2;
    }

    static function multiplication($val1, $val2){
        return $val1 * $val2;
    }

    static function puissance($val1, $val2){
        return $val1**$val2;
    }

    static function modulo($val1, $val2){
        return $val1%$val2;
    }
}