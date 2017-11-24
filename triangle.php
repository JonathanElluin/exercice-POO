<?php

/**
 * Created by PhpStorm.
 * User: Jonathan
 * Date: 24/11/2017
 * Time: 13:47
 */
class triangle
{
    private $coteA;
    private $coteB;
    private $coteC;

    /**
     * triangle constructor.
     * @param $coteA
     * @param $coteB
     * @param $coteC
     */
    public function __construct($coteA, $coteB, $coteC)
    {
        $this->coteA = $coteA;
        $this->coteB = $coteB;
        $this->coteC = $coteC;
    }


    /**
     * @return mixed
     */
    public function getCoteA()
    {
        return $this->coteA;
    }

    /**
     * @param mixed $coteA
     */
    public function setCoteA($coteA)
    {
        $this->coteA = $coteA;
    }

    /**
     * @return mixed
     */
    public function getCoteB()
    {
        return $this->coteB;
    }

    /**
     * @param mixed $coteB
     */
    public function setCoteB($coteB)
    {
        $this->coteB = $coteB;
    }

    /**
     * @return mixed
     */
    public function getCoteC()
    {
        return $this->coteC;
    }

    /**
     * @param mixed $coteC
     */
    public function setCoteC($coteC)
    {
        $this->coteC = $coteC;
    }

    public function triangleIsocele()
    {
        if($this->coteA == $this->coteB || $this->coteA == $this->coteC || $this->coteB == $this->coteC){
            return "true";
        }
        return "false";
    }

    public function triangleEqui(){
        if($this->coteA == $this->coteB && $this->coteA == $this->coteC){
            return "true";
        }
        return "false";
    }

    public function triangleRect(){
        $cote = array($this->coteA, $this->coteB, $this->coteC);
        sort($cote,SORT_NUMERIC);
        if((($cote[1])**2) + (($cote[0])**2) == ($cote[2])**2){
            return "true";
        }
        return "false";
    }

    public function triangleScal(){
        if($this->coteA !== $this->coteB && $this->coteA !== $this->coteC && $this->coteB !== $this->coteC){
            return "true";
        }
        return "false";
    }
}