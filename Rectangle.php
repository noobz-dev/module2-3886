<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 11/21/18
 * Time: 17:16
 */
include_once ('Shape.php');
include_once "Resizeable.php";
class Rectangle extends Shape implements Resizeable
{
    public $width;
    public $height;

    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea(){
        return $this->height * $this->width;
    }

    public function calculatePerimeter(){
        return ($this->height + $this->width) * 2;
    }
    public function resize($objShape)
    {
       $objShape->width = $objShape->width * rand(1,100);
       $objShape->height = $objShape->height * rand(1,100);
       return 'S: '.$objShape->calculateArea().'<br>P: '.$objShape->calculatePerimeter();
    }
}