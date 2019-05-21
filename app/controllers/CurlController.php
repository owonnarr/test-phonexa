<?php
/**
 * Created by PhpStorm.
 * User: owonnarr
 * Date: 20.05.19
 * Time: 12:44
 */

namespace App\controllers;

use app\helpers\Request;
use app\helpers\CurlHelper;

class CurlController
{
    public function send()
    {
        $xmlData = new Request();
        $curl = new CurlHelper();

        $requestData = $xmlData->getPreparedXMLData($this->getUserData());

        dd($curl->sendPost($requestData));
    }
}