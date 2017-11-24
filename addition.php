<?php

/**
 * Created by PhpStorm.
 * User: Jonathan
 * Date: 24/11/2017
 * Time: 15:15
 */
class addition
{
    private $triangle1;
    private $triangle2;

    /**
     * addition constructor.
     * @param $triangle1
     * @param $triangle2
     */
    public function __construct(triangle $triangle1, triangle $triangle2)
    {
        $this->triangle1 = $triangle1;
        $this->triangle2 = $triangle2;
    }

    /**
     * @return mixed
     */
    public function getTriangle1()
    {
        return $this->triangle1;
    }

    /**
     * @param mixed $triangle1
     */
    public function setTriangle1($triangle1)
    {
        $this->triangle1 = $triangle1;
    }

    /**
     * @return mixed
     */
    public function getTriangle2()
    {
        return $this->triangle2;
    }

    /**
     * @param mixed $triangle2
     */
    public function setTriangle2($triangle2)
    {
        $this->triangle2 = $triangle2;
    }

    protected function aireTriangle(triangle $triangle){
        $p = $triangle->getCoteA() + $triangle->getCoteB() + $triangle->getCoteC();
        $s = $p/2;
        return sqrt($s*($s-$triangle->getCoteA())*($s-$triangle->getCoteB())*($s-$triangle->getCoteC()));
    }

    protected function perimTriangle(triangle $triangle){
        return $triangle->getCoteA() + $triangle->getCoteB() + $triangle->getCoteC();
    }

    public function sommeFormesPerim(){
        return $this->perimTriangle($this->triangle1) + $this->perimTriangle($this->triangle2);
    }

    public function sommeFormesAire(){
        return $this->aireTriangle($this->triangle1) + $this->aireTriangle($this->triangle2);
    }
}