<?php
/**
 * Created by PhpStorm.
 * User: owonnarr
 * Date: 19.05.19
 * Time: 22:06
 */

namespace Engine;


class Request
{
    public function getAllParams()
    {
//        получает все параметры, ассоциативный массив ключ => значение
    }

    public function getParam()
    {
//        принимает параметры
    }

    public function getMethod() :string
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public function isPost() :bool
    {
        return ($_SERVER['REQUEST_METHOD'] === 'POST') ? true : false;
    }
}