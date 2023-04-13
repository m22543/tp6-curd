<?php
/**
 * Created by PhpStorm.
 * Date: 2021/7/8
 * Time: 10:54 PM
 */
namespace xingchen\tp6curd\strategy;

use xingchen\tp6curd\template\IAutoMake;

class AutoMakeStrategy
{
    protected $strategy;

    public function Context(IAutoMake $obj)
    {
        $this->strategy = $obj;
    }

    public function executeStrategy($flag, $path, $other)
    {
        $this->strategy->check($flag, $path);
        $this->strategy->make($flag, $path, $other);
    }
}