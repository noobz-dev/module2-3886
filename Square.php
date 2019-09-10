<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 11/21/18
 * Time: 17:16
 */
include_once ('Rectangle.php');
include_once "Resizeable.php";
class Square extends Rectangle implements Resizeable
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width);
    }
    public function resize($objShape)
    {
      $objShape->width = $objShape->width*rand(1,100);
      return 'S: '.$objShape->calculateArea().'<br>P: '.$objShape->calculatePerimeter();
    }
}