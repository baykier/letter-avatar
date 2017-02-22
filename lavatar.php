#! /usr/bin/env php
<?php
/**
 * Created by PhpStorm.
 * Author: Baykier<1035666345@qq.com>
 * Date: 2017/2/22
 * Time: 18:28
 */
use YoHang88\LetterAvatar\LetterAvatar;

require __DIR__ . '/vendor/autoload.php';

class Lavatar extends LetterAvatar
{
    /**
     * @是否随机背景
     * @var bool
     */
    protected $randColor = true;

    public function __construct($name, $shape, $size,$randColor = true)
    {
        parent::__construct($name, $shape, $size);
        $this->randColor = (bool) $randColor;
    }

    public function save($path = null)
    {
        if (null == $path)
        {
            $path = __DIR__ . '/lavatar.png';
        }
        $this->generate()->save($path, $this->size);
    }

}


$lavatar = new Lavatar('zhang zhi jie', 'circle', 100);
$lavatar->save();