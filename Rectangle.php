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
    public function resize($objShape,$percent)
    {
       $resize = $percent /100;
       $objShape->width = $objShape->width * $resize + $objShape->width;
       $objShape->height = $objShape->height * $resize + $objShape->height;
    }
}